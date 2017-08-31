<?php

namespace App\Modules\Teacher\Http\Controllers;

use App\Model\Account\DailyAccount;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{


    public $id = null;
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('teacherrole');
    }

    public function index()
    {
        $this->id =  Sentinel::getUser()->id;

        $account = DailyAccount::orderByDesc('id')->User($this->id)->get();


        return view('teacher::account.index')->with('account',$account);
    }
}
