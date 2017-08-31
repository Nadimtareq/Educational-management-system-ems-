<?php

namespace App\Modules\Message\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Message\Message;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   /* public  function __construct()
    {
        $this->middleware('basicauth');
    }*/
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
    public function index()
    {
        $message=Message::all();
        return view('message::message.index')->with('message',$message);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $message=Message::all();
        return view('message::message.create')->with('message',$message);
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
            'type' => 'required',
            'message' => 'required',
            'title' => 'required',
            


        ]);
        if ($validator->fails()) {
            return Redirect::route('message_create')->withErrors($validator);
        }
        $message= new Message();
        $message->m_type=$request->type;
        $message->message=$request->message;
        $message->title=$request->title;
        $message->created_by = Sentinel::getUser()->id;
        $message->updated_by =Sentinel::getUser()->id;

        $message->save();

        if($message){

            return Redirect::route('message')->with('message','successfully store');
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
        $message = Message::find($id);
        return view('message::message.edit')->with('message',$message);
    }


    public function update(Request $request, $id)
    {   
         $validator = Validator::make($request->all(), [
            'type' => 'required',
            'message' => 'required',
            'title' => 'required',
            


        ]);
       if ($validator->fails()) {
            return Redirect::route('message_edit',$id)->withErrors($validator);
        }
        $message = Message::find($id);
        
        $message->m_type=$request->type;
        $message->message=$request->message;
        $message->title=$request->title;
        $message->created_by = Sentinel::getUser()->id;
        $message->updated_by =Sentinel::getUser()->id;
        $message->update();

        if($message){

            return Redirect::route('message')->with('message','successfully updated');
        }else{

            return Redirect::back()->with('warning','updated failed');
        }

    }


    public function delete($id)
    {
        $message = Message::find($id);
        $message->delete();
        return Redirect::back()->with('message','Successfully Deleted ');
    }
}
