<?php

namespace App\Http\Controllers\Admin;

use App\Models\Typology;
use App\Http\Requests\StoreTypologyRequest;
use App\Http\Requests\UpdateTypologyRequest;

class TypologyController extends Controller
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
     * @param  \App\Http\Requests\StoreTypologyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypologyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typology  $typology
     * @return \Illuminate\Http\Response
     */
    public function show(Typology $typology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typology  $typology
     * @return \Illuminate\Http\Response
     */
    public function edit(Typology $typology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypologyRequest  $request
     * @param  \App\Models\Typology  $typology
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypologyRequest $request, Typology $typology)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typology  $typology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typology $typology)
    {
        //
    }
}
