<?php

namespace App\Modules\Report\Http\Controllers\AccountTransection;

use App\Model\Account\AccountType;
use App\Model\Account\DailyAccount;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
    public function index($id=null)
    {
        $type= AccountType::all();
        if($id==null){
            $DailyAccount = DailyAccount::orderBy('id', 'DESC')->get();


            return view('report::Accounttransection.index')->with(array('DailyAccount'=>$DailyAccount,'type'=>$type));
        }else{

            $DailyAccount = DailyAccount::where('acc_type', $id)->orderBy('id', 'DESC')->get();


            return view('report::Accounttransection.index')->with(array('DailyAccount'=>$DailyAccount,'type'=>$type));
        }

    }

    public function SearchByDate(Request $request)
    {
        $type= AccountType::all();
         if($request->type>0 && $request->has('from_date') && $request->has('to_date'))
         {


             $DailyAccount = DailyAccount::where('acc_type', $request->type)->whereBetween('date', [$request->from_date, $request->to_date])->orderBy('id', 'DESC')->get();


             return view('report::Accounttransection.index')->with(array('DailyAccount'=>$DailyAccount,'type'=>$type));
         }elseif ($request->from_date==null)
         {


             $DailyAccount = DailyAccount::where('acc_type', $request->type)->orderBy('id', 'DESC')->get();


             return view('report::Accounttransection.index')->with(array('DailyAccount'=>$DailyAccount,'type'=>$type));
         }
         else
         {
                 $DailyAccount = DailyAccount::whereBetween('date', [$request->from_date, $request->to_date])->orderBy('id', 'DESC')->get();
                 return view('report::Accounttransection.index')->with(array('DailyAccount'=>$DailyAccount,'type'=>$type));
         }



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
