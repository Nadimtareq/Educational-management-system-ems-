<?php

namespace App\Modules\Dynamicpage\Http\Controllers;

use App\Model\Page\PageTitle;
use Illuminate\Http\Request;
use App\Model\Page\Pages;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
    public function index()
    {
        $page=PageTitle::all();
        return view('dynamicpage::Page.index',compact('page'));
    }


    public function create()
    {
        $page=PageTitle::all();
        return view('dynamicpage::Page.create')->with('page',$page);
    }


    public function store(Request $request)
    {
        $page= new PageTitle ();
        $page->title=$request->title;
        $page->created_by =Sentinel::getUser()->id;
        $page->updated_by=Sentinel::getUser()->id;
        $page->saveOrFail();
        if($page){

            return Redirect::route('page')->with('message','successfully store');
        }else{

            return Redirect::back()->with('warning','store failed');
        }
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $page=PageTitle::find($id);
        return view('dynamicpage::Page.edit')->with('page',$page);

    }


    public function update(Request $request, $id)
    {
        $page= new PageTitle ();
        $page->title=$request->title;
        $page->updated_by=Sentinel::getUser()->id;
        $page->update();

        if($page){

            return Redirect::route('page')->with('message','successfully updated');
        }else{

            return Redirect::back()->with('warning','updated failed');
        }
    }


    public function delete($id)
    {
        $page = PageTitle::find($id);
        $page->delete();
        return Redirect::back()->with('message','Successfully Deleted ');
    }
}
