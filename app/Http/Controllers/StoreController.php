<?php

namespace App\Http\Controllers;

use App\Exports\StoresExport;
use App\Imports\StoresImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Store;
use Storage;
use Illuminate\Http\Request;

class StoreController extends Controller
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
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }
    public function export() 
    { 
        return Excel::download(new StoresExport, 'users.xlsx');
    }
    
    public function import() 
    {
        return view('importdb.import');
        return Excel::import(new StoresImport, 'users.xlsx');
    }

    public function insert(Request $request) 
    {
        $request->validate([
            'csv_file' => 'required',
        ]);
        Excel::import(new StoresImport, request()->file('csv_file'));
        return  back()
        ->with('success','Carga exitosa.');
    }
}
