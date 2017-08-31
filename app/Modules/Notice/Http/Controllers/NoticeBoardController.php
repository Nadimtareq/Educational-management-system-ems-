<?php

namespace App\Modules\Notice\Http\Controllers;

use App\Model\Notice\Noticeboard;
use App\Model\Notice\NoticeType;
use App\Modules\Notice\Http\Requests\Notice\NoticePostRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;

class NoticeBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {

        $notice = Noticeboard::all();

        return view('notice::notice.index')->with('notice',$notice);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = NoticeType::all();

        return view('notice::notice.create')->with('type',$type);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticePostRequest $request)
    {

      try{
          $fileName = null;
          $notice = new Noticeboard();
          if ($request->hasFile('notice_file')) {
              $fileName = $request->notice_file->store('/images');


              $notice->title = $request->title;

              $notice->details = $request->desc;

              $notice->type_id = $request->type;
              $notice->file = $fileName;
              $notice->created_by= Sentinel::getUser()->id;
              $notice->saveOrFail();

              Input::file('notice_file')->move('images/', $fileName); // uploading file to given path
              Session::flash('info', 'Notic created successfully with attachment');
              return Redirect::back();
          }
          else{

              $notice->title = $request->title;

              $notice->details = $request->desc;

              $notice->type_id = $request->type;
              $notice->created_by= Sentinel::getUser()->id;
              $notice->saveOrFail();
              Session::flash('info', 'Notice Created successfully');
              return Redirect::back();
          }
      }catch (Exception $exception){


          Session::flash('danger', 'Fail ! FIle size too large ');
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
        $type = NoticeType::all();
        $notice = Noticeboard::find($id);

        return view('notice::notice.show')->with(array('type'=>$type,'notice'=>$notice));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = NoticeType::all();

        $notice = Noticeboard::find($id);

        return view('notice::notice.edit')->with(array('type'=>$type,'notice'=>$notice));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){


        try{
            $fileName = null;
            $notice = Noticeboard::find($request->notice_id);


            if ($request->hasFile('notice_file')) {
                $fileName = $request->notice_file->store('/images');


                $notice->title = $request->title;

                $notice->details = $request->desc;

                $notice->type_id = $request->type;
                $notice->file = $fileName;

                $notice->updated_by= Sentinel::getUser()->id;

                $notice->save();

                Input::file('notice_file')->move('images/', $fileName); // uploading file to given path
                Session::flash('info', 'Notic created successfully with attachment');
                return Redirect::back();
            }
            else{

                $notice->title = $request->title;

                $notice->details = $request->desc;

                $notice->type_id = $request->type;
                $notice->updated_by= Sentinel::getUser()->id;
                $notice->save();
                Session::flash('info', 'Notice Updated successfully');
                return Redirect::back();
            }
        }catch (Exception $exception){


            Session::flash('danger', 'Fail ! FIle size too large ');
            return Redirect::back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {
        $this->middleware('basicauth');
    }
    public function destroy($id)
    {
        try{
            $notice = Noticeboard::find($id);
            $link = $notice->file;

            $notice->delete();


            if($notice->file!=null){
                if(\File::exists(public_path($link))){
                unlink(public_path($link));
                }

            }

            Session::flash('danger', 'Notice is deleted');
            return Redirect::back();
        }catch (Exception $exception){
            Session::flash('danger', 'Notice is not deleted');
            return Redirect::back();
        }


    }
}
