<?php

namespace App\Http\Controllers;

use App\Consultar;
use App\Visitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ConsultarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $nit = $request->get('nit');
        $visitas = Visitas::orderBy('numero_visita', 'DESC')
        ->nit($nit)
        ->paginate(15);
        return view('consultar', compact('visitas'));
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
     * @param  \App\Consultar  $consultar
     * @return \Illuminate\Http\Response
     */
    public function show(Consultar $consultar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultar  $consultar
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultar $consultar)
    {
        dd('sadasd');
/*        $nerd = Visitas::find($id);
        return View::make('consultar.edit')
            ->with('nerd', $nerd);*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultar  $consultar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultar $consultar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultar  $consultar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultar $consultar)
    {
        //
    }
    public function postConsultar(Consultar $consultar)
    {
        //$nit = Visitas::where('nit', '=', Input::get('nit'))->get();
        $nit = Visitas::where('nit', '=', Input::get('nit'))->first();
        //dd($nit);
        if ($nit === null) {
            return Redirect::to('/consultar')->with('message', 'Usuario no tiene registrada ninguna visita');
        }else{
        return view('stores')->with('nit', $nit);
        }
    }
}
