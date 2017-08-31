<?php

namespace App\Modules\Teacher\Http\Controllers;

use App\Model\Account\DailyAccount;
use App\Model\Teacher\Classteacher;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DeshboardController extends Controller
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

        $TotalRecieve = DailyAccount::User($this->id)->TecherIX(0)->sum('amount');
        $daysleave= DB::select('SELECT SUM(DATEDIFF(leaves.end_date,leaves.start_date)) as days FROM `leaves` WHERE users_id = :id AND YEAR(leaves.start_date) = YEAR(CURDATE())', ['id' => $this->id]);

        $currentteacher = Classteacher::Techer($this->id)->CurrentYear(date('Y'))->first();
      //  $currentteacher= $currentteacher->sortByDesc('id')->take(1);





        return view('teacher::deshboard')->with(array('TotalRecieve'=>$TotalRecieve,'daysleave'=>$daysleave,'classteacher'=>$currentteacher));
    }




}
