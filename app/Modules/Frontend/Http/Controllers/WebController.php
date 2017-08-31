<?php

namespace App\Modules\Frontend\Http\Controllers;

use App\Model\Attendance\StaffAtten;
use App\Model\Attendance\StudentAtten;
use App\Model\Contact\ContactInfo;
use App\Model\Elibrary\Elibrary;
use App\Model\Gallery\Gallery;
use App\Model\Gallery\GalleryCat;
use App\Model\Message\Message;
use App\Model\Message\MessageType;
use App\Model\Notice\Noticeboard;
use App\Model\Slider\Slider;
use App\Model\User\Role_user;
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
    public function index()
    {

        $notice=Noticeboard::all();
        $contact=ContactInfo::find(1);
        $message=Message::all();
        $slider=Slider::all();
        $Totalst=Role_user::where('role_id', '=', 3)->get()->count();
        //$satten=StudentAtten::where([['atten_status', '=',1],['atten_status', '=',0],])->get();
        $satten=StudentAtten::where('atten_status', '=',1)->get()->count();
        $satten1=StudentAtten::where('atten_status', '=',0)->get()->count();
        $Totalsf=Role_user::wherein('role_id', [1,2,4,5,7] )->get()->count();
        //$stfatten=StaffAtten::where([['atten_status', '=',1],['atten_status', '=',0],])->get()->count();
        $stfatten=StaffAtten::where('atten_status', '=',1)->get()->count();
        $stfatten1=StaffAtten::where('atten_status', '=',1)->get()->count();
        //return $notice;
       return view('layouts.frontend.fmaster',compact('notice','contact','message','slider','Totalst','satten','satten1','Totalsf','stfatten','stfatten1'));
    }



        public function history(){
           // return 'okk';
            $notice=Noticeboard::all();
            $contact=ContactInfo::find(1);
        return view('layouts.frontend.history',compact('contact','notice'));
    }

    public  function fmessage(){
        $notice=Noticeboard::all();
        $contact=ContactInfo::find(1);

        return view('layouts.frontend.ourmessage',compact('contact','notice'));
    }

    public function mission_Vision(){
        $notice=Noticeboard::all();
        $contact=ContactInfo::find(1);
        return view('layouts.frontend.mission_vission',compact('contact','notice'));
    }

    public function academic_Council(){
        $notice=Noticeboard::all();
        $contact=ContactInfo::find(1);
        return view('layouts.frontend.academic_council',compact('contact','notice'));
    }

    public  function organogram(){
        $notice=Noticeboard::all();
        $contact=ContactInfo::find(1);
        return view('layouts.frontend.organogram',compact('contact','notice'));
    }


    public  function ex_principle(){
        $notice=Noticeboard::all();
        $contact=ContactInfo::find(1);
        return view('layouts.frontend.ex_principle',compact('contact','notice'));

    }

     public function employee_information(){
      $notice=Noticeboard::all();
      $contact=ContactInfo::find(1);
      return view('layouts.frontend.employee_information',compact('contact','notice'));

  }



    public function career(){
     $notice=Noticeboard::all();
     $contact=ContactInfo::find(1);
     return view('layouts.frontend.career',compact('contact','notice'));
 }

    public function academic_program(){
        $notice=Noticeboard::all();
        $contact=ContactInfo::find(1);
        return view('layouts.frontend.academic_program',compact('contact','notice'));
    }

    public function code_conducts(){
        $notice=Noticeboard::all();
        $contact=ContactInfo::find(1);
        return view('layouts.frontend.code_conducts',compact('contact','notice'));
    }

  public function dress_code(){
      $notice=Noticeboard::all();
      $contact=ContactInfo::find(1);
      return view('layouts.frontend.dress_code',compact('contact','notice'));
  }

  public function facility(){
      $notice=Noticeboard::all();
      $contact=ContactInfo::find(1);
      return view('layouts.frontend.facility',compact('contact','notice'));
  }

  public function resident(){

      $notice=Noticeboard::all();
      $contact=ContactInfo::find(1);
      return view('layouts.frontend.resident',compact('contact','notice'));
  }

  public  function  transport(){

      $notice=Noticeboard::all();
      $contact=ContactInfo::find(1);
      return view('layouts.frontend.transport',compact('contact','notice'));
  }

  public  function teachers(){
      $notice=Noticeboard::all();
      $contact=ContactInfo::find(1);
      return view('layouts.frontend.teachers',compact('contact','notice'));
  }
  public function students(){
      $notice=Noticeboard::all();
      $contact=ContactInfo::find(1);
      return view('layouts.frontend.students',compact('contact','notice'));
  }

  public function academic_calender(){
      $notice=Noticeboard::all();
      $contact=ContactInfo::find(1);
      return view('layouts.frontend.academic_calender',compact('contact','notice'));
  }
  public  function curriculum(){

      $notice=Noticeboard::all();
      $contact=ContactInfo::find(1);
      return view('layouts.frontend.curriculum',compact('contact','notice'));
  }

  public function class_routine(){

      $notice=Noticeboard::all();
      $contact=ContactInfo::find(1);
      return view('layouts.frontend.class_routine',compact('contact','notice'));
  }
  public function exam_routine(){

      $notice=Noticeboard::all();
      $contact=ContactInfo::find(1);
      return view('layouts.frontend.exam_routine',compact('contact','notice'));
  }

  public function felibrary(){
      $notice=Noticeboard::all();
      $contact=ContactInfo::find(1);
      $elibrary=Elibrary::all();
      return view('layouts.frontend.felibrary',compact('contact','notice','elibrary'));

}

