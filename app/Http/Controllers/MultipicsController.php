<?php

namespace App\Http\Controllers;

use App\Models\Multipics;
use Illuminate\Http\Request;

class MultipicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "multipics";
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
     * @param  \App\Models\Multipics  $multipics
     * @return \Illuminate\Http\Response
     */
    public function show(Multipics $multipics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Multipics  $multipics
     * @return \Illuminate\Http\Response
     */
    public function edit(Multipics $multipics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Multipics  $multipics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Multipics $multipics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Multipics  $multipics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Multipics $multipics)
    {
        //
    }
}
