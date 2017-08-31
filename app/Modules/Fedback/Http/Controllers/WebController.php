<?php

namespace App\Modules\Fedback\Http\Controllers;

use App\Model\Fedback\Fedback;
use App\Model\Notice\Noticeboard;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Model\Contact\ContactInfo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        $fedback=Fedback::all();
        return view('fedback::index',compact('fedback'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fedback()
    {
        $notice=Noticeboard::all();
        $contact=ContactInfo::find(1);
        $fedback=Fedback::all();
        return view('layouts.frontend.contact',compact('contact','notice','fedback'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(id);

        /*$validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',


        ]);
        if ($validator->fails()) {
            return Redirect::route('fedback')->withErrors($validator);
        }*/

        $fedback= new Fedback ();
        $fedback->name=$request->name;
        $fedback->email_phone=$request->email;
       /* $fedback->phone=$request->phone;*/
        $fedback->subject=$request->subject;
        $fedback->message=$request->message;
        /*$fedback->created_by = Sentinel::getUser()->id;
        $fedback->updated_by = Sentinel::getUser()->id;*/
        $fedback->save();

        if($fedback){
            return Redirect::back()->with('message','successfully store');
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


    public function show(){

        $fedback=Fedback::latest()->get();
       // dd( $fedback);
        return view('fedback::index',compact('fedback'));
    }

    /*public function show($id)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
