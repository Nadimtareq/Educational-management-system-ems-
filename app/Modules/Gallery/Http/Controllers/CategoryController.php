<?php

namespace App\Modules\Gallery\Http\Controllers;

use App\Model\Gallery\GalleryCat;
use App\Modules\Gallery\Http\Requests\categoryPostRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Contracts\View\View;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = GalleryCat::all();

        return view('gallery::category.index')->with('cat',$cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('gallery::category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categoryPostRequest $request)
    {

        try{
            $category =  new GalleryCat();

            $category->title =$request->title;
            $category->description =$request->desc;
            $category->created_by =  Sentinel::getUser()->id;
             $category->save();


            Session::flash('info', 'Created successfully');
            return Redirect::back();
        }catch(QueryException $exception){


            Session::flash('alert', $exception->getMessage());
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
        $gal = GalleryCat::find($id);

        return view('gallery::category.edit')->with('gal',$gal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(categoryPostRequest $request, $id)
    {
      $cat=  GalleryCat::find($id);

      $cat->title = $request->title;
      $cat->description = $request->desc;
      $cat->updated_by = Sentinel::getUser()->id;

       $cat->update();

        Session::flash('alert', 'Category is updated');
        return Redirect::back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GalleryCat::find($id)->delete();

        Session::flash('danger', 'Category is deleted');
        return Redirect::back();
    }
}
