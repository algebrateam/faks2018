<?php

namespace App\Http\Controllers;

use App\Dvorana;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Validator;
use function redirect;
use function view;

class DvoranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    $dvorana = Dvorana::all();
     return view('dvorana.index', ['dvo' => $dvorana]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Dvorana  $dvorana
     * @return Response
     */
    public function show(Dvorana $dvorana)
    {
        return view('dvorana.show')->with('dvo',$dvorana);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Dvorana  $dvorana
     * @return Response
     */
    public function edit(Dvorana $dvorana)
    {
        return view('dvorana.edit')->with('dvo',$dvorana);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Dvorana  $dvorana
     * @return Response
     */
    public function update(Request $request, Dvorana $dvorana)
    {
        
              $rules = array(
            'id' => 'required|numeric',
            'naziv' => 'required|max:191',
             'brojmjesta' => 'required|numeric'  
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return redirect()->route('dvorana.edit', ['id' =>$dvorana->id])
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
      $dvorana ->id = Input::get('id');
            $dvorana ->naziv = Input::get('naziv');
            $dvorana ->brojmjesta = Input::get('brojmjesta');
            $dvorana->save();

            // redirect
            Session::flash('message', 'Successfully updated dvorana!');
            //return Redirect::to('zupanija');
            return redirect()->route('dvorana.edit', ['id' =>$dvorana->id]);
    }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  Dvorana  $dvorana
     * @return Response
     */
    public function destroy(Dvorana $dvorana)
    {
        //
    }
}
