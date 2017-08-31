<?php

namespace App\Modules\Studentbatch\Http\Controllers;

use App\Model\Student\Classe;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Model\Student\Session as sessions;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Attendance\StudentAtten;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;
use Mockery\Exception\RuntimeException;
use Psy\Exception\ErrorException;


class StudentAttendanceController extends Controller
{

    protected $status = 0;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('basicauth');
    }

    public function index()
    {
        $class = Classe::all();
        $session = sessions::all();
        $data = array(
            'app_class'=>$class,
            'session'=>$session
        );
        return view('studentbatch::attendance.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = Classe::all();
        $session = sessions::all();
        $data = array(
            'app_class'=>$class,
            'session'=>$session
        );
        return view('studentbatch::attendance.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $date=date('Y-m-d', strtotime(urldecode($request->attendance_date)));
        if(!$request->teacher_id){
            session::flash('info', 'No Class Techer Found! Please Assign First');
            return Redirect::back();
            exit();
        }


        //  dd($request->all());
        try{

            if(count($request->student_id)>0){

                $data= StudentAtten::where('atten_date', $date)
                    ->where('ct_id', $request->teacher_id)
                    ->where('classes_id', $request->student_class)
                    ->where('sessions_id', $request->student_session)
                    ->where('sections_id', $request->student_section)
                    ->get();

                if(count($data))
                {
                    session::flash('alert', 'alraedy Added');
                    return Redirect::back();
                }
                else
                {

                    for($i=0; $i<count($request->student_id);$i++)
                    {

                        if($request->status)
                        {
                            if(array_key_exists($request->student_id[$i], $request->status))
                            {
                                //echo $request->status[$request->student_id[$i]].'=='.$date.'--'.$request->student_section.'--'.$request->student_session.'--'.$request->student_class.'--'.$request->teacher_id.'---'.$request->student_id[$i].'____'.$request->student_roll[$i].'___'.$request->student_name[$i]."<br/>";
                                $att = new StudentAtten();
                                $att->atten_status = 1;
                                $att->ct_id = $request->teacher_id;
                                $att->classes_id = $request->student_class;
                                $att->classes_id = $request->student_class;
                                $att->sessions_id = $request->student_session;
                                $att->sections_id =$request->student_section;
                                $att->user_id = $request->student_id[$i];
                                $att->atten_date=$date;
                                $att->created_by = Sentinel::getUser()->id;
                                $att->updated_by = Sentinel::getUser()->id;
                                $att->save();

                            }else{
                                //echo $request->status[$request->student_id[$i]].'=='.$date.'--'.$request->student_section.'--'.$request->student_session.'--'.$request->student_class.'--'.$request->teacher_id.'---'.$request->student_id[$i].'____'.$request->student_roll[$i].'___'.$request->student_name[$i]."<br/>";
                                $att = new StudentAtten();
                                $att->atten_status = 0;
                                $att->ct_id = $request->teacher_id;
                                $att->classes_id = $request->student_class;
                                $att->classes_id = $request->student_class;
                                $att->sessions_id = $request->student_session;
                                $att->sections_id =$request->student_section;
                                $att->user_id = $request->student_id[$i];
                                $att->atten_date=$date;
                                $att->created_by = Sentinel::getUser()->id;
                                $att->updated_by = Sentinel::getUser()->id;
                                $att->save();
                            }

                        }else
                        {
                            $att = new StudentAtten();
                            $att->atten_status = 0;
                            $att->ct_id = $request->teacher_id;
                            $att->classes_id = $request->student_class;
                            $att->classes_id = $request->student_class;
                            $att->sessions_id = $request->student_session;
                            $att->sections_id =$request->student_section;
                            $att->user_id = $request->student_id[$i];
                            $att->atten_date=$date;
                            $att->created_by = Sentinel::getUser()->id;
                            $att->updated_by = Sentinel::getUser()->id;
                            $att->save();
                        }


                    }
                    session::flash('success', 'Added Successfully');
                    return Redirect::back();
                }
            }else
            {
                session::flash('info', 'No Selection');
                return Redirect::back();
            }

        }catch(\ErrorException $exception){
           
            session::flash('danger', 'Failed to Added');
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
        //
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



        if(!$request->atten_id){
            return back();
            exit;
        }
        //  dd($request->all());
        if(count($request->atten_id)==0){
            return back();
            exit();
        }


        try
        {
            for($i=0; $i<count($request->atten_id);$i++){

                if($request->status)
                {
                    if(array_key_exists($request->atten_id[$i], $request->status))
                    {
                        echo $request->atten_id[$i].'-'."1".'<br/>';
                        $attendance = StudentAtten::find($request->atten_id[$i]);

                        $attendance->atten_status = 1;

                        $attendance->updated_by = Sentinel::getUser()->id;

                        $attendance->save();



                    }
                    else
                    {
                        echo $request->atten_id[$i].'-'."0".'<br/>';
                        $attendance = StudentAtten::find($request->atten_id[$i]);

                        $attendance->atten_status = 0;

                        $attendance->updated_by = Sentinel::getUser()->id;
                        $attendance->save();
                    }
                }
                else
                {
                    echo $request->atten_id[$i].'-'."0".'<br/>';
                    $attendance = StudentAtten::find($request->atten_id[$i]);

                    $attendance->atten_status = 0;

                    $attendance->updated_by = Sentinel::getUser()->id;
                    $attendance->save();
                }


            }
            session::flash('success', 'Updated Successfully');
            return Redirect::back();
        }
        catch (ErrorException $exception)
        {
            session::flash('danger', 'Failed to update');
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
        //
    }

    public function getteacher(Request $request){



        $teacher = DB::select('SELECT users.first_name,users.id FROM `classteachers` JOIN users ON users.id = classteachers.users_id WHERE classteachers.classes_id=:stuclass AND classteachers.sessions_id = :stusession AND classteachers.sections_id =:stusection', ['stusection' => $request->stusection, 'stusession' => $request->stusession, 'stuclass' => $request->stuclass]);

        return response( $teacher);

    }


    public function getAllStudent(Request $request)
    {


        $data = '';
        $user = DB::select('SELECT users.id as user_id,users.first_name,studentbatches.id,studentbatches.student_roll,studentbatches.status FROM `studentbatches` JOIN users ON users.id = studentbatches.user_id  JOIN sessions ON sessions.id = studentbatches.sessions_id LEFT JOIN sections ON sections.id = studentbatches.sections_id JOIN classes ON classes.id= studentbatches.classes_id WHERE studentbatches.classes_id=:stuclass AND studentbatches.sessions_id = :stusession AND studentbatches.sections_id =:stusection ORDER BY studentbatches.student_roll ASC', ['stusection' => $request->stusection, 'stusession' => $request->stusession, 'stuclass' => $request->stuclass]);

        foreach ($user as $item) {


            $data .= "<tr>";
            $data .= "<td style='display: none' >" . "<input  type='text' name='student_id[]' value='$item->user_id'>" . "</td>";
            $data .= "<td >" . "<input style='border:none' readonly type='text' name='student_roll[]' value='$item->student_roll'>" . "</td>";
            $data .= "<td >" . "<input style='border:none' readonly type='text' name='student_name[]' value='$item->first_name'>" . "</td>";


            if($item->status){
                $data .= "<td >"."<input name='status[$item->user_id]' type='checkbox'  checked />" . "</td>";
            }else{
                $data .= "<td >"."<input name='status[$item->user_id]' type='checkbox' />" . "</td>";
            }


            $data .= "</tr>";
        }
        return response($data);

    }

    public function getAllStudentByDate(Request $request)
    {





        $data = '';
        $user = DB::select('SELECT users.first_name,student_attens.atten_date, student_attens.atten_status, studentbatches.student_roll, student_attens.id,student_attens.user_id FROM `student_attens` JOIN users ON users.id = student_attens.user_id JOIN studentbatches ON studentbatches.user_id =student_attens.user_id WHERE student_attens.atten_date = :attn_date AND student_attens.classes_id=:stuclass AND student_attens.sessions_id=:stusession AND student_attens.sections_id = :stusection ORDER BY studentbatches.student_roll ASC', ['stusection' => $request->stusection, 'stusession' => $request->stusession, 'stuclass' => $request->stuclass,'attn_date'=>$request->selected_date]);



        foreach ($user as $item) {


            $data .= "<tr>";
            $data .= "<td style='display: none' >" . "<input  type='text' name='atten_id[]' value='$item->id'>" . "</td>";
            $data .= "<td >" . "<input style='border:none' readonly type='text' name='student_roll[]' value='$item->student_roll'>" . "</td>";
            $data .= "<td >" . "<input style='border:none' readonly type='text' name='student_name[]' value='$item->first_name'>" . "</td>";


            if($item->atten_status){
                $data .= "<td >"."<input name='status[$item->id]' type='checkbox'  checked />" . "</td>";
            }else{
                $data .= "<td >"."<input name='status[$item->id]' type='checkbox' />" . "</td>";
            }


            $data .= "</tr>";
        }
        return response($data);

    }
}
