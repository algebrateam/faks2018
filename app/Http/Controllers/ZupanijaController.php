<?php

namespace App\Http\Controllers;

use App\Zupanija;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

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
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  Request  $request
   * @param  Zupanija  $zupanija
   * @return Response
   */
  public function update(Request $request, Zupanija $zupanija) {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  Zupanija  $zupanija
   * @return Response
   */
  public function destroy(Zupanija $zupanija) {
    //
  }

}
