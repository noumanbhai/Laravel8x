<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
// use App\File;
use Illuminate\Support\Facades\Storage;
use File;



class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $brands=Brand::latest()->paginate(2);
        return view('admin.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
               // return $request;
        $validatedData= $request->validate([
            'brand_name' => 'required',
            'brand_image' => 'required',
        ],
        [
         'brand_name'=>'Please input your image',
         'brand_image'=>'Please upload your image',

     ]);
        $brand_name=$request->brand_name;
        $image=$request->file('brand_image');
        if ($image) {
     $imageName = rand(11111, 99999) . '.' . $image->  getClientOriginalExtension();
    $image->move(public_path('images'), $imageName);
    // return $imageName;

    Brand::insert([
        'brand_name'=>$brand_name,
        'brand_image'=>$imageName,
        'created_at'=>Carbon::now(),

    ]);
    return back()->with('success','Brand created successfully!');



        } 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {

    // return $brand;
        $image=$brand->brand_image;
        $path_img=('images/'.$image);
        $nn=File::delete(public_path($path_img));
        $brand->delete();
        return back()->with('danger','Brand delete is successfully!');

    }
}
