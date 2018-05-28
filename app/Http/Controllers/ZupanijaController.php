<?php

namespace App\Http\Controllers;

use App\Zupanija;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\View\View;
use function redirect;
use function view;

class ZupanijaController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    $zup = Zupanija::all();
 //dd($zup);
//    echo '<h1>Sve županije</h1>';
//    foreach ($zup as $z) {
//      echo $z->naziv.'<br>';
//    }
     return view('zupanija.index', ['zup' => $zup]);

  }
  public function brojzupanija(){
    return Zupanija::all()->count();
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create() {
    return "sve zupanije:";
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(Request $request) {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  Zupanija  $zupanija
   * @return Response
   */
  public function show(Zupanija $zupanija) {
    // detalji županije
 //$zupanija = Zupanija::find($zupanija);
// dd($zupanija);
        // show the view and pass the nerd to it
       // return view('zupanija.show',['zup'=> $zupanija]);
        return view('zupanija.show')->with('zup',$zupanija);               
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  Zupanija  $zupanija
   * @return Response
   */
  public function edit(Zupanija $zupanija) {
    return view('zupanija.edit')->with('zup',$zupanija);   
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  Request  $request
   * @param  Zupanija  $zupanija
   * @return Response
   */
  public function update(Request $request, Zupanija $zupanija) {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'id' => 'required|numeric',
            'naziv' => 'required|max:191'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return redirect()->route('zupanija.edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
//                        return Redirect::to('zupanija/' . $id . '/edit')
//                            ->withErrors($validator)
//                            ->withInput(Input::except('password'));
        } else {
            // store
           // $zupanija = Zupanija::find($id);
            $zupanija ->id = Input::get('id');
            $zupanija ->naziv = Input::get('naziv');
            $zupanija->save();

            // redirect
            Session::flash('message', 'Successfully updated zupanija!');
            //return Redirect::to('zupanija');
            return redirect()->route('zupanija.edit', ['id' =>$zupanija->id]);
        }
        
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  Zupanija  $zupanija
   * @return Response
   */
  public function destroy(Zupanija $zupanija) {
     $zupanija->delete();

            // redirect
            Session::flash('message', 'Successfully updated zupanija!');
            //return Redirect::to('zupanija');
            return redirect()->route('zupanija.index');
  }

}
