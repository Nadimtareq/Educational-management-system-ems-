<?php

namespace App\Modules\Basicinfo\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Exam;
use App\Model\Student\Section;
use App\Model\Student\Classe;
use App\Model\Student\Term;
use App\Model\Student\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class Examcontroller extends Controller
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

        $exam=Exam::all();
        return  view('basicinfo::exam.index', compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exam=Exam::all();
        $section=Section::all();
        $class = Classe::all();
        $session=Session::all();
        $term=Term::all();
        return view('basicinfo::exam.create',compact('exam','section','class','session','term'));
    }


    public function store(Request $request)
    {

        //dd($request->all());

        $validator = Validator::make($request->all(), [
            'class' => 'required|max:255',
            'section' => 'required',
            'session_id' => 'required',
            'term' => 'required',
            'name' => 'required',

        ]);
        if ($validator->fails()) {
            return Redirect::route('exam_create')->withErrors($validator);
        }
        $exam= new Exam();
        $exam->classes_id=$request->class;
        $exam->sections_id=$request->section;
        $exam->sessions_id=$request->session_id;
        $exam->terms_id=$request->term;
        $exam->name=$request->name;
        $exam->created_by = Sentinel::getUser()->id;
        $exam->updated_by=  Sentinel::getUser()->id;
        $exam->save();

        if($exam){


            return Redirect::route('exam')->with('message','successfully store');

        }else{

            return Redirect::back()->with('warning','store failed');
        }

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $exam=Exam::find($id);
        $section=Section::all();
        $class = Classe::all();
        $session=Session::all();
        $term=Term::all();
        return view('basicinfo::exam.edit',compact('exam','section','class','session','term'));

    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'class' => 'required|max:255',
            'section' => 'required',
            'session_id' => 'required',
            'term' => 'required',
            'name' => 'required',

        ]);
        if ($validator->fails()) {
            return Redirect::route('exam_edit',$id)->withErrors($validator);
        }
        $exam = Exam::find($id);
        $exam->classes_id=$request->class;
        $exam->sections_id=$request->section;
        $exam->sessions_id=$request->session_id;
        $exam->terms_id=$request->term;
        $exam->name=$request->name;
        $exam->updated_by = Sentinel::getUser()->id;
        $exam->update();

        if($exam){


            return Redirect::route('exam')->with('message','successfully updated');

            
        }else{

            return Redirect::back()->with('warning','updated failed');
        }
    }


    public function delete($id)
    {
        $exam = Exam::find($id);
        $exam->delete();
        return Redirect::back()->with('message','Successfully Deleted ');
    }
}
