<?php

namespace App\Modules\User\Http\Controllers\SuperAdmin;

use App\Model\Teacher\TeacherInfo;
use App\Model\User\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Modules\User\Http\Requests\Superadmin\teacherPostRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =  DB::select('select users.first_name,users.id, teacher_infos.c_1,teacher_infos.desination,teacher_infos.fs_1 from users INNER JOIN role_users ON users.id = role_users.user_id JOIN roles ON role_users.role_id = roles.id JOIN teacher_infos ON teacher_infos.users_id = users.id WHERE roles.slug = :role', ['role' => 'teacher']);


        return view('user::superadmin.teacher.index')->with('teacher',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);


        return view('user::superadmin.teacher.edit')->with('teacher',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(teacherPostRequest $request)
    {
        try {
            $user = User::find($request->user_id);

            $user->first_name = $request->name;

            $user->email = $request->email;
            $user->updated_by = Sentinel::getUser()->id;
            $user->update();

            $teacher = TeacherInfo::firstOrNew(['users_id' => $request->user_id]);
            $teacher->religion = $request->religion;
            $teacher->c_1 = $request->contact;
            $teacher->desination = $request->designation;
            $teacher->fs_1 = $request->speacial;
            $teacher->about = $request->about;
            $teacher->nationality = $request->nationality;
            $teacher->birth_date = $request->birth_date;
            $teacher->v_id = $request->v_id;
            $teacher->per_add = $request->per_add;
            $teacher->pre_add = $request->pre_add;
            $teacher->c_2 = $request->c_2;
            $teacher->salary_info = $request->salary_info;
            $teacher->salary_note = $request->salary_note;
            $teacher->desination = $request->designation;
            $teacher->eud_level = $request->eud_level;
            $teacher->fs_2 = $request->fs_2;
            $teacher->fs_3 = $request->fs_3;
            $teacher->join_date = $request->join_date;
            $teacher->ending_date = $request->ending_date;
            $teacher->save();

            Session::flash('info', 'Updated successfully.');
            return Redirect::back();
        }catch (QueryException $exception){
            Session::flash('danger', 'Duplicate Email ! Plase give valid mail.');
            return Redirect::back();
        }catch (\Exception $exception){
             dd($exception);

            Session::flash('danger', 'failed to Update.');
            return Redirect::back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Session::flash('info', 'Nothing Happen.');
        return Redirect::back();
    }
}
