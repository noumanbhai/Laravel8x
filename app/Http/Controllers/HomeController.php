<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\Aboute;


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
		$aboutes=Aboute::get();
		return view('frontend.index',compact('brands','aboutes'));
	}
}
