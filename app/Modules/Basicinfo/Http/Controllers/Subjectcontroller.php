<?php

namespace App\Modules\Basicinfo\Http\Controllers;

use App\Model\Student\Classe;
use Illuminate\Http\Request;
use App\Model\Student\Subject;
use App\Http\Requests;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class Subjectcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
    public function index()
    {
        $subject=Subject::all();
        return  view('basicinfo::subject.index',compact('subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = Subject::all();
        $class = Classe::all();
        return view('basicinfo::subject.create')->with( array('subject'=>$subject,'class'=>$class));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'class' => 'required',

        ]);
        if ($validator->fails()) {
            return Redirect::route('subject_create')->withErrors($validator);
        }
        $subject= new Subject();
        $subject->classes_id = $request->class;
        $subject->title = $request->title;
        $subject->description = $request->description;
        $subject->created_by = Sentinel::getUser()->id;
        $subject->updated_by = Sentinel::getUser()->id;
        $subject->save();

        if($subject){

            return Redirect::route('subject')->with('message','successfully store');
        }else{

            return Redirect::back()->with('warning','store failed');
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
        $subject = Subject::find($id);
        $class = Classe::all();
        return view('basicinfo::subject.edit',compact('subject','class'));
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'class' => 'required',

        ]);
        if ($validator->fails()) {
            return Redirect::route('subject_edit',$id)->withErrors($validator);
        }
        $subject = Subject::find($id);
        $subject->classes_id = $request->class;
        $subject->title = $request->title;
        $subject->description = $request->description;
        $subject->update();

            if($subject){

                return Redirect::route('subject')->with('message','successfully updated');
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
    public function delete($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return Redirect::back()->with('message','Successfully Deleted ');
    }
}
