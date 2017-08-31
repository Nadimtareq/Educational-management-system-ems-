<?php

namespace App\Modules\Leave\Http\Controllers;
use App\Model\Leave\Leave;
use App\Model\User\Role;
use App\Model\User\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Validator;
class LeaveController extends Controller
{
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
    public function index()
    {
        $leave=Leave::all();
        return view('leave::leave.index')->with('leave',$leave);
    }


    public function create()
    {
        $leave=Leave::all();
        $role= Role::all();
        $user=User::all();
        return view('leave::leave.create',compact('leave','role','user'));

    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'start_date' => 'required',
            'end_date' => 'required',
            'reason' => 'required',


        ]);
        if ($validator->fails()) {
            return Redirect::route('leave_create')->withErrors($validator);
        }
        $leave= new Leave();
        //$leave->role_id=$request->user_type;
        $leave->users_id=$request->name;
        $leave->note=$request->reason;
        $leave->start_date =$request->start_date;
        $leave->end_date =$request->end_date;
        $leave->created_by = Sentinel::getUser()->id;
        $leave->updated_by = Sentinel::getUser()->id;
        $leave->save();

        if($leave){

        return Redirect::route('leave')->with('message','successfully store');
    }else{

        return Redirect::back()->with('message','store failed');
        }
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $leave = Leave::find($id);
        return view('leave::leave.edit')->with('leave',$leave);
    }

    public function update(Request $request, $id)
    {

     $validator = Validator::make($request->all(), [
            'user' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'reason' => 'required',

        ]);
        if ($validator->fails()) {
             return Redirect::route('leave_edit',$id)->withErrors($validator);
        }
        $leave = Leave::find($id);
         //return "$leave";
        //dd($leave);
        $leave->users_id=$request->user;
        $leave->note=$request->reason;
        $leave->start_date =$request->start_date;
        $leave->end_date =$request->end_date;
        $leave->update();
        if($leave){

            return Redirect::route('leave')->with('message','successfully updated');
        }else{

            return Redirect::back()->with('warning','updated failed');
        }

    }

    public function delete($id)
    {
        $leave = Leave::find($id);
        $leave->delete();
        return Redirect::back()->with('message','Successfully Deleted ');

    }
}
