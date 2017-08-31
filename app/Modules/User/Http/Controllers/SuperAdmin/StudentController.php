<?php

namespace App\Modules\User\Http\Controllers\SuperAdmin;

use App\Model\User\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user =  DB::select('select users.first_name,users.id as userid, student_infos.* from users INNER JOIN role_users ON users.id = role_users.user_id JOIN roles ON role_users.role_id = roles.id JOIN student_infos ON student_infos.users_id = users.id WHERE roles.slug = :role', ['role' => 'student']);


        return view('user::superadmin.student.index')->with('student',$user);
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



        return view('user::superadmin.student.edit')->with('student',$user);
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

      
	   
      $user = User::find($request->user_id);

      $user->email = $request->email;
      $user->phone = $request->contact;
      $user->first_name = $request->name;
      $user->update();
      $data = array(
          'birth_date' => $request->birth_date,
          'religion' =>$request->religion,
          'c_2' =>$request->c_2,
          'gur_vid' =>$request->gur_vid,
          'gur_name' =>$request->gur_name,
          'gur_c1' =>$request->gur_c1,
          'gur_c2' =>$request->gur_c2,
          'about' =>$request->about,
          'per_add' =>$request->per_add,
          'pre_add' =>$request->pre_add,
          'nationality' =>$request->nationality,
          'v_id' =>$request->v_id,

      );
      $user->Studentinfo()->updateOrCreate($data);


        Session::flash('success', 'Success');
        return Redirect::back();
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
