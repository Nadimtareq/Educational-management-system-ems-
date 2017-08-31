<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Model\User\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;

class ForgotPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('auth::ForgotPassword.index');
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

     try{
         $user = User::email($request->email)->get();


         if(count($user)){
             $Resetuser = User::find($user[0]->id);

             $Resetuser->token = uniqid();

             $Resetuser->update();

               Mail::send('vendor.mail.resetpassword', array('user' => $Resetuser,'token'=>$Resetuser->token,'id'=>$Resetuser->id), function ($message) use ($user) {
                 $message->to($user[0]->email, 'PHP DEvS')->subject(' ONTIK EMS! Password Reset');
             });

             Session::flash('success', 'Email has been sent . Please Check Email');
             return Redirect::back();

         }else{

             Session::flash('danger', 'Email Not Found');
             return Redirect::back();
         }
     }catch (Exception $exception){

         Session::flash('danger', 'Email Not Found .Try Again with valid mail');
         return Redirect::back();
     }


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
    public function update(Request $request)
    {

      try{
          $user = User::Token($request->token)->get();

          if(count($user)){
              $user[0]->token = '';
              $user[0]->password = bcrypt($request->password);

              $user[0]->save();

              Session::flash('success', 'Password reset successfully');
              return view('login');
          }else{

              Session::flash('danger', 'Varification Expired');
              return view('auth::ForgotPassword.index');
          }


      }catch (Exception $exception)
      {

          Session::flash('danger', 'Varification Expired');
          return view('auth::ForgotPassword.index');
      }

     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activate($id,$token)
    {


        try{
            $user = User::Id($id)->Token($token)->get();
            if(count($user)){

                Session::flash('success', 'Give Your New Password');
                return view('auth::ForgotPassword.reset')->with('token',$user[0]->token);
            }else{
                Session::flash('danger', 'Varification Expired');
                return view('auth::ForgotPassword.index');
            }


        }catch (Exception $exception){


            Session::flash('danger', 'Varification Expired');
        }


    }
}
