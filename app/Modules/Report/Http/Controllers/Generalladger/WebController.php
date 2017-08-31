<?php

namespace App\Modules\Report\Http\Controllers\Generalladger;

use App\Model\Account\AccountType;
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

        $ledger =DB::select("SELECT daily_accounts.ix_status as status, account_types.name as name,account_types.id as id ,sum(daily_accounts.amount) as total FROM `daily_accounts` JOIN account_types on account_types.id = daily_accounts.acc_type group BY daily_accounts.ix_status, daily_accounts.acc_type ORDER BY daily_accounts.acc_type");
        $result = array();
        foreach ($ledger as $data) {
            $name = $data->name;
            if (isset($result[$name])) {

               // echo $data->name."_".$data->status."_". "<br/>";
                if($data->status==1){
                    $result[$name]['id'] = $data->id;
                    $result[$name]['name'] = $data->name;
                    $result[$name]['income'] = $data->total;

                }else{
                    $result[$name]['id'] = $data->id;
                    $result[$name]['name'] = $data->name;
                    $result[$name]['expense'] = $data->total;
                }

            } else {
               // echo $data->name. "<br/>";
                if($data->status==1) {
                    $result[$name]['id'] = $data->id;
                    $result[$name]['name'] = $data->name;
                    $result[$name]['income'] =$data->total;
                }else{
                    $result[$name]['id'] = $data->id;
                    $result[$name]['name'] = $data->name;
                    $result[$name]['expense'] = $data->total;
                }
            }
        }





        return view('report::Generalledger.index')->with('DailyAccount',$result);
    }

    public function SearchByDate(Request $request)
    {
      if($request->from_date!=null && $request->to_date!=null) {

          $ledger = DB::select("SELECT daily_accounts.ix_status as status, account_types.name as name,account_types.id as id ,sum(daily_accounts.amount) as total FROM `daily_accounts` JOIN account_types on account_types.id = daily_accounts.acc_type WHERE daily_accounts.date BETWEEN :from AND :to group BY daily_accounts.ix_status, daily_accounts.acc_type ORDER BY daily_accounts.acc_type", ['from' => $request->from_date,'to'=>$request->to_date]);
          $result = array();
          foreach ($ledger as $data) {
              $name = $data->name;
              if (isset($result[$name])) {

                  // echo $data->name."_".$data->status."_". "<br/>";
                  if ($data->status == 1) {
                      $result[$name]['id'] = $data->id;
                      $result[$name]['name'] = $data->name;
                      $result[$name]['income'] = $data->total;

                  } else {
                      $result[$name]['id'] = $data->id;
                      $result[$name]['name'] = $data->name;
                      $result[$name]['expense'] = $data->total;
                  }

              } else {
                  // echo $data->name. "<br/>";
                  if ($data->status == 1) {
                      $result[$name]['id'] = $data->id;
                      $result[$name]['name'] = $data->name;
                      $result[$name]['income'] = $data->total;
                  } else {
                      $result[$name]['id'] = $data->id;
                      $result[$name]['name'] = $data->name;
                      $result[$name]['expense'] = $data->total;
                  }
              }
          }
          return view('report::Generalledger.index')->with('DailyAccount', $result);
      }else{
          Session::flash('alert', 'Please select date ');
          return $this->index();
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

}

 function myfunction($value,$key)
{
    echo "The key $key has the value $value<br>";
}
