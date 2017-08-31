<?php

namespace App\Modules\Student\Http\Controllers;

use App\Model\Student\Classe;
use App\Model\Student\Exam;
use App\Model\Student\Result;
use App\Model\Student\Section;
use App\Model\Student\Session;
use App\Model\Student\Term;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{
    public $id = null;
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('studentrole');
    }

    public function index()
    {
          $result=Result::all();
          $exam=Exam::all();
          $class=Classe::all();
          $section=Section::all();
          $session=Session::all();
          $term=Term::all();

          //return $result;
        return view('student::result.index',compact('result','exam','class','section','term','session'));
    }



   /* public function result (){

               return view();

    }*/

    public function create()
    {

    }


    public function store(Request $request)
    {


    }


    public function show(Request $request)
    {
     // return "hello";
        $data = $request->all();
        $exam_id = $data['exam'];
        $marks = Result::where('exams_id', $data['exam'])->where('users_id',  Sentinel::getUser()->id)->get();
        $highest_mark = Result::max('mark');
        //return $highest_mark;

        return view ('student::result.show', compact('marks', 'highest_mark', 'exam_id'));

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
