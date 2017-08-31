<?php

namespace App\Modules\Teacher\Http\Controllers;

use App\Model\Student\Exam;
use App\Model\Student\Result;
use App\Model\Student\Studentbatch;
use App\Model\Student\Subject;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Model\Attendance\StudentAtten;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

use App\Model\Teacher\Classteacher;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class StudentResultController extends Controller
{
    public $id = null;
    public $emssession = null;
    public $emssection  = null;
    public $emsclass = null;
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('teacherrole');
    }


    public function index()
    {

        //   $student = Studentbatch::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->get();
        $this->id =  Sentinel::getUser()->id;
        $currentteacher = Classteacher::Techer($this->id)->CurrentYear(date('Y'))->get();


        if(count($currentteacher)==0){
            Session::flash('info', 'You are not Assign still now');
            return Redirect::back();
        }
        $currentteacher= $currentteacher->sortBy('id')->take(1)->flatten();
        foreach ($currentteacher as $item)
        {
            $this->emssession = $item->session->title;
            $this->emssection = $item->section->name;
            $this->emsclass = $item->classe->name;
        }

        //$exam =  Exam::withWifi()->MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->where('exams.name','=','sda')->get();
        $exam =  Exam::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->get();
        $subject = Subject::where('classes_id','=',$currentteacher[0]->classes_id)->get();

        return view('teacher::result.index')->with(array('subject'=>$subject,'exam'=>$exam,'session'=>$this->emssession,'section'=>$this->emssection,'myclass'=>$this->emsclass));


    }

    public function Filter(Request $request)
    {

        //   $student = Studentbatch::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->get();
        $this->id = Sentinel::getUser()->id;
        $currentteacher = Classteacher::Techer($this->id)->CurrentYear(date('Y'))->get();

        $currentteacher = $currentteacher->sortBy('id')->take(1)->flatten();
        foreach ($currentteacher as $item) {
            $this->emssession = $item->session->title;
            $this->emssection = $item->section->name;
            $this->emsclass = $item->classe->name;
        }

        if($this->emssession==(date('Y'))){

            $exam =  Exam::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->get();
            $subject = Subject::where('classes_id','=',$currentteacher[0]->classes_id)->get();
            $studentbatches = Result::withRoll($currentteacher[0]->classes_id,$currentteacher[0]->sections_id,$currentteacher[0]->sessions_id)->where('exams_id',$request->exam_id)->where('subjects_id','=',$request->subject_id)->get();

            return view('teacher::result.filter')->with(array('students'=>$studentbatches,'subject'=>$subject,'exam'=>$exam,'session'=>$this->emssession,'section'=>$this->emssection,'myclass'=>$this->emsclass,'ex_id'=>$request->exam_id,'sb_id'=>$request->subject_id));
        }else{

            return Redirect::back();
        }

    }

    public function create()
    {
        $this->id =  Sentinel::getUser()->id;
        $currentteacher = Classteacher::Techer($this->id)->CurrentYear(date('Y'))->get();

        $currentteacher= $currentteacher->sortBy('id')->take(1)->flatten();
        foreach ($currentteacher as $item)
        {
            $this->emssession = $item->session->title;
            $this->emssection = $item->section->name;
            $this->emsclass = $item->classe->name;
        }


        if($this->emssession==(date('Y'))){

            $exam =  Exam::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->get();
            $subject = Subject::where('classes_id','=',$currentteacher[0]->classes_id)->get();
            $studentbatches  = Studentbatch::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->orderBy('student_roll','ASC')->get();

            return view('teacher::result.create')->with(array('students'=>$studentbatches,'subject'=>$subject,'exam'=>$exam,'session'=>$this->emssession,'section'=>$this->emssection,'myclass'=>$this->emsclass));
        }else{

            return Redirect::back();
        }
        //$exam =  Exam::withWifi()->MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->where('exams.name','=','sda')->get();

    }

    public function store( Request $request)
    {


        $existing_check= Result::where([['exams_id','=',$request->exam_id],['subjects_id','=',$request->subject_id]])->get();

        if($existing_check->count()){

            Session::flash('success', 'result Mark already added ');
            return Redirect::back();
        }

        try{
            $this->id =  Sentinel::getUser()->id;
            for($i=0;$i<count($request->user_id);$i++)
            {
                $result =  new Result();
                $result->exams_id = $request->exam_id;
                $result->users_id =$request->user_id[$i];
                $result->subjects_id =$request->subject_id;
                $result->mark =$request->mark[$i];
                $result->created_by =$this->id;
                $result->updated_by =$this->id;
                $result->saveOrFail();
            }


            Session::flash('success', 'result saved');
            return Redirect::back();
        }catch (\QueryException $exception){

            Session::flash('danger', 'result not save');
            return Redirect::back();
        }



    }

    public function update(Request $request)
    {


        try{

            for($i=0;$i<count($request->user_id);$i++)
            {
                $result =  Result::find($request->user_id[$i]);
                $result->mark =$request->mark[$i];

                $result->save();
            }
            Session::flash('success', 'result Updated');
            return redirect::route('teacher_student_result');
        }catch (\Illuminate\Database\QueryException $exception){

            Session::flash('danger', 'result not save');
            return redirect::route('teacher_student_result');
        }
    }

    public function exam($id)
    {
        $tr= null;
        $users = \DB::select('SELECT users.id,users.first_name,exams.name,subjects.title,results.mark,studentbatches.student_roll FROM `results` JOIN subjects ON subjects.id = results.subjects_id JOIN exams ON exams.id = results.exams_id JOIN users ON users.id = results.users_id JOIN studentbatches ON studentbatches.user_id = results.users_id where results.exams_id = :id GROUP By users.id, subjects.title',['id'=>$id]);


        $users= array_group_by($users,'id');
        $result= array();
        foreach ($users as $item )
        {
            if(is_array($item)){



                foreach ($item as $value)
                {
                    $id = $value->id;
                    if (isset($result[$id])) {
                        $result[$id]['id'] = $value->id;
                        $result[$id]['name'] = $value->first_name;
                        $result[$id]['student_roll'] = $value->student_roll;
                        $result[$id]['exam'] = $value->name;
                        $result[$id]['total'] = $value->mark+$result[$id]['total'];
                        $result[$id]['subject'][] = array('title'=>$value->title,'mark'=>$value->mark);
                    } else {
                        $result[$id]['id'] = $value->id;
                        $result[$id]['name'] = $value->first_name;
                        $result[$id]['student_roll'] = $value->student_roll;
                        $result[$id]['exam'] = $value->name;
                        $result[$id]['total'] = $value->mark;
                        $result[$id]['subject'][] = array('title'=>$value->title,'mark'=>$value->mark);
                    }
                }

            }
        }



        foreach ($result as $value)
        {
            $tr .= "<tr>";
            $tr.= "<td style='text-align:center;vertical-align:middle'>".$value['student_roll']."</td>";
            if(is_array($value['subject']))
            {
                $tr.= "<td style='text-align: center'>";
                $tr.= "<table width='100%' id='innersubject'>";
                foreach ($value['subject'] as $item)
                {
                    $color = $item['mark'];
                    $tr.= "<tr>";
                    $tr.= "<td>".$item['title']."</td>";
                    $tr.="<td>".$item['mark']."</td>";
                    $tr.= "</tr>";
                }

                $tr.= "<tr style='background-color: #e1e1e1; font-size: 18px;'>";
                $tr.= "<td>"."Total"."</td>";
                $tr.="<td style='color:brown; size: 18px;'>".$value['total']."</td>";
                $tr.= "</tr>";


                $tr.= "</table>";

                $tr.="</td>";

            }
            $tr.= "<td style='text-align:center;vertical-align:middle'>".$value['total']."</td>";
            $tr .= "</tr>";

        }
        return $tr;
    }
}


