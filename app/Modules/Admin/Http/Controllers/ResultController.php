<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Model\Student\Classe;
use App\Model\Student\Exam;
use App\Model\Student\Result;
use App\Model\Student\Session as ses;
use App\Model\Student\Subject;
use App\Model\Student\Term;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{

     public function __construct()
     {

         $this->middleware('basicauth');
         $this->middleware('SuperadminRole');
     }

   public function index()
    {

     $term = Term::orderBy('title', 'ASC')->get();
     $student = [];
     $cls = Classe::all();
     $sess = ses::all()->sortByDESC("title");
     return view('admin::result_filter')->with(compact('sess','cls','term','student'));

    }

    public function filter(Request $request)
    {


        $student =  Result::withRoll($request->class,$request->section,$request->sess_id)->where('exams_id',$request->exams_id)->where('subjects_id','=',$request->subject_id)->orderBy('mark','desc')->get();


        $term = Term::orderBy('title', 'ASC')->get();
        $cls = Classe::all();
        $sess = ses::all()->sortByDESC("title");
        return view('admin::result_filter')->with(compact('sess','cls','term','student'));
    }

    public function subject(Request $request)
    {
        $id  = $request->id;
        $subject = Subject::where('classes_id','=',$id)->get();

        return response($subject);
    }

    public function exam(Request $request)
    {

        $cls = $request->cls;
        $section = $request->section;
        $sess = $request->sess;
        $id  = $request->id;
        $subject = Exam::where('terms_id','=',$id)->where('classes_id','=',$cls)->where('sessions_id','=',$sess)->where('sections_id','=',$section)->get();
        return response($subject);
    }
}
