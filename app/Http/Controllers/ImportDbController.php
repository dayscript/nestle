<?php

namespace App\Http\Controllers;

use App\ImportDb;
use Illuminate\Http\Request;

class ImportDbController extends Controller
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
     * @param  \App\ImportDb  $importDb
     * @return \Illuminate\Http\Response
     */
    public function show(ImportDb $importDb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ImportDb  $importDb
     * @return \Illuminate\Http\Response
     */
    public function edit(ImportDb $importDb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ImportDb  $importDb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImportDb $importDb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImportDb  $importDb
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImportDb $importDb)
    {
        //
    }

    public function getImport()
    {
        return view('importdb.import');
    }

    public function parseImport(CsvImportRequest $request)
    {
        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));
        $csv_data = array_slice($data, 0, 2);
        return view('import_fields', compact('csv_data'));
    }
}
