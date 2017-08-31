<?php

namespace App\Modules\Basicinfo\Http\Controllers;

use App\Model\Teacher\Classteacher;
use Illuminate\Http\Request;
use App\Model\Student\Session;
use App\Model\Student\Section;
use App\Model\Student\Classe;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
class CteacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
    public function index()
    {   
        $cteacher=Classteacher::all();
         // return $cteacher;   
        return  view('basicinfo::cteacher.index', compact('cteacher'));
    }


    public function create()
    {
        $cteacher= DB::select('select users.first_name,users.id, teacher_infos.c_1,teacher_infos.desination,teacher_infos.fs_1 from users INNER JOIN role_users ON users.id = role_users.user_id JOIN roles ON role_users.role_id = roles.id JOIN teacher_infos ON teacher_infos.users_id = users.id WHERE roles.slug = :role', ['role' => 'teacher']);
        $section=Section::all();
        $class = Classe::all();
        $session=Session::all();

        return view('basicinfo::cteacher.create',compact('cteacher','section','class','session'));
    }


    public function store(Request $request)
    {
        //dd($request->all());

        $validator = Validator::make($request->all(), [
            'class' => 'required|max:255',
            'section' => 'required',
            'session_id' => 'required',
            'user_id' => 'required',


        ]);
        if ($validator->fails()) {
            return Redirect::route('cteacher_create')->withErrors($validator);
        }

        $cteacher= new Classteacher();
        $cteacher->classes_id=$request->class;
        $cteacher->sections_id=$request->section;
        $cteacher->sessions_id=$request->session_id;
        $cteacher->users_id=$request->user_id;
        $cteacher->created_by = Sentinel::getUser()->id;
        $cteacher->updated_by = Sentinel::getUser()->id;
        $cteacher->save();

        if($cteacher){

            return Redirect::route('cteacher')->with('message','successfully store');
        }else{

            return Redirect::back()->with('warning','store failed');
        }


    }


    public function show($id)
    {

    }


    public function edit($id)
    {


        $cteacher= DB::select('select users.first_name,users.id, teacher_infos.c_1,teacher_infos.desination,teacher_infos.fs_1 from users INNER JOIN role_users ON users.id = role_users.user_id JOIN roles ON role_users.role_id = roles.id JOIN teacher_infos ON teacher_infos.users_id = users.id WHERE roles.slug = :role', ['role' => 'teacher']);

        $cteacher_single=Classteacher::find($id);
        $section=Section::all();
        $class = Classe::all();
        $session=Session::all();
        return view('basicinfo::cteacher.edit',compact('cteacher','section','class','session','cteacher_single'));
    }


    public function update(Request $request, $id)
    {
       $validator = Validator::make($request->all(), [
            'class' => 'required|max:255',
            'section' => 'required',
            'session_id' => 'required',
            'user_id' => 'required',


        ]);
        if ($validator->fails()) {
            return Redirect::route('cteacher_edit',$id )->withErrors($validator);
        }
        $cteacher= Classteacher::find($id);
        $cteacher->classes_id=$request->class;
        $cteacher->sections_id=$request->section;
        $cteacher->sessions_id=$request->session_id;
        $cteacher->users_id=$request->user_id;
        $cteacher->updated_by = Sentinel::getUser()->id;
        $cteacher->update();

        if($cteacher){

            return Redirect::route('cteacher')->with('message','successfully updated');
        }else{

            return Redirect::back()->with('warning','updated failed');
        }
    }


    public function delete($id)
    {

        $cteacher=Classteacher::find($id);
        $cteacher->delete();
        return Redirect::back()->with('message','Successfully Deleted ');

    }
}
