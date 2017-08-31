<?php

namespace App\Modules\Teacher\Http\Controllers;

use App\Model\Attendance\StudentAtten;
use App\Model\Student\Studentbatch;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Model\Teacher\Classteacher;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;

class StudentAttendanceController extends Controller
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

      $studentbatches  = Studentbatch::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->orderBy('student_roll','ASC')->get();
      return view('teacher::attendance.student')->with(array('student'=>$studentbatches,'session'=>$this->emssession,'section'=>$this->emssection,'myclass'=>$this->emsclass));
  }

    public function AttendanceBydate($date)
    {

        //   $student = Studentbatch::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->get();
        $this->id =  Sentinel::getUser()->id;
        $currentteacher = Classteacher::Techer($this->id)->CurrentYear(date('Y'))->get();

        $currentteacher= $currentteacher->sortBy('id')->take(1)->flatten();
        foreach ($currentteacher as $item)
        {
            $this->emssession = $item->session->title;
            $this->emssection = $item->section->name;
            $this->emsclass = $item->classe->name;

        }

       $att =  StudentAtten::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->where('atten_date','=',$date)->get();


      // $studentbatches  = Studentbatch::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->orderBy('student_roll','ASC')->get();

        return view('teacher::attendance.studentBydate')->with(array('date'=>$date,'student'=>$att,'session'=>$this->emssession,'section'=>$this->emssection,'myclass'=>$this->emsclass));


    }

    public function create()
    {

        //   $student = Studentbatch::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->get();
        $this->id =  Sentinel::getUser()->id;
        $currentteacher = Classteacher::Techer($this->id)->CurrentYear(date('Y'))->get();

        $currentteacher= $currentteacher->sortBy('id')->take(1)->flatten();
        foreach ($currentteacher as $item)
        {
            $this->emssession = $item->session->title;
            $this->emssection = $item->section->name;
            $this->emsclass = $item->classe->name;

        }

        // $att =  StudentAtten::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->get();


        $studentbatches  = Studentbatch::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->orderBy('student_roll','ASC')->get();

        return view('teacher::attendance.create')->with(array('student'=>$studentbatches,'session'=>$this->emssession,'section'=>$this->emssection,'myclass'=>$this->emsclass));


    }

    public function store(Request $request)
    {


        $date = date('Y-m-d', strtotime(urldecode($request->attendance_date)));
        $data = StudentAtten::where('atten_date', $date)
            ->get();

        $this->id =  Sentinel::getUser()->id;
        $currentteacher = Classteacher::Techer($this->id)->CurrentYear(date('Y'))->get();

        $currentteacher= $currentteacher->sortBy('id')->take(1)->flatten();
        foreach ($currentteacher as $item)
        {
            $this->emssession = $item->session->id;
            $this->emssection = $item->section->id;
            $this->emsclass = $item->classe->id;

        }

        try {
            if (count($data)) {
                session::flash('danger', 'alraedy Added');
                return Redirect::back();
                exit();
            } else {

                if ($request->user_id) {

                    for ($i = 0; $i < count($request->user_id); $i++)
                    {


                        if ($request->status) {

                            if (array_key_exists($request->user_id[$i], $request->status))
                            {

                                $attendance = new StudentAtten();

                                $attendance->atten_date = $date;
                                $attendance->ct_id = $this->id;
                                $attendance->user_id = $request->user_id[$i];
                                $attendance->classes_id =$this->emsclass;
                                $attendance->sessions_id =  $this->emssession;
                                $attendance->sections_id = $this->emssection;
                                $attendance->atten_status = 1;
                                $attendance->created_by = $this->id;
                                $attendance->updated_by = $this->id;

                                $attendance->save();


                            }else {

                                $attendance = new StudentAtten();

                                $attendance->atten_date = $date;
                                $attendance->ct_id = $this->id;
                                $attendance->user_id = $request->user_id[$i];
                                $attendance->atten_status = 0;
                                $attendance->classes_id =$this->emsclass;
                                $attendance->sessions_id =  $this->emssession;
                                $attendance->sections_id = $this->emssection;
                                $attendance->created_by = Sentinel::getUser()->id;
                                $attendance->updated_by = Sentinel::getUser()->id;

                                $attendance->save();

                            }
                        }else{
                            $attendance = new StudentAtten();

                            $attendance->atten_date = $date;
                            $attendance->ct_id = $this->id;
                            $attendance->user_id = $request->user_id[$i];
                            $attendance->atten_status = 0;
                            $attendance->classes_id =$this->emsclass;
                            $attendance->sessions_id =  $this->emssession;
                            $attendance->sections_id = $this->emssection;
                            $attendance->created_by = Sentinel::getUser()->id;
                            $attendance->updated_by = Sentinel::getUser()->id;

                            $attendance->save();
                        }



                    }

                    session::flash('success', 'attendance Added');
                    return Redirect::back();
                }else{

                    session::flash('danger', 'No Student Found / uncommmon error');
                    return Redirect::back();
                }
            }
        }catch (\Exception $exception){



            session::flash('danger', 'Not Added');
            return Redirect::back();
        }


    }

    public function update(Request $request)
    {


        $date = date('Y-m-d', strtotime(urldecode($request->attendance_date)));
        $this->id =  Sentinel::getUser()->id;
        $currentteacher = Classteacher::Techer($this->id)->CurrentYear(date('Y'))->get();

        $currentteacher= $currentteacher->sortBy('id')->take(1)->flatten();
        foreach ($currentteacher as $item)
        {
            $this->emssession = $item->session->id;
            $this->emssection = $item->section->id;
            $this->emsclass = $item->classe->id;

        }
        try {
              if ($request->user_id) {

                    for ($i = 0; $i < count($request->user_id); $i++)
                    {


                        if ($request->status) {

                            if (array_key_exists($request->user_id[$i], $request->status))
                            {

                                $attendance = StudentAtten::find($request->user_id[$i]);

                                $attendance->atten_status = 1;

                                $attendance->updated_by = $this->id;

                                $attendance->save();


                            }else {

                                $attendance = StudentAtten::find($request->user_id[$i]);



                                $attendance->atten_status = 0;

                                $attendance->updated_by = Sentinel::getUser()->id;

                                $attendance->save();

                            }
                        }else{
                            $attendance = StudentAtten::find($request->user_id[$i]);




                            $attendance->atten_status = 0;

                            $attendance->updated_by = Sentinel::getUser()->id;

                            $attendance->save();
                        }



                    }

                    session::flash('success', 'attendance updated');
                    return Redirect::back();
                }else{

                    session::flash('danger', 'No Student Found / uncommmon error');
                    return Redirect::back();
                }

        }catch (\Exception $exception){

            session::flash('danger', 'Not updated');
            return Redirect::back();
        }


    }

}
