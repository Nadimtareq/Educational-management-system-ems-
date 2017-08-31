<?php

namespace App\Modules\Basicinfo\Http\Controllers;

use App\Model\Student\Classe;
use Illuminate\Http\Request;
use App\Model\Student\Section;
use App\Http\Requests;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class Sectioncontroller extends Controller
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
        $section=Section::all();
        return  view('basicinfo::section.index',compact('section') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $section=Section::all();
        $class = Classe::all();

        return view('basicinfo::section.create')->with( array('section'=>$section,'class'=>$class));
    }

    /**
     * Store a newly created resource in storage.

     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'class' => 'required',



        ]);
        if ($validator->fails()) {
            return Redirect::route('section_create')->withErrors($validator);
        }
        $section = new Section();
        $section->name = $request->name;
        $section->classes_id = $request->class;
        $section->created_by =Sentinel::getUser()->id;
        $section->updated_by = Sentinel::getUser()->id;
        $section->save();

        if($section){

            return Redirect::route('section')->with('message','successfully store');
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
        $section = Section::find($id);
        $class = Classe::all();
        return view('basicinfo::section.edit',compact('section','class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $validator = Validator::make($request->all(), [
        'name' => 'required',
        'class' => 'required',

    ]);
        if ($validator->fails()) {
            return Redirect::route('section_edit',$id)->withErrors($validator);
        }
        $section = Section::find($id);
        $section->name = $request->name;
        $section->classes_id = $request->class;
        $section->update();
        
        if($section){


            return Redirect::route('section')->with('message','successfully updated');

           
        }else{

            return Redirect::back()->with('warning','updated failed');
        }
    }

    
    public function delete($id)
    {
        $section = Section::find($id);
        $section->delete();
        return Redirect::back()->with('message','Successfully Deleted ');
    }
}
