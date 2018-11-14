<?php

namespace App\Http\Controllers;

use App\Visitas;
use App\Store;
use Illuminate\Http\Request;
use DB;
use Session;

class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('visitas');
    }

    public function postVisitas(Request $request)
    {
        $request->file('images')->storeAs('public/visitas/'.'visita-'.$request->numero_visita.'/'.$request->nit, $request->images->getClientOriginalName());
        $visita = Visitas::create([
            'ciudad' => $request->ciudad,
            'fecha_visita' => $request->fecha_visita,
            'punto_venta' => $request->punto_venta,
            'nombre_tendero' => $request->nombre_tendero,
            'nombre_visitador' => $request->nombre_visitador,
            'barrio' => $request->barrio,
            'direccion' => $request->direccion,
            'celular' => $request->celular,
            'numero_visita' => $request->numero_visita,
            'nit' => $request->nit,
            'ventas' => $request->ventas,
            'inflatablesNescafe1' => $request->inflatablesNescafe1,
            'inflatablesNescafe2' => $request->inflatablesNescafe2,
            'inflatablesNescafe3' => $request->inflatablesNescafe3,
            'inflatablesNescafe4' => $request->inflatablesNescafe4,
            'inflatablesNescafe5' => $request->inflatablesNescafe5,
            'inflatablesMaggi1' => $request->inflatablesMaggi1,
            'inflatablesMaggi2' => $request->inflatablesMaggi2,
            'inflatablesMaggi3' => $request->inflatablesMaggi3,
            'inflatablesMaggi4' => $request->inflatablesMaggi4,
            'inflatablesMaggi5' => $request->inflatablesMaggi5,
            'inflatablesMaggi6' => $request->inflatablesMaggi6,
            'inflatablesMaggi7' => $request->inflatablesMaggi7,
            'caras_ex_nescafe' => $request->caras_ex_nescafe,
            'caras_ex_maggi' => $request->caras_ex_maggi,
            'caras_ad_nescafe' => $request->caras_ad_nescafe,
            'caras_ad_maggi' => $request->caras_ad_maggi,
            'stickers' => $request->stickers,
            'images' => 'storage/visitas/'.$request->images->getClientOriginalName(),
            'observaciones' => $request->observaciones,
        ]);
        return redirect('home')->with('success', 'Visita registrada con exito.');
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
        $id = Session::get('nit-id');
        $nit = Store::find($id);
        return view('visitas')->with('nit', $nit);
    }
}
