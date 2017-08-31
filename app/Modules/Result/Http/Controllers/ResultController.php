<?php

namespace App\Modules\Result\Http\Controllers;
use App\Model\Student\Exam;
use App\Model\Student\Result;
use App\Model\Student\Studentbatch;
use Illuminate\Http\Request;
use App\Model\Student\Subject;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use DB;
class ResultController extends Controller
{

    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
        public function index($id)
        {


            $exams=Exam::all();
            $exam = Exam::find($id);

            if($exam)
            {
                $classes_id = $exam->classes_id;
                $subject=Subject::where('classes_id',$classes_id)->get();
            }else
            {
                $subject=Subject::all();
            }

            $exam_id = $id;

            return view('result::index',compact('exams','subject','exam_id'));
        }


        public function create(Request $request)
         {
             //return "sdfg";
             $this->validate($request, [
                 'exam_id' => 'required',
                 'subject_id' => 'required',
             ]);
             $data = $request->all();


             $exam_id = $data['exam_id'];
             $subject_id = $data['subject_id'];

             $exam=Exam::find($data['exam_id']);

             $result = Result::where ('exams_id', $data['exam_id'])->where('subjects_id',$data['subject_id'])->get();
             $batch = Studentbatch::where('classes_id',$exam->classes_id)->where('sessions_id',$exam->sessions_id)->where('sections_id',$exam->sections_id)->get();
             //return $result;
             return view('result::create',compact('exams','subject','batch','exam_id','subject_id','result'));
        }


       public function store(Request $request) {

       // return "aadd";
        $data = $request->all();
        $exam_id = $data['exam_id'];
        $subject_id = $data['subject_id'];
        $r_check= Result::where ('exams_id', $exam_id)->where('subjects_id',$subject_id)->select('id')->get();
        $r_count = count($r_check);
           $resule_array = [];
           $i = 0;
           foreach($r_check as $r_check_data)
           {
               $resule_array[$i] = $r_check_data->id;
               $i = $i+1;
           }

        if($r_count>0){

            Result::whereIn('id',$resule_array)->delete();
        }

        $user_count = count($data['user_id']);

        for($i = 0; $i<$user_count;$i++)
        {
            if($data['mark'][$i] == '')
            {

                $mark = 0;
            }else
            {
                $mark = $data['mark'][$i];
            }
              $result[$i] = [
                'exams_id' => $exam_id,
                'subjects_id' => $subject_id,
                'users_id' => $data['user_id'][$i],
                'mark' => $mark,
                'created_by'=> Sentinel::getUser()->id,
                'updated_by' => Sentinel::getUser()->id,

            ];
        }



        $store=DB::table('results')->insert($result);
          // return "aadd";

         if ($store){

             return Redirect::route('result_create')->with('message','successfully store');

         }else{

             return Redirect::route('result')->with('warning','store failed');
       }
     }



      public function show($id)
       {

       }


      public function edit($id)
      {

//          $exam=Exam::all();
//          $subject=Subject::all();
//          $batch=Studentbatch::where()*/

     }



     public function update(Request $request, $id)
     {

     }


      public function delete($id)
      {

      }
     }
