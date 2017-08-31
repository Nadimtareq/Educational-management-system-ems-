<?php

namespace App\Modules\Gallery\Http\Controllers;


use App\Model\Gallery\Gallery;
use App\Model\Gallery\GalleryCat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Flysystem\Exception;
class GalleryController extends Controller
{

    public function index()
    {

        $gallery = Gallery::all();
        return view('gallery::gallery.index', compact('gallery'));


    }


    public function create()
    {

        $gallery = Gallery::all();
      /*  $gcat=GalleryCat::all() ;*/

        return view('gallery::gallery.create',compact('gallery'));


    }


    public function store(Request $request)
    {


        if ($request->hasFile('imag_url')) {


            $attach_file = $request->imag_url->store('/images');
            $gallery = new Gallery();

            $gallery->c_id = $request->category;
            $gallery->imag_name = $request->title;
            $gallery->imag_url = $attach_file;
            $gallery->created_by = 97;
            $gallery->updated_by = 97;
            //return $attach_file;
            $gallery->saveOrFail();

            Input::file('imag_url')->move('images/', $attach_file); // uploading file to given path
            Session::flash('info', 'Upload successfully');
            return Redirect::back();

        } else {
            Session::flash('danger', 'uploaded file is not valid');
            return Redirect::back();
        }


    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        //return "hello";
        $gallery = Gallery::find($id);
        $gct=GalleryCat::all() ;
        return view('gallery::gallery.edit',compact('gallery','gct'));

    }


    public function update(Request $request, $id)
    {


        $gallery = Gallery::find($id);
        $gallery->c_id = $request->category;
        $gallery->imag_name = $request->title;
        //$gallery->imag_url = $attach_file;
        if ($request->hasFile('imag_url')) {
            $attach_file = $request->imag_url->store('/images');
            Input::file('imag_url')->move('images/', $attach_file);
            $gallery->saveOrFail();
        }
        if ($gallery) {

            return Redirect::back()->with('message', 'successfully updated');
        }else{


        return Redirect::back()->with('warning', 'updated failed');
     }
}



    public function delete($id)
    {
        $gallery = Gallery::find($id);
        $link = $gallery->imag_url;
        $gallery->delete();
        if($gallery->imag_url!=null) {
            if (\File::exists(public_path($link))) {
                unlink(public_path($link));

            }
        }
        return Redirect::back()->with('message', 'Successfully Deleted ');


    }

}
