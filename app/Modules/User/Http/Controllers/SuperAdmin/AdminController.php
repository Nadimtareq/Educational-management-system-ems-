<?php

namespace App\Modules\User\Http\Controllers\SuperAdmin;

use App\Model\User\Role;
use App\Model\User\User;
use App\Modules\User\Http\Requests\Superadmin\AdminPostRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Model\User\SuperAdmin\Admininfo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $user= DB::select('select users.first_name,users.id,users.email,admininfos.phone from users INNER JOIN role_users ON users.id = role_users.user_id JOIN roles ON role_users.role_id = roles.id JOIN admininfos ON admininfos.user_id = users.id WHERE roles.slug =:role', ['role' => 'admin']);



        return view('user::superadmin.admin.index')->with('admin',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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


        return view('user::superadmin.admin.edit')->with('admin',$user);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPostRequest $request)
    {
        try {
            $user = User::find($request->user_id);

            $user->first_name = $request->name;

            $user->email = $request->email;
            $user->updated_by = Sentinel::getUser()->id;

            $user->update();

            $admin = Admininfo::firstOrNew(['user_id' => $request->user_id]);
            $admin->phone = $request->phone;
            $admin->save();

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
    public  function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
}
