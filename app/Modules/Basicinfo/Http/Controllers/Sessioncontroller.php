<?php

namespace App\Modules\Basicinfo\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Session;
use App\Http\Requests;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class Sessioncontroller extends Controller
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
        $session=Session::all();
        return  view('basicinfo::session.index',compact('session') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $session=session::all();
        return view('basicinfo::session.create')->with('session',$session);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $session= new Session ();
        $session->title = $request->title;
        $session->description = $request->description;
        $session->created_by =Sentinel::getUser()->id;
        $session->updated_by =Sentinel::getUser()->id;
        $session->save();

        if ($session) {

            return Redirect::route('session')->with('message', 'successfully store');
        } else {
            return Redirect::back()->with('warning', 'store failed');
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
        $session = Session::find($id);
        return view('basicinfo::session.edit')->with('session',$session);
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

        $session = Session::find($id);
        $session->title = $request->title;
        $session->description = $request->description;
        $session->update();

        if( $session){

            return Redirect::route('session')->with('message','successfully updated');
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
        $session = Session::find($id);
        $session->delete();
        return Redirect::back()->with('message','Successfully Deleted ');
    }
}
