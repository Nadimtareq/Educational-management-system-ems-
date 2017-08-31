<?php

namespace App\Modules\Auth\Http\Controllers;


use App\Model\User\User;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottleCheckpoint;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        try{
            if (!filter_var($request->login_email, FILTER_VALIDATE_EMAIL) === false) {
                $credentials = [
                    'email'    => trim($request->login_email),
                    'password' => trim($request->login_password),
                ];
                $user= Sentinel::Authenticate($credentials);
            } else {

                $user = User::take(1)->Username($request->login_email)->get();

                if (Hash::check($request->login_password, $user[0]->password))
                {
                    $user = Sentinel::findById($user[0]->id);
                    $user= Sentinel::login($user);
                }

            }

            if($user){
                Session::flash('info', 'Welcome, ');
                return redirect('/');
            }else{
                return back('Wrong credentials');
            }


        }catch(\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e){

            Session::flash('danger', $e->getMessage());
            return back()->withInput();
        }catch(\Cartalyst\Sentinel\Checkpoints\ThrottlingException $e){
            Session::flash('danger', $e->getMessage());
            return back()->withInput();
         }catch(\Exception $e ){


            Session::flash('danger', 'Wrong Username & Password');
            return back()->withInput();
        }


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
    public function login()
    {
        return view('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        try {
            Sentinel::logout();
            Session::flash('success', 'Logout Completed');
            return redirect('/login');
        }catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e){

            Session::flash('success', 'Not activated');
            return redirect('/login');
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
