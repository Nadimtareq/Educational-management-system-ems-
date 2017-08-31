<?php

namespace App\Modules\Student\Http\Controllers;

use App\Model\Student\StudentInfo;
use App\Model\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $id = null;
    public function __construct()
    {

        $this->middleware('basicauth');
        $this->middleware('studentrole');
    }

    public function index()
    {
       $this->id= Sentinel::getUser()->id;
        $basic = [];
        $basic=User::find($this->id);
        return view('student::basic.index',compact('basic'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }


    public function edit($id)
    {
       /* $this->id =  Sentinel::getUser()->id;
        $basic=StudentInfo::find( $this->id);
        return view('student::basic.edit',compact('basic'));*/
    }
    public function update(Request $request)
    {
         $user = User::find($request->user_id);

          $data = array(
            'about'=>$request->about,
             'pre_add'=>$request->pre_add,
              'c_1' =>$request->c_1
          );

        $user->Studentinfo()->update($data);


        if($user){

            return Redirect::back()->with('message','successfully updated');
        }else{

            return Redirect::back()->with('warning','updated failed');
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
