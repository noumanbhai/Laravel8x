<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Slider;


class HomeController extends Controller
{
	public function slider()
	{ 
		$sliders=Slider::all();
		return view('frontend.layout.slider',compact('sliders'));
	}
	public function index()
	{ 
		$brands=Brand::all();
		return view('frontend.index',compact('brands'));
	}
}