public function content_download(){

    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    return view('layouts.frontend.content_download',compact('contact','notice'));
}

public  function publication(){

    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    return view('layouts.frontend.publication',compact('contact','notice'));
}


public function co_curricular(){
    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    return view('layouts.frontend.co_curricular',compact('contact','notice'));

}

public  function success_story(){

    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    return view('layouts.frontend.success_story',compact('contact','notice'));
}

public function fgallery(){

    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    $gallerycat=GalleryCat::all();
    $gallery=Gallery::all();
    return view('layouts.frontend.fgallery',compact('contact','notice','gallerycat','gallery'));
}

public function internal_result(){

    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    return view('layouts.frontend.internal_result',compact('contact','notice'));
}

public function public_exam_result(){

    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    return view('layouts.frontend.public_exam_result',compact('contact','notice'));

}

public function result_download(){

    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    return view('layouts.frontend.result_download',compact('contact','notice'));

}

public  function  stestimonials(){
    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    return view('layouts.frontend.stestimonials',compact('contact','notice'));
}

public function stransfer_certificate(){

    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    return view('layouts.frontend.stransfer_certificate',compact('contact','notice'));

}

public  function scholarship(){

    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    return view('layouts.frontend.scholarship',compact('contact','notice'));

}

public  function  fnotice(){

    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    return view('layouts.frontend.fnotice',compact('contact','notice'));

}

public function fevents (){

    $notice=Noticeboard::all();
    $contact=ContactInfo::find(1);
    return view('layouts.frontend.fevents',compact('contact','notice'));

}

 public  function admission_information(){

     $notice=Noticeboard::all();
     $contact=ContactInfo::find(1);
     return view('layouts.frontend.admission_information',compact('contact','notice'));

 }

 public function online_admission(){
     $notice=Noticeboard::all();
     $contact=ContactInfo::find(1);
     return view('layouts.frontend.online_admission',compact('contact','notice'));
 }

 public  function  form_download(){

     $notice=Noticeboard::all();
     $contact=ContactInfo::find(1);
     return view('layouts.frontend.form_download',compact('contact','notice'));

 }
 public  function  exam_seat_plan(){

 }

 public  function admission_result(){

     $notice=Noticeboard::all();
     $contact=ContactInfo::find(1);
     return view('layouts.frontend.admision_result',compact('contact','notice'));

 }


 public  function  contact(){
     $notice=Noticeboard::all();
     $contact=ContactInfo::find(1);
     return view('layouts.frontend.contact',compact('contact','notice'));
 }







































    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
