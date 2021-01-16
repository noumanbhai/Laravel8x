<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Email Verification in Auth
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


// Route::get('/', function () {
//     return view('frontend.index');
// });
// Froant End Page
Route::get('/','HomeController@index');
// Route::get('/sl','HomeController@slider'); //notwork



// Auth Middleware is use only Auth working
Route::group(['middleware' => ['auth']], function() {
// Slider controller
Route::resource('/slid','SliderController');
// cateory controller
Route::resource('/category','CategoryController');
// soft delete cateory
Route::get('softdelete/category/{id}','CategoryController@softdelete');
// permanent delete
Route::delete('category/delete/{id}','CategoryController@delete');
// restore restore
Route::get('category/restore/{id}','CategoryController@restore');
//brand controller
Route::resource('/brand','BrandController');
//Multi  Images
Route::resource('/multipics','MultipicsController');

});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

	// $users=User::all();
 //    return view('dashboard',compact('users'));
	return view('admin.main');
    
})->name('dashboard');
// Logout
Route::get('user/logout','MultipicsController@logout')->name('user.logout');


Route::get('/book', function () {
    return view('admin.main');
});