<?php

namespace App\Modules\User\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

use Illuminate\Http\Request;
use App\Model\User\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;

class ProfileController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
     $id= Sentinel::getUser()->id;


     $user = User::find($id);

     return view('user::Profile.index')->with('user',$user);
    }
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
      try{
          $id= Sentinel::getUser()->id;
          $user = User::find($id);
          $pw = $request->old_user_password;
          if (Hash::check($pw, $user->password)) {

          $user->email =$request->user_email;
          $user->phone = $request->user_phone;
          $user->first_name = $request->user_name;
          if(strlen($request->new_user_password)>5){
              $user->password = bcrypt($request->new_user_password);
          }

          $user->update();


          }else{

              throw new \Exception("failed");
          }
      }catch (Exception $exception){

        return "no data";
      }




        //return $user;

     //if($request->old_user_password)

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $user=User::find($id);
         $user->delete();
        Session::flash('danger', 'User is deleted');
        return Redirect::back();
    }
}
