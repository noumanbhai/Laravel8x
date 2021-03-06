<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Auth;

class CategoryController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys=Category::latest()->paginate(5);
        // Trash Data
        $trashcat=Category::onlyTrashed()->latest()->paginate(5);
        return view('admin.category.index',compact('categorys','trashcat'));
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
        // return $request;
        $validatedData= $request->validate([
            'category_name' => 'required',
        ],
        [
         'category_name'=>'Please input your cateory',
     ]);
        // Category::create($request->all());

        Category::insert([
            'category_name'=>$request->category_name,
            'user_id'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Item created successfully!');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // return $category;

     return view('admin.category.edit',compact('category'));

 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $validatedData= $request->validate([
            'category_name' => 'required',
        ],
        [
         'category_name'=>'Please input your cateory',
     ]);

        $fetchdata=Category::find($request->id);
        $fetchdata->category_name=$request->category_name;
        $fetchdata->save();

        return redirect()->route('category.index')
        ->with('success','Item update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Category $category,$id)
    // {
    //        return $id;
    //        return $category;
    //     // $category->delete();
    //     // return back()->with('danger','Item delete successfully!');

    // }

    public function delete(Request $request,$id)
    {
        // return "pakistan".$id;
        $delete=Category::onlyTrashed()->find($id)->forceDelete();
       return back()->with('danger','Item Permanent successfully!');

    }
    public function softdelete($id)
     {
        // return $id;
        $softdelete=Category::find($id);
        $softdelete->delete();
        return back()->with('danger','Item Soft delete successfully!');

     }
     public function restore($id)
     {
         // return $id;
        Category::withTrashed()->find($id)->restore();
        return back()->with('success','Item Restore is  successfully!');


     }
}
