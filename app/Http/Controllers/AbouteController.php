<?php

namespace App\Http\Controllers;

use App\Models\Aboute;
use Illuminate\Http\Request;

class AbouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $aboutes=Aboute::latest()->paginate(5);
         return view('admin.about.index',compact('aboutes'));    }

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
     * @param  \App\Models\Aboute  $aboute
     * @return \Illuminate\Http\Response
     */
    public function show(Aboute $aboute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboute  $aboute
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboute $aboute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboute  $aboute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboute $aboute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboute  $aboute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboute $aboute)
    {
        //
    }
}
