<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInmersionRequest;
use App\Http\Requests\UpdateInmersionRequest;
use App\Models\Inmersion;

class InmersionController extends Controller
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
     * @param  \App\Http\Requests\StoreInmersionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInmersionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inmersion  $inmersion
     * @return \Illuminate\Http\Response
     */
    public function show(Inmersion $inmersion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inmersion  $inmersion
     * @return \Illuminate\Http\Response
     */
    public function edit(Inmersion $inmersion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInmersionRequest  $request
     * @param  \App\Models\Inmersion  $inmersion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInmersionRequest $request, Inmersion $inmersion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inmersion  $inmersion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inmersion $inmersion)
    {
        //
    }
}
