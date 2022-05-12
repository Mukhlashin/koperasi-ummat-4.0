<?php

namespace App\Http\Controllers;

use App\Models\KopBarang;
use Illuminate\Http\Request;

class KopBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = KopBarang::all();
        return view('product', compact('product'));
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
     * @param  \App\Models\KopBarang  $kopBarang
     * @return \Illuminate\Http\Response
     */
    public function show(KopBarang $kopBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KopBarang  $kopBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(KopBarang $kopBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KopBarang  $kopBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KopBarang $kopBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KopBarang  $kopBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(KopBarang $kopBarang)
    {
        //
    }
}
