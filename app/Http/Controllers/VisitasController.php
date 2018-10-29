<?php

namespace App\Http\Controllers;

use App\Visitas;
use Illuminate\Http\Request;
use App\Store;
use DB;

class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visitas  $visitas
     * @return \Illuminate\Http\Response
     */
    public function show(Visitas $visitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visitas  $visitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitas $visitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visitas  $visitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitas $visitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visitas  $visitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitas $visitas)
    {
        //
    }
    public function visitaStore(Request $request)
    {
        //$visitasDos = DB::table('stores')->pluck('n_visita');
        //$visitas = Store::where('n_visita')->get();
        //dd($visitasDos);
        //return View('visitas', $visitasDos);
        return View('visitas');
    }
}
