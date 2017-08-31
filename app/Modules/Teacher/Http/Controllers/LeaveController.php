<?php

namespace App\Modules\Teacher\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Model\Leave\Leave;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LeaveController extends Controller
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

      $leave   = Leave::ByTeacher($this->id)->get();

      return view('teacher::leave.index')->with('leave',$leave);
  }
}