function sortByOrder($a, $b) {
    return $a['mark'] - $b['mark'];
}
if (!function_exists('array_group_by')) {

    function array_group_by(array $array, $key)
    {
        if (!is_string($key) && !is_int($key) && !is_float($key) && !is_callable($key) ) {
            trigger_error('array_group_by(): The key should be a string, an integer, or a callback', E_USER_ERROR);
            return null;
        }
        $func = (!is_string($key) && is_callable($key) ? $key : null);
        $_key = $key;
        // Load the new array, splitting by the target key
        $grouped = [];
        foreach ($array as $value) {
            $key = null;
            if (is_callable($func)) {
                $key = call_user_func($func, $value);
            } elseif (is_object($value) && isset($value->{$_key})) {
                $key = $value->{$_key};
            } elseif (isset($value[$_key])) {
                $key = $value[$_key];
            }
            if ($key === null) {
                continue;
            }
            $grouped[$key][] = $value;
        }
        // Recursively build a nested grouping if more parameters are supplied
        // Each grouped array value is grouped according to the next sequential key
        if (func_num_args() > 2) {
            $args = func_get_args();
            foreach ($grouped as $key => $value) {
                $params = array_merge([ $value ], array_slice($args, 2, func_num_args()));
                $grouped[$key] = call_user_func_array('array_group_by', $params);
            }
        }
        return $grouped;
    }
}
