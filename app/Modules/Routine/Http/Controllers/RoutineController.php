<?php

namespace App\Modules\Routine\Http\Controllers;

use App\Model\Routine\Routine;
use App\Model\Student\Classe;
use App\Model\User\Role;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class RoutineController extends Controller
{
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
    public function index()
    {
        $routine=Routine::all();
        //return  $routine->updatedBy when using first();
        return view('routine::routine.index',compact('routine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routine=Routine::all();
        //return $routine;
        $class=Classe::all();
        return view ('routine::routine.create',compact('routine','class'));
    }
/*->with(array('class'=>$class,'routine'=>$routine))*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'class' => 'required',
            'details' => 'required',

        ]);
        if ($validator->fails()) {
            return Redirect::route('routine_create')->withErrors($validator);
        }
        $routine=new routine ();
        $routine->type=$request->type?$request->type:false;
        $routine->classes_id=$request->class;
        $routine->details=$request->details;
        $routine->created_by=Sentinel::getUser()->id;
        $routine->updated_by=Sentinel::getUser()->id;
        $routine->save();
        //return $routine;
        if($routine){

            return Redirect::route('routine')->with('message','successfully store');
        }else{

            return Redirect::back()->with('message','store failed');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $routine=Routine::find($id);
        //return $routine->type;
        $class=Classe::all();
        return view('routine::routine.edit')->with(array('class'=>$class,'routine'=>$routine));
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
        /*$validator = Validator::make($request->all(), [
            'class' => 'required',
            'details' => 'required',

        ]);
        if ($validator->fails()) {
            return Redirect::route('routine_edit',$id)->withErrors($validator);
        }*/
        $routine=Routine::find($id);
        $routine->type=$request->type?$request->type:false;

        $routine->classes_id=$request->class;
        $routine->details=$request->details;
        $routine->updated_by=Sentinel::getUser()->id;
        $routine->update();
        if($routine){

            return Redirect::route('routine')->with('message','successfully updated');
        }else{

            return Redirect::back()->with('message','updated failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function delete($id)
    {
        $routine=Routine::find($id);
        $routine->delete();
        return Redirect::back()->with('message','Successfully Deleted ');
    }

}
