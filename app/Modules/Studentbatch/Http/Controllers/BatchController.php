<?php

namespace App\Modules\Studentbatch\Http\Controllers;

use App\Model\Student\Classe;
use App\Model\Student\Section;
use App\Model\Student\Session as sessions;

use App\Model\Student\Studentbatch;
use App\Model\User\User;
use App\Modules\Studentbatch\Http\Requests\BatchPostRequest;
use App\Modules\Studentbatch\Http\Requests\EditBatchPostRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;
use Mockery\Exception\RuntimeException;
use Psy\Exception\FatalErrorException;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = Classe::all();
        $session = sessions::all();
        $data = array(
            'app_class'=>$class,
            'session'=>$session
        );
        return view('studentbatch::batch.index')->with($data);
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
        return view('studentbatch::batch.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BatchPostRequest $request)
    {
        try{
            $batch = new Studentbatch();

            $batch->classes_id = $request->student_class;
            $batch->sessions_id = $request->session_id;
            $batch->sections_id = $request->section;
            $batch->user_id = $request->user_id;
            $batch->student_roll = $request->Roll;
            $batch->created_by = Sentinel::getUser()->id;

            $batch->save();

            if($batch->id){

                session::flash('success', 'Added Successfully');
                return Redirect::back();
            }else{
                session::flash('danger', 'failed');
                return Redirect::back();
            }

       }catch(QueryException $e){

            session::flash('danger', 'Roll out of range');
            return Redirect::back();

         }catch (FatalErrorException $exception){

            session::flash('danger', 'failed');
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
      $batch = Studentbatch::find($id);

        $class = Classe::all();
        $session = sessions::all();
        $section = Section::all();

        $data = array(
            'app_class'=>$class,
            'session'=>$session,
            'batch'=>$batch,
            'section'=>$section
        );
        return view('studentbatch::batch.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditBatchPostRequest $request, $id)
    {


        try{
            $batch = Studentbatch::find($id);

            $batch->classes_id = $request->student_class;
            $batch->sessions_id = $request->session_id;
            $batch->sections_id = $request->section;
            $batch->student_roll = $request->Roll;
            $batch->status = $request->student_status;
            $batch->updated_by = Sentinel::getUser()->id;

            $batch->save();

            if($batch->id){

                session::flash('success', 'Updated Successfully');
                return Redirect::back();
            }else{
                session::flash('danger', 'failed');
                return Redirect::back();
            }

        }catch(QueryException $e){

            session::flash('danger', 'Roll out of range');
            return Redirect::back();

        }catch (FatalErrorException $exception){

            session::flash('danger', 'failed');
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
        $batch = Studentbatch::find($id);


        $batch->delete();

        Session::flash('danger', 'batch is deleted');
        return Redirect::back();
    }

    public function getstudent(Request $request){

        if($request->ajax()){

            if (filter_var($request->student, FILTER_VALIDATE_EMAIL)) {
                $user = User::Email($request->student)->get();
            }else{
                $user = User::Username($request->student)->get();
            }
            return response($user);
        }else{

            return Redirect::to('/');
        }


    }

    public function getAllStudent(Request $request)
    {


        $data = '';
        $user = DB::select('SELECT users.first_name,studentbatches.id,studentbatches.student_roll FROM `studentbatches` LEFT JOIN users ON users.id = studentbatches.user_id LEFT JOIN sessions ON sessions.id = studentbatches.sessions_id LEFT JOIN sections ON sections.id = studentbatches.sections_id LEFT JOIN classes ON classes.id= studentbatches.classes_id WHERE studentbatches.classes_id=:stuclass AND studentbatches.sessions_id = :stusession AND studentbatches.sections_id =:stusection ORDER BY studentbatches.student_roll ASC', ['stusection' => $request->stusection, 'stusession' => $request->stusession, 'stuclass' => $request->stuclass]);

        foreach ($user as $item) {
            $delete = route('studentbatch_delete', $item->id);
            $edit = route('studentbatch_edit', $item->id);

            $data .= "<tr>";
            $data .= "<td >" . $item->student_roll . "</td>";
            $data .= "<td >" . $item->first_name . "</td>";
            $data .= "<td align='right'>";
            $data .= "<a href ='" . $edit . "' " . " class='uk-margin-left'><i class='material-icons'>&#xE254;</i></a>";
            $data .= "<a onclick='deleterow(this); return false' href ='" . $delete . "' " . " class='uk-margin-left'><i class='material-icons'>&#xE872;</i></a>";
            $data .= "</td>";
            $data .= "</tr>";
        }
        return response($data);

    }
}
