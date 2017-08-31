<?php

namespace App\Modules\Elibrary\Http\Controllers;

use App\Model\Elibrary\Elibrary;
use App\Model\Student\Classe;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ElibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file = Elibrary::all();

        return view('elibrary::elibrary.index')->with('library',$file);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $class = Classe::all();
        return view('elibrary::elibrary.create')->with('class',$class);
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
                $library = new Elibrary();

            $library->title = $request->title;

            $library->note =$request->note ;

            $library->f_url =$request->f_url ;
            $library->classes_id =$request->class ;

            $library->created_by = Sentinel::getUser()->id;
            $library->updated_by= Sentinel::getUser()->id;

            $library->saveOrFail();


                Session::flash('info', 'Created successfully');
                return Redirect::back();


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

        return view('elibrary::elibrary.edit')->with(array('library'=>$file,'class'=>$class));
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

            $library->title = $request->title;

            $library->note =$request->note ;

            $library->f_url =$request->f_url ;
            $library->classes_id =$request->class ;

            $library->updated_by= Sentinel::getUser()->id;

            $library->save();


            Session::flash('info', 'Updated successfully');
            return Redirect::back();


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
