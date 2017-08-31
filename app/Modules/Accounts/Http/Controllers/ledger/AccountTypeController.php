<?php

namespace App\Modules\Accounts\Http\Controllers\ledger;

use App\Model\Account\AccountType;
use App\Model\Account\DailyAccount;
use App\Modules\Accounts\Http\Requests\ledger\AccountTypePostRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;
use Psy\Exception\ErrorException;

class AccountTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

        $this->middleware('basicauth');
        $this->middleware('accountant');
    }
    public function index()
    {

        $acc_type = AccountType::all();
        return view('accounts::ledger.index')->with('acc_type',$acc_type);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounts::ledger.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountTypePostRequest $request)
    {
        try
        {
            $ledger = new AccountType();

            $ledger->name = $request->name;
            $ledger->created_by = Sentinel::getUser()->id;
            $ledger->updated_by = Sentinel::getUser()->id;

            $ledger->save();


            Session::flash('success', 'Success');
            return Redirect::back();

        }
        catch(ErrorException $exception)
        {
            Session::flash('danger', 'failed To add');

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

        $account_type = AccountType::find($id);
        return view('accounts::ledger.edit')->with('account_type',$account_type);
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


        try
        {


            $account_type=AccountType::find($id);


            $account_type->name = $request->name;
            $account_type->updated_by =Sentinel::getUser()->id;
            $account_type->save();


            Session::flash('success', 'Successfully Updated');

            return Redirect::back();

        }catch (\Illuminate\Database\QueryException $exception)
        {
            Session::flash('danger', 'Not updated');

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
       $count=DailyAccount::where('acc_type', $id)->count();
        if($count>0){

            Session::flash('info', 'Not Possible. There is already transection under this account .');
            return Redirect::back();

        }else{
            $account_type=AccountType::find($id);

            $account_type->delete();

            Session::flash('danger', 'Successfully deleted');

            return Redirect::back();
        }

    }
}
