<?php

namespace App\Modules\Publicresult\Http\Controllers;

use App\Model\Student\Publicresult;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }

    public function index()
    {
        $presult=Publicresult::all();
       // return $presult;
        return view ('publicresult::index')->with('presult',$presult);
    }


    public function create()
    {

        $presult=Publicresult::all();
        //dd($presult);
        return view ('publicresult::create')->with('presult',$presult);
    }


    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:publicresults',
            'details' => 'required',

        ]);
        if ($validator->fails()) {
            return Redirect::route('publicresult_create')->withErrors($validator);
        }
        $presult= new Publicresult ();
        $presult->title=$request->title;
        $presult->details=$request->details;
        $presult->created_by=Sentinel::getUser()->id;
        $presult->updated_by=Sentinel::getUser()->id;
        $presult->save();
        //return $routine;
        if($presult){

            return Redirect::route('publicresult')->with('message','successfully store');
        }else{

            return Redirect::back()->with('message','store failed');
        }

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $presult=Publicresult::find($id);
        return view ('publicresult::edit')->with('presult',$presult);

    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:publicresults',
            'details' => 'required',

        ]);
        if ($validator->fails()) {
            return Redirect::route('publicresult_edit',$id)->withErrors($validator);
        }
        $presult=Publicresult::find($id);
        $presult->title=$request->title;
        $presult->details=$request->details;
        $presult->updated_by=Sentinel::getUser()->id;
        $presult->update();
        //return $routine;
        if($presult){

            return Redirect::route('publicresult')->with('message','successfully update');
        }else{

            return Redirect::back()->with('message','store failed');
        }
    }

    public function delete($id)
    {
        $presult=Publicresult::find($id);
        $presult->delete();
        return Redirect::back()->with('message','Successfully Deleted ');
    }
}
