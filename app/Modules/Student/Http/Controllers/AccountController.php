<?php

namespace App\Modules\Student\Http\Controllers;

use App\Model\Account\DailyAccount;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public $id = null;
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('studentrole');
    }
    public function index()
    {
        $this->id =  Sentinel::getUser()->id;

        $account =DailyAccount::orderByDesc('id')->User($this->id)->get();

        return view('student::account.index')->with('account',$account);
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
