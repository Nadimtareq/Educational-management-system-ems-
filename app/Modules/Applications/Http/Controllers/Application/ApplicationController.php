<?php

namespace App\Modules\Applications\Http\Controllers\Application;

use App\Model\Certificate\Certificate;
use App\Model\Certificate\CertificateType;
use App\Model\Student\Classe;
use App\Model\Student\Section;
use App\Model\Student\Session;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as SES;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use League\Flysystem\Exception;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificate = Certificate::all();
        $data = array('certificate'=>$certificate);

        return view('applications::Application.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $app_type = CertificateType::all();

        $class = Classe::all();
        $session = Session::all();
        $data = array(
            'app_type'=>$app_type,
            'app_class'=>$class,
            'session'=>$session
        );
        return view('applications::Application.create')->with($data);
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
              $application = new Certificate();

              $application->cttype_id =$request->type;
              $application->student_roll=$request->Roll;
              $application->classes_id=$request->class;
              $application->sections_id=$request->section;
              $application->sessions_id=$request->session_id;
              $application->app_details=$request->details;
              $application->c_info=$request->contact_info;
              $application->created_by = Sentinel::getUser()->id;
              $application->updated_by = Sentinel::getUser()->id;

              $application->save();
              SES::flash('success', 'Generate application.');
              return Redirect::back();
          } catch (Exception $exception){

              SES::flash('danger', 'Failed.');
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

        $certificate = Certificate::find($id);


        $app_type = CertificateType::all();

        $class = Classe::all();
        $session = Session::all();
        $data = array(
            'app_type'=>$app_type,
            'app_class'=>$class,
            'session'=>$session,
            'certificate'=>$certificate
        );
        return view('applications::Application.edit')->with($data);
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
        try{
            $application = Certificate::find($id);

            $application->cttype_id =$request->type;
            $application->student_roll=$request->Roll;
            $application->classes_id=$request->class;
            $application->sections_id=$request->section;
            $application->sessions_id=$request->session_id;
            $application->app_details=$request->details;
            $application->c_info=$request->contact_info;

            $application->updated_by = Sentinel::getUser()->id;

            $application->save();
            SES::flash('success', ' Updated Generate application.');
            return Redirect::back();
        } catch (Exception $exception){

            SES::flash('danger', 'Failed.');
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
       try{
           $app = Certificate::find($id);

           $app->delete();

           SES::flash('danger', 'Cetificate is Deleted ');
           return Redirect::back();
       } catch (Exception $exception){
           SES::flash('alert', 'NOT Deleted ');
           return Redirect::back();
       }
    }

    public function section(Request $request)
    {
        $id  = $request->id;
      $section = Section::ofClass($id)->get();

      return response($section);
    }
}
