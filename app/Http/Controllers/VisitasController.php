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
        dd($request);
/*        //Infaltables Nescafe
        $request->file('imgNescafe1')->storeAs('public/visitas', $request->n_visita.'-'.$request->nit.'-Nescafe1.jpg');
        $request->file('imgNescafe2')->storeAs('public/visitas', $request->n_visita.'-'.$request->nit.'-Nescafe2.jpg');
        $request->file('imgNescafe3')->storeAs('public/visitas', $request->n_visita.'-'.$request->nit.'-Nescafe3.jpg');
        $request->file('imgNescafe4')->storeAs('public/visitas', $request->n_visita.'-'.$request->nit.'-Nescafe4.jpg');
        $request->file('imgNescafe5')->storeAs('public/visitas', $request->n_visita.'-'.$request->nit.'-Nescafe5.jpg');
        //Infaltables Maggi
        $request->file('imgMaggi1')->storeAs('public/visitas', $request->n_visita.'-'.$request->nit.'-Maggi1.jpg');
        $request->file('imgMaggi2')->storeAs('public/visitas', $request->n_visita.'-'.$request->nit.'-Maggi2.jpg');
        $request->file('imgMaggi3')->storeAs('public/visitas', $request->n_visita.'-'.$request->nit.'-Maggi3.jpg');
        $request->file('imgMaggi4')->storeAs('public/visitas', $request->n_visita.'-'.$request->nit.'-Maggi4.jpg');
        $request->file('imgMaggi5')->storeAs('public/visitas', $request->n_visita.'-'.$request->nit.'-Maggi5.jpg');
        $request->file('imgMaggi6')->storeAs('public/visitas', $request->n_visita.'-'.$request->nit.'-Maggi6.jpg');
        $request->file('imgMaggi7')->storeAs('public/visitas', $request->n_visita.'-'.$request->nit.'-Maggi7.jpg');

        $visita = Visitas::create([
            'nit' => $request->nit,
            'nombre_cliente' => $request->nombre_cliente,
            'razon_social' => $request->razon_social,
            'n_visita' => $request->n_visita,
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
            'imgNescafe1' => 'storage/visitas/'$request->n_visita.'-'.$request->nit.'-Nescafe1.jpg',
            'imgNescafe2' => 'storage/visitas/'$request->n_visita.'-'.$request->nit.'-Nescafe2.jpg',
            'imgNescafe3' => 'storage/visitas/'$request->n_visita.'-'.$request->nit.'-Nescafe3.jpg',
            'imgNescafe4' => 'storage/visitas/'$request->n_visita.'-'.$request->nit.'-Nescafe4.jpg',
            'imgNescafe5' => 'storage/visitas/'$request->n_visita.'-'.$request->nit.'-Nescafe5.jpg',
            'imgMaggi1' => 'storage/visitas/'$request->n_visita.'-'.$request->nit.'-Maggi1.jpg',
            'imgMaggi2' => 'storage/visitas/'$request->n_visita.'-'.$request->nit.'-Maggi2.jpg',
            'imgMaggi3' => 'storage/visitas/'$request->n_visita.'-'.$request->nit.'-Maggi3.jpg',
            'imgMaggi4' => 'storage/visitas/'$request->n_visita.'-'.$request->nit.'-Maggi4.jpg',
            'imgMaggi5' => 'storage/visitas/'$request->n_visita.'-'.$request->nit.'-Maggi5.jpg',
            'imgMaggi6' => 'storage/visitas/'$request->n_visita.'-'.$request->nit.'-Maggi6.jpg',
            'imgMaggi7' => 'storage/visitas/'$request->n_visita.'-'.$request->nit.'-Maggi7.jpg',
            'observaciones' => $request->ventas,
        ]);

        return redirect('home')->with('success', 'Visita registrada con exito.');*/
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
        $id = Session::get('nit-id');
        $nit = Store::find($id);
        return view('visitas')->with('nit', $nit);
        //return View('visitas');
    }
}
