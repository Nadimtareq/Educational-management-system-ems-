<?php

namespace App\Modules\Staff\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Account\DailyAccount;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
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
        $this->middleware('staffrole');


    }
    public function index()
    {
        $this->id =  Sentinel::getUser()->id;
        $TotalRecieve = DailyAccount::User($this->id)->StaffIX(0)->sum('amount');
        $staff_leave= DB::select('SELECT SUM(DATEDIFF(leaves.end_date,leaves.start_date)) as days FROM `leaves` WHERE users_id = :id AND YEAR(leaves.start_date) = YEAR(CURDATE())', ['id' => $this->id]);
        return view('staff::Dashboard.index',compact('TotalRecieve','staff_leave'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
