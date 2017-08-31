<?php

namespace App\Modules\Basicinfo\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Model\Student\Classe;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class ClassController extends Controller
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
        $class=Classe::all();
        return  view('basicinfo::class.index',compact('class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class=Classe::all();
        return view('basicinfo::class.create')->with('class',$class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class = new Classe();
        $class->name = $request->name;
        /*$class->created_by = 97;*/
        $class->created_by = Sentinel::getUser()->id;
        $class->updated_by = Sentinel::getUser()->id;
        $class->save();


        if($class){

            return Redirect::route('class')->with('message','successfully store');
        }else{

            return Redirect::back()->with('warning','store failed');
        }

    }

    /**
     * Display the specified reso*
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
        $class = Classe::find($id);
        return view('basicinfo::class.edit')->with('class',$class);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   //dd($id);
        $class = Classe::find($id);
        $class->name = $request->name;
        $class->updated_by = 97;
        $class->update();

        if($class){
            return Redirect::route('class')->with('message','successfully updated');
        }else {

            return Redirect::back()->with('warning','updated failed');
        }
    }

    public function delete($id)
    {
        $class = Classe::find($id);
        $class->delete();
        return Redirect::back()->with('message','Successfully Deleted ');
    }
}
