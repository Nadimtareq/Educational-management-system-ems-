<?php

namespace App\Modules\Basicinfo\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Term;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class Termcontroller extends Controller
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
        $term=Term::all();
        return  view('basicinfo::term.index',compact('term') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $term=Term::all();
        return view('basicinfo::term.create')->with('term',$term);
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
            'description' => 'required',

        ]);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator);
        }
        $term=new Term ();
        $term->title = $request->title;
        $term->description = $request->description;
        $term->created_by = Sentinel::getUser()->id;
        $term->updated_by = Sentinel::getUser()->id;
        $term->save();

        if($term){

            return Redirect::route('term')->with('message','successfully store');
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
        $term = Term::find($id);
        $term1 = Term::find($id);
        return view('basicinfo::Term.edit')->with(['term'=>$term,'term1'=>$term1]);

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

        $term = Term::find($id);
        $term->title = $request->title;
        $term->description = $request->description;
        $term->created_by = Sentinel::getUser()->id;
        $term->updated_by = Sentinel::getUser()->id;
        $term->update();

        if($term){

            return Redirect::route('term')->with('message','successfully updated');
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
        $term = Term::find($id);
        $term->delete();
        return Redirect::back()->with('message','Successfully Deleted ');
    }
}
