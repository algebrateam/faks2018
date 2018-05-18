<?php

namespace App\Http\Controllers;

use App\Zupanija;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ZupanijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $zup = new App\Zupanija;
      $zup->all();

foreach ($zup as $z) {
    echo $z->naziv;
}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return "sve zupanije:";
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
     * @param  Zupanija  $zupanija
     * @return Response
     */
    public function show(Zupanija $zupanija)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Zupanija  $zupanija
     * @return Response
     */
    public function edit(Zupanija $zupanija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Zupanija  $zupanija
     * @return Response
     */
    public function update(Request $request, Zupanija $zupanija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Zupanija  $zupanija
     * @return Response
     */
    public function destroy(Zupanija $zupanija)
    {
        //
    }
}
