<?php

namespace App\Modules\Applications\Http\Controllers\Type;

use App\Model\Certificate\CertificateType;
use App\Modules\Applications\Http\Requests\Type\ApplicationTypePostRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ApplicationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $app_type = CertificateType::all();

        return view('applications::Type.index')->with('app_type',$app_type);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applications::Type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationTypePostRequest $request)
    {
       $app_type= new CertificateType();

       $app_type->name = $request->title;
       $app_type->created_by =  Sentinel::getUser()->id;
       $app_type->updated_by =Sentinel::getUser()->id;
       $app_type->save();


        Session::flash('success', 'Success');
        return Redirect::back();
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
        $application_type = CertificateType::find($id);
        return view('applications::Type.edit')->with('application_type',$application_type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApplicationTypePostRequest $request, $id)
    {
        $app_type=CertificateType::find($id);

        $app_type->name = $request->title;
        $app_type->updated_by =Sentinel::getUser()->id;
        $app_type->save();


        Session::flash('success', 'Successfully Updated');

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
        $app_type=CertificateType::find($id);

        $app_type->delete();

        Session::flash('danger', 'Successfully deleted');

        return Redirect::back();
    }
}
