<?php

namespace App\Modules\Teacher\Http\Controllers;

use App\Model\Student\Studentbatch;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Model\Teacher\Classteacher;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyclassController extends Controller
{

    public $id = null;
    public $emssession = null;
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('teacherrole');
    }

    public function index()
    {
        $this->id =  Sentinel::getUser()->id;
        $currentteacher = Classteacher::Techer($this->id)->CurrentYear(date('Y'))->get();

        $currentteacher= $currentteacher->sortBy('id')->take(1)->flatten();
        foreach ($currentteacher as $item)
         {
            $this->emssession = $item->session->title;
         }

        if(date('Y')==$this->emssession)
         {
                $student = Studentbatch::MyClass($currentteacher[0]->classes_id)->MySession($currentteacher[0]->sessions_id)->MySection($currentteacher[0]->sections_id)->get();
                return view('teacher::myclass.index')->with('student',$student);
         }
        else

         {
               $student = [];

              return view('teacher::myclass.index')->with('student',$student);
         }

    }
}
