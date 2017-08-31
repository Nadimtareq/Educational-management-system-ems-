<?php

namespace App\Modules\Student\Http\Controllers;
use App\Model\Student\StudentInfo;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Model\Certificate\Certificate;
use App\Model\Certificate\CertificateType;
use App\Model\Student\Section;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Model\Student\Classe;
use App\Model\Student\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CertificateController extends Controller
{

    public $id = null;
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('studentrole');
    }
    public function index()
    {
        /*$certificate =Certificate::all();
        return view('student::certificate.index',compact('certificate'));*/
    }


    public function create()
    {
        $certificate=Certificate::all();
        $ctype = CertificateType::all();
        $class = Classe::all();
        $session = Session::all();
        $section=Section::all();
       /* $student=StudentInfo::all();*/
        //return $session;
        return view('student::certificate.create',compact('ctype','class','session','section','student','certificate'));

    }


    public function store(Request $request)
    {

        $certificate  = new Certificate();
        $certificate ->cttype_id =$request->ctype;
        $certificate ->student_roll=$request->Roll;
        $certificate ->classes_id=$request->class;
        $certificate ->sections_id=$request->section;
        $certificate ->sessions_id=$request->session_id;
        $certificate ->app_details=$request->details;
        $certificate ->c_info=$request->contact_info;
        $certificate ->student_infos_id= Sentinel::getUser()->id;
        $certificate ->created_by = Sentinel::getUser()->id;
        $certificate ->updated_by = Sentinel::getUser()->id;
        //return $certificate;
        $certificate->saveOrFail();


         //dd($certificate);
        if( $certificate ){

            return Redirect::back()->with('message','successfully store');
        }else{

            return Redirect::back()->with('warning','store failed');
        }


    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
