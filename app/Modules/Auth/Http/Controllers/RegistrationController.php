<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Model\User\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Modules\Auth\Http\Requests\RegistrationPostRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;

class RegistrationController extends Controller
{
   protected $email = '';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationPostRequest $request)
    {

        $request->session()->reflash();
        $flag= 0;
        if(strlen($request->email)>0){
            $this->email  = $request->email;
            $flag= 1;
        }else{
            $this->email  = "Please_Change_Email_".uniqid();
          }
        $credentials = [
            'password' => trim($request->register_password),
            'first_name' =>$request->register_name,
            'email'=>$this->email,
            'phone'=>$request->phone,
        ];


        try{

               if($flag){
                    $user = Sentinel::register($credentials);
                    $useractive = Sentinel::findById($user->id);
                    $active= Activation::create($useractive);
                    $u = User::find($user->id);
                    $u->phone = $request->phone;
                    $u->save();
                    if($u->id){
                        Mail::send('vendor.mail.welcome', array('user' => $user,'code'=>$active->code), function ($message) use ($user) {
                            $message->to($user->email, 'PHP DEvS')->subject('Welcome to the ONTIK EMS MINI ERP!');
                        });
                    }else{
                        Session::flash('danger', "Registration Failed");
                        return back()->withInput();
                    }

                }else{
                 $user= Sentinel::registerAndActivate($credentials);
                   $u = User::find($user->id);
                   $u->phone = $request->phone;
                   $u->save();

               }


                Session::flash('success', 'Sign Up Completed!');
                return back();

        }catch (QueryException $e){

            Session::flash('danger', "Email Already Exists");
            return back()->withInput();
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
        //
    }
    public function activate($id,$code)
    {
        $user = Sentinel::findById($id);

        try{
            if (Activation::complete($user, $code))
            {
                $role = Sentinel::findRoleByName('deactivate');

                $role->users()->attach($user);

                Session::flash('success', 'Activation Completed!');
                return redirect('login');
            }elseif (Activation::completed($user)){

                Session::flash('success', 'Activation already completed!');
                return redirect('login');
            }
            else
            {
                Session::flash('success', 'Activation not found!');
                return redirect('login');
            }
        }catch (\Exception $exception){
            Session::flash('danger', 'Activation not found!');
            return redirect('login');
        }



    }
}
