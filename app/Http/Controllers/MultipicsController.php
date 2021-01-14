<?php

namespace App\Http\Controllers;

use App\Models\Multipics;
use Illuminate\Http\Request;
use Auth;

class MultipicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "multipics";
        $images=Multipics::latest()->paginate(3);
        return view('admin.multipic.index',compact('images'));
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
        $files = $request->file('images');
foreach ($files as $image) {
        // if ($image) {
           $imageName = rand(11111, 99999) . '.' . $image->  getClientOriginalExtension();
           $image->move(public_path('multipic'), $imageName);
    // return $imageName;

           Multipics::insert([
            'image'=>$imageName,
            // 'created_at'=>Carbon::now(),

        ]);
  


}
           return back()->with('success','Images created successfully!');
        
    // }
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
    public function logout()
    {
      // return "ok";
        Auth::logout();
        return redirect()->route('login')->with('success','User Logout' );

    }
}
