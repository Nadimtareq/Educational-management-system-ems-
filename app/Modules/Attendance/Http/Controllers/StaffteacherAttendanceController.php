<?php

namespace App\Modules\Attendance\Http\Controllers;


use App\Model\Attendance\StaffAtten;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Psy\Exception\ErrorException;

class StaffteacherAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $date = date("Y-m-d");


        $user = DB::select('select staff_attens.date,staff_attens.id as atten_id ,staff_attens.atten_status as status, users.first_name,users.id,roles.name from users INNER JOIN role_users ON users.id = role_users.user_id JOIN roles ON role_users.role_id = roles.id JOIN staff_attens ON staff_attens.users_id =users.id WHERE roles.slug = "teacher" OR roles.slug="staff" AND staff_attens.date');


//select staff_attens.id as atten_id ,staff_attens.atten_status as status, users.first_name,users.id,roles.name from users INNER JOIN role_users ON users.id = role_users.user_id JOIN roles ON role_users.role_id = roles.id JOIN staff_attens ON staff_attens.users_id =users.id WHERE roles.slug = "teacher" OR roles.slug="staff" AND staff_attens.date = CURRENT_DATE
        return view('attendance::staff_teacher.index')->with('users', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = DB::select('select users.first_name,users.id,roles.name from users INNER JOIN role_users ON users.id = role_users.user_id JOIN roles ON role_users.role_id = roles.id  WHERE roles.slug = :role OR  roles.slug="staff"', ['role' => 'teacher']);


        return view('attendance::staff_teacher.create')->with('users', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $date = date('Y-m-d', strtotime(urldecode($request->attendance_date)));
        $data = StaffAtten::where('date', $date)
            ->get();


        try {
            if (count($data)) {
                session::flash('danger', 'alraedy Added');
                return Redirect::back();
                exit();
            } else {
                if ($request->id) {

                    for ($i = 0; $i < count($request->id); $i++) {
                        if ($request->status) {
                            if (array_key_exists($request->id[$i], $request->status)) {
                                echo $request->id[$i] . "-" . $request->status[$request->id[$i]] . "_date " . $request->attendance_date . "<br/>";

                                $attendance = new StaffAtten();

                                $attendance->date = $date;
                                $attendance->users_id = $request->id[$i];
                                $attendance->atten_status = 1;
                                $attendance->created_by = Sentinel::getUser()->id;
                                $attendance->updated_by = Sentinel::getUser()->id;

                                $attendance->save();

                            } else {
                                echo $request->id[$i] . "- off" . "_date " . $request->attendance_date . "<br/>";
                                $attendance = new StaffAtten();

                                $attendance->date = $date;
                                $attendance->users_id = $request->id[$i];
                                $attendance->atten_status = 0;
                                $attendance->created_by = Sentinel::getUser()->id;
                                $attendance->updated_by = Sentinel::getUser()->id;

                                $attendance->save();

                            }
                        } else {
                            echo $request->id[$i] . "- off" . "_date " . $request->attendance_date . "<br/>";
                            $attendance = new StaffAtten();

                            $attendance->date = $date;
                            $attendance->users_id = $request->id[$i];
                            $attendance->atten_status = 0;
                            $attendance->created_by = Sentinel::getUser()->id;
                            $attendance->updated_by = Sentinel::getUser()->id;

                            $attendance->save();

                        }


                    }

                    session::flash('success', 'Added Attendance');
                    return Redirect::back();
                } else {

                    session::flash('danger', 'No  Staff or teacher Found');
                    return Redirect::back();
                }

            }
        } catch (ErrorException $exception) {
            session::flash('danger', 'Failed To Added');
            return Redirect::back();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

       try
       {
           if ($request->staff_id) {

               for ($i = 0; $i <count($request->staff_id); $i++) {
                   if ($request->status) {
                       if (array_key_exists($request->staff_id[$i], $request->status)) {
                           echo $request->staff_id[$i] . "-" . $request->status[$request->staff_id[$i]] . "_date " . "<br/>";

                           $attendance = StaffAtten::find($request->staff_id[$i]);

                           $attendance->atten_status = 1;
                           $attendance->updated_by = Sentinel::getUser()->id;

                           $attendance->save();

                       } else {
                           echo $request->staff_id[$i] . "- off" . "_date" . "<br/>";
                           $attendance = StaffAtten::find($request->staff_id[$i]);



                           $attendance->atten_status = 0;

                           $attendance->updated_by = Sentinel::getUser()->id;

                           $attendance->save();

                       }
                   } else {
                       echo $request->staff_id[$i] . "- off" . "_date "  . "<br/>";
                       $attendance = StaffAtten::find($request->staff_id[$i]);


                       $attendance->atten_status = 0;
                       $attendance->updated_by = Sentinel::getUser()->id;

                       $attendance->save();

                   }


               }

               session::flash('success', 'Updated Attendance');
               return Redirect::back();
           }
           else

           {

               session::flash('danger', 'No Staff or teacher Found');
               return Redirect::back();
           }
       }
       catch(ErrorException $exception)
       {
           session::flash('danger', 'No Staff or teacher Found');
           return Redirect::back();
       }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAllStaff(Request $request)
    {
        $data= '';
        $date = date('Y-m-d', strtotime(urldecode($request->att_date)));


        $user = DB::select('select staff_attens.date,staff_attens.id as atten_id ,staff_attens.atten_status as status, users.first_name,users.id,roles.name from users INNER JOIN role_users ON users.id = role_users.user_id JOIN roles ON role_users.role_id = roles.id JOIN staff_attens ON staff_attens.users_id =users.id WHERE roles.slug = "teacher" OR roles.slug="staff" AND staff_attens.date');



        foreach ($user as $item) {

            if($item->date == $date)
            {

                $data .= "<tr>";
                $data .= "<td style='display: none' >" . "<input  type='text' name='staff_id[]' value='$item->atten_id'>" . "</td>";
                $data .= "<td >" . "<input style='border:none' readonly type='text' name='name[]' value='$item->first_name'>" . "</td>";
                $data .= "<td >" . "<input style='border:none' readonly type='text' name='designation[]' value='$item->name'>" . "</td>";


                if ($item->status==1) {
                    $data .= "<td >" . "<input name='status[$item->atten_id]' type='checkbox'  checked />" . "</td>";
                } else {
                    $data .= "<td >" . "<input name='status[$item->atten_id]' type='checkbox' />" . "</td>";
                }


                $data .= "</tr>";



            }


        }


        return response($data);
      }
}
