<?php

namespace App\Modules\Teacher\Http\Controllers;

use App\Model\User\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Model\User\SuperAdmin\teacherinfo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BasicinfoController extends Controller
{
    public $id = null;
    public function __construct()
    {

        $this->middleware('basicauth');
        $this->middleware('teacherrole');


    }

    public function index()
    {

        $this->id =  Sentinel::getUser()->id;

         $teacher = User::find($this->id);
        
     

        return view('teacher::basicinfo')->with('teacher',$teacher);
    }

    public function update(Request $request)
    {
        try {
			 $this->id =  Sentinel::getUser()->id;
			
            $user = User::find($this->id);

            $user->email = $request->email;
			$user->phone = $request->contact;
            $user->updated_by = Sentinel::getUser()->id;
            $user->update();
               
		
			
           $user->find($this->id)->teacherinfo()->update(array(
			"about" =>$request->about,
			"pre_add" =>$request->pre_add
			));
            
            Session::flash('info', 'Updated successfully.');
            return Redirect::back();
        }catch (\Illuminate\Database\QueryException $exception){
			 dd($exception);
            Session::flash('danger', 'Duplicate Email ! Plase give valid mail.');
            return Redirect::back();
        }catch (\Exception $exception){
            dd($exception);

            Session::flash('danger', 'failed to Update.');
            return Redirect::back();
        }
    }
}
