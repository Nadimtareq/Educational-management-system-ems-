<?php

namespace App\Modules\User\Http\Controllers\SuperAdmin;

use App\Model\User\SuperAdmin\Staffinfo;
use App\Model\User\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =  DB::select('select users.first_name,users.id, staff.c_1,staff.desination,staff.fs_1 from users INNER JOIN role_users ON users.id = role_users.user_id JOIN roles ON role_users.role_id = roles.id JOIN staff ON staff.users_id = users.id WHERE roles.slug = :role', ['role' => 'staff']);


       return view('user::superadmin.staff.index')->with('staff',$user);
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


        return view('user::superadmin.staff.edit')->with('staff',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $user = User::find($request->user_id);

            $user->first_name = $request->name;

            $user->email = $request->email;
            $user->updated_by = Sentinel::getUser()->id;
            $user->update();

            $staff = Staffinfo::firstOrNew(['users_id' => $request->user_id]);
            $staff->religion = $request->religion;
            $staff->c_1 = $request->contact;
            $staff->desination = $request->designation;
            $staff->fs_1 = $request->speacial;
            $staff->about = $request->about;
            $staff->nationality = $request->nationality;
            $staff->birth_date = $request->birth_date;
            $staff->v_id = $request->v_id;
            $staff->per_add = $request->per_add;
            $staff->pre_add = $request->pre_add;
            $staff->c_2 = $request->c_2;
            $staff->salary_info = $request->salary_info;
            $staff->salary_note = $request->salary_note;
            $staff->desination = $request->desination;
            $staff->edu_level = $request->edu_level;
            $staff->fs_2 = $request->fs_2;
            $staff->fs_3 = $request->fs_3;
            $staff->join_date = $request->join_date;
            $staff->ending_date = $request->ending_date;
            $staff->save();

            Session::flash('info', 'Updated successfully.');
            return Redirect::back();
        }catch (QueryException $exception){
            Session::flash('danger', 'Duplicate Email ! Plase give valid mail.');
            return Redirect::back();
        }catch (\Exception $exception){


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
        //
    }
}
