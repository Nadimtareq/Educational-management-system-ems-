<?php

namespace App\Modules\Dynamicpage\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Page\PageTitle;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

use App\Model\Page\Pages;
class PagedetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
    public function index()
    {
        $pagedetail=Pages::all();
        return view('dynamicpage::Page_detail.index',compact('pagedetail'));
    }


    public function create()
    {
        $page=PageTitle::all();
        $pagedetail=Pages::all();
        return view('dynamicpage::Page_detail.create',compact('pagedetail', 'page'));
    }


    public function store(Request $request)
    {   //dd($request->all());
        $pagedetail= new Pages();
        $pagedetail->pt_id=$request->type;
        $pagedetail->title=$request->title;
        $pagedetail->details=$request->details;
        $pagedetail->created_by = Sentinel::getUser()->id;
        $pagedetail->updated_by = Sentinel::getUser()->id;
        $pagedetail->save();
        if($pagedetail){

            return Redirect::route('page_detail')->with('message','successfully store');
        }else{

            return Redirect::back()->with('warning','store failed');
        }

    }

    public function show($id)
    {


    }


    public function edit($id)
    {
        //return "some";
        $pagedetail=Pages::find($id);
        $all = Pages::all();
        //return $pagedetail;
        //$page=PageTitle::all();
        return view('dynamicpage::page_detail.edit' , compact('pagedetail' , 'all'));
       ;
    }


    public function update(Request $request, $id)
    {
        $pagedetail= new Pages();
        $pagedetail->pt_id=$request->type;
        $pagedetail->title=$request->title;
        $pagedetail->details=$request->details;
        $pagedetail->updated_by =Sentinel::getUser()->id;
        $pagedetail->update();
        if($pagedetail){

            return Redirect::route('page_detail')->with('message','successfully updated');
        }else{

            return Redirect::back()->with('warning','update failed');
        }

    }


    public function delete($id)
    {
        $pagedetail=Pages::find($id);
        $pagedetail->delete();
        return Redirect::back()->with('message','Successfully Deleted ');
    }
}
