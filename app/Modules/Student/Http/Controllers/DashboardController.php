<?php

namespace App\Modules\Student\Http\Controllers;

use App\Model\Account\DailyAccount;
use App\Model\Leave\Leave;
use App\Model\Student\Studentbatch;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('studentrole');
    }

    public function index()
    {
        $this->id =  Sentinel::getUser()->id;
        //return "some";
     // $paid=DailyAccount:: where('ix_status','=', 1)->sum('amount');
        $paid=DailyAccount::User($this->id)->StudentIX(0)->sum('amount');
       //return $paid;
         $leave=DB::select('SELECT SUM(DATEDIFF(leaves.end_date,leaves.start_date)) as days FROM `leaves` WHERE users_id = :id AND YEAR(leaves.start_date) = YEAR(CURDATE())', ['id' => $this->id]);

        //return $leave;
        $batch = Studentbatch::Batch($this->id)->CurrentYear(date('Y'))->get();
        $batch=  $batch->sortByDesc('id')->take(1);




        // $id = Sentinel::getUser()->id;
      return  view('student::dashboard.index',compact('paid','leave','batch'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return  view('student::dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
}
