<?php

namespace App\Modules\Report\Http\Controllers\ProfitLoss;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {
        $this->middleware('basicauth');
    }

    public function index()
    {

        $ledger = DB::select("SELECT daily_accounts.ix_status,sum(daily_accounts.amount) as total ,daily_accounts.date, account_types.name FROM `daily_accounts` JOIN account_types on account_types.id = daily_accounts.acc_type  group BY daily_accounts.acc_type,daily_accounts.ix_status");
      //  $profit = DB::select("SELECT daily_accounts.ix_status,sum(daily_accounts.amount) as total ,daily_accounts.date, account_types.name FROM `daily_accounts` JOIN account_types on account_types.id = daily_accounts.acc_type group BY daily_accounts.acc_type,daily_accounts.ix_status");

        return view('report::ProfitLoss.index')->with(array('ledger'=>$ledger,));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function SearchByDate(Request $request)
    {

        if($request->from_date==null || $request->to_date==null) {

            Session::flash('alert', 'Please select date ');
            return $this->index();
            exit();
        }

       try
       {
           $ledger = DB::select("SELECT daily_accounts.ix_status,sum(daily_accounts.amount) as total ,daily_accounts.date, account_types.name FROM `daily_accounts` JOIN account_types on account_types.id = daily_accounts.acc_type WHERE daily_accounts.date BETWEEN :from AND :to group BY daily_accounts.acc_type,daily_accounts.ix_status",['from'=>$request->from_date,'to'=>$request->to_date]);
          // $profit = DB::select("SELECT daily_accounts.ix_status,sum(daily_accounts.amount) as total ,daily_accounts.date, account_types.name FROM `daily_accounts` JOIN account_types on account_types.id = daily_accounts.acc_type WHERE daily_accounts.ix_status=1 AND daily_accounts.date BETWEEN :from AND :to group BY daily_accounts.acc_type,daily_accounts.ix_status",['from'=>$request->from_date,'to'=>$request->to_date]);

           return view('report::ProfitLoss.index')->with(array('ledger'=>$ledger,'from_date'=>$request->from_date,'to_date'=>$request->to_date));
       }catch (\Illuminate\Database\QueryException $exception){

           Session::flash('alert', 'Please select date ');
          return $this->index();
       }

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
