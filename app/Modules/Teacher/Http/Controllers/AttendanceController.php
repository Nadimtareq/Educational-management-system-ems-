<?php

namespace App\Modules\Teacher\Http\Controllers;

use App\Model\Attendance\StaffAtten;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
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


          $atten=StaffAtten::orderByDesc('date')->User($this->id)->get();


        return view('teacher::attendance.index')->with('atten',$atten);
    }
}
