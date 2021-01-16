<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "ok";

        $sliders=Slider::latest()->paginate(5);
         return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ],
        [
           'title'=>'Please input your title',
           'description'=>'Please input your description',
           'photo'=>'Please upload your image',

       ]);
        $title=$request->title;
        $description=$request->description;
        $image=$request->file('photo');
        if ($image) {
           $imageName = rand(11111, 99999) . '.' . $image->  getClientOriginalExtension();
           $image->move(public_path('slider'), $imageName);

           Slider::insert([
            'title'=>$title,
            'description'=>$description,
            'image'=>$imageName,

        ]);
           return redirect('/slid')->with('success','Slider created successfully!');

    }
        // return "ok";
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
