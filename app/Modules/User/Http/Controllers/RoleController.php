<?php

namespace App\Modules\User\Http\Controllers;

use App\Model\User\SuperAdmin\Studentinfo;
use App\Model\User\SuperAdmin\Teacherinfo;
use App\Model\User\Role;
use App\Model\User\SuperAdmin\Admininfo;
use App\Model\User\SuperAdmin\Staffinfo;
use App\Model\User\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Debug\Exception\FatalErrorException;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public  function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
    public function index()
    {
        $user= User::all();
        $role = Role::all();

        $data = array('user' => $user,
       'role' => $role);

        return view('user::role.index')->with($data);
    }

    public function update(Request $request)
    {
       try{
                 $user = Sentinel::findById($request->user_id);
                 $role = Sentinel::findRoleBySlug($request->old_role);

                  if($role){
                      $role->users()->detach($user);
                  }
                  $user_attach = Sentinel::findById($request->user_id);
                  $role_attach = Sentinel::findRoleBySlug($request->role);
                  $role_attach->users()->attach($user_attach);

                 $msg= "The User is Assign as $request->role";


                  if($role_attach->slug=="teacher"){
                      $teacher= TeacherInfo::firstOrNew(['users_id' => $request->user_id]);
                      $teacher->users_id = $request->user_id;

                      $teacher->save();

                    }
                  if($role_attach->slug=="staff" || $role_attach->slug=="accountant"){


                   $staff = Staffinfo::firstOrNew(['users_id' => $request->user_id]);
                      $staff->users_id = $request->user_id;

                      $staff->save();
                  }
                  if($role_attach->slug=="student"){


                   $student = Studentinfo::firstOrNew(['users_id' => $request->user_id]);
                   $student->users_id = $request->user_id;

                   $student->save();


                  }

                   if($role_attach->slug=="admin" ||$role_attach->slug=="superadmin"){
                      $admin = Admininfo::firstOrNew(['user_id' => $request->user_id]);

                       $admin->save();
                     }
                  Session::flash('alert',$msg);
                  return Redirect::back();

       }catch(\Exception $exception){



           $msg= "The User is not Assign as $request->role";

           Session::flash('alert',$msg);
           return Redirect::back();
       }



    }

}
