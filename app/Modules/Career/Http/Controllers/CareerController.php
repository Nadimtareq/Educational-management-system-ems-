<?php

namespace App\Modules\Career\Http\Controllers;

use App\Model\Career\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class CareerController extends Controller
{
    public function __construct()
    {
        $this->middleware('basicauth');
        $this->middleware('SuperadminRole');
    }
    public function index()
    {
        $career=Career::first();
        return view ('career::create')->with('career', $career);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /* $career=Career::first();
        return view ('career::create')->with('career', $career);*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $this->validate($request, [
            'details'   => 'required',

        ]);
       Career::updateOrCreate(
                ['id' => $id],
                ['details' =>$request->details,
                    'created_by' => Sentinel::getUser()->id,
                    'updated_by' => Sentinel::getUser()->id]
            );
            return Redirect::back( )->with('message', 'Successfully Store');
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
        //
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
        //
    }
}
