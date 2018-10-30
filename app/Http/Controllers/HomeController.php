<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;
use App\Store;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('home');
    }

    public function postHome(Home $home)
    {
        $nit = Store::where('nit', '=', Input::get('nit'))->first();
        $visita = Store::where('n_visita', '=', Input::get('visita'))->first();
        if ($nit === null || $visita === null ) {
            return Redirect::to('/home')->with('message', 'Usuario no registrado en la base de datos');
        }else{
            Session::put('nit-id', $nit->id);
            return view('visitas')->with('nit', $nit);
        //return view('form');
        }
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
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
