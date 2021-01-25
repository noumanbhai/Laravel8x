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
         return view('admin.about.index',compact('aboutes'));    
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');  

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
            'short' => 'required',
            'long' => 'required',
            // 'pak' => 'required|min:3|max:1000',
            // 'description' => 'required'
        ],
        [
           // 'descriptionone'=>'Please input your Short description',
           'title'=>'Please input your title',
           'short'=>'Please input your title',
           'long'=>'Please input your title',
           // 'pak'=>'Please input your Long description',
           // 'description'=>'Please input your Long description',

       ]);
                // Aboute::create($request->all());
            Aboute::insert([
            'title'=>$request->title,
            'short_des'=>$request->short_des,
            'long_des'=>$request->long_des,
        ]);
       return redirect('/about')->with('success','About created successfully!');



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
