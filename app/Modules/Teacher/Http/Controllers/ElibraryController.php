<?php

namespace App\Modules\Teacher\Http\Controllers;

use App\Model\Elibrary\Elibrary;
use App\Model\Student\Classe;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ElibraryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $id = null;
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('teacherrole');
    }

    public function index()
    {
        $this->id =  Sentinel::getUser()->id;
        $file = Elibrary::ByTeacher($this->id)->get();

        return view('teacher::elibrary.index')->with('library',$file);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $class = Classe::all();
        return view('teacher::elibrary.create')->with('class',$class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        try{
            if ($request->hasFile('f_url')) {
                $fileName = $request->f_url->store('/attachment');
                $library = new Elibrary();

                $library->title = $request->title;

                $library->note = $request->note;

                $library->f_url = $fileName;
                $library->classes_id = $request->class;

                $library->created_by = Sentinel::getUser()->id;
                $library->updated_by = Sentinel::getUser()->id;

                $library->saveOrFail();

                Input::file('f_url')->move('attachment/', $fileName); // uploading file to given path
                Session::flash('info', 'Created successfully');
                return Redirect::back();
            }

        }catch (Exception $e){
            // sending back with error message.
            Session::flash('danger', $e);
            return Redirect::back();

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


        $file = Elibrary::find($id);

        $class = Classe::all();

        return view('teacher::elibrary.edit')->with(array('library'=>$file,'class'=>$class));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
   
        try{


            $library =  Elibrary::find($request->library_id);

            if ($request->hasFile('f_url')) {
                $fileName = $request->f_url->store('/attachment');

                $library->title = $request->title;

                $library->note = $request->note;

                $library->f_url = $fileName;
                $library->classes_id = $request->class;

                $library->updated_by = Sentinel::getUser()->id;

                $library->save();

                Input::file('f_url')->move('attachment/', $fileName); // uploading file to given path
                Session::flash('info', 'Updated successfully');
                return Redirect::back();
            }else{

                $library->title = $request->title;

                $library->note = $request->note;

                $library->classes_id = $request->class;

                $library->updated_by = Sentinel::getUser()->id;

                $library->save();
                Session::flash('info', 'Updated successfully');
                return Redirect::back();
            }

        }catch (Exception $e){
            // sending back with error message.
            Session::flash('danger', $e);
            return Redirect::back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $elibrary = Elibrary::find($id);

        $elibrary->delete();

        Session::flash('danger', 'Library File is deleted');
        return Redirect::back();
    }
}
