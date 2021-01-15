<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Email Verification in Auth
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/', function () {
    return view('frontend.index');
});

// Auth Middleware is use only Auth working
Route::group(['middleware' => ['auth']], function() {


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