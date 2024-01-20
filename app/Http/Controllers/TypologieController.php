<?php

namespace App\Http\Controllers;

use App\Models\Typologie;
use App\Http\Requests\StoreTypologieRequest;
use App\Http\Requests\UpdateTypologieRequest;

class TypologieController extends Controller
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
     * @param  \App\Http\Requests\StoreTypologieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypologieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typologie  $typologie
     * @return \Illuminate\Http\Response
     */
    public function show(Typologie $typologie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typologie  $typologie
     * @return \Illuminate\Http\Response
     */
    public function edit(Typologie $typologie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypologieRequest  $request
     * @param  \App\Models\Typologie  $typologie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypologieRequest $request, Typologie $typologie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typologie  $typologie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typologie $typologie)
    {
        //
    }
}
