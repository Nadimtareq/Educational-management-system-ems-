<?php

namespace App\Modules\Slider\Http\Controllers;


use App\Modules\Slider\Http\Requests\SliderPostRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Illuminate\Http\Request;
use App\Model\Slider\Slider;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;


class SliderController extends Controller
{
    protected $status=0;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
    public function index()
    {
        $slider = Slider::all();

        return view('slider::index')->with('sliders',$slider);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderPostRequest $request)
    {
        if($request->status){
            $this->status = 1;
        }
       try{
           if ($request->hasFile('img_url')) {

               $fileName =$request->img_url->store('/images');

               $slider = new Slider();

               $slider->name = $request->name;
               $slider->img_url = $fileName;
               $slider->status =$this->status ;
              /* $slider->created_by = Sentinel::getUser()->id;
               $slider->updated_by= Sentinel::getUser()->id;*/
               $slider->created_by =95;
               $slider->updated_by=95;
               $slider->saveOrFail();

               Input::file('img_url')->move('images/', $fileName); // uploading file to given path
               Session::flash('info', 'Upload successfully');
               return Redirect::back();

           }else{
               Session::flash('danger', 'uploaded file is not valid');
               return Redirect::back();
           }
       }catch (Exception $e){
           // sending back with error message.
           Session::flash('danger', $e);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $slider= Slider::find($id);

        return view('slider::edit')->with('slider',$slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       try{
           $slider= Slider::find($id);

           $link = $slider->img_url;

           $slider->delete();

           if($slider->img_url!=null){
               if(\File::exists(public_path($link))){
                   unlink(public_path($link));

               }

           }



           Session::flash('danger', 'Image is deleted');
           return Redirect::back();
          }catch (Exception $exception){
           Session::flash('alert', 'Image is not deleted');
           return Redirect::back();
       }


    }
}
