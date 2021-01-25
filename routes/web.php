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
// Frontend Contacts
Route::get('/contacts','HomeController@contact');
Route::get('/profile','HomeController@profile');


Route::resource('/form','FormController');

// Auth Middleware is use only Auth working
Route::group(['middleware' => ['auth']], function() {
// Frontend Contacts
// Contact controller
Route::resource('/contact','ContactController');
// Slider controller
Route::resource('/slid','SliderController');
// About controller
Route::resource('/about','AbouteController');
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

// Route('/profiles',function()
// {
// 	return view('Profile.updateProfile');
// });


// custom profile setub
Route::view('/profile/update','profile.updateProfile')->name('profile.update');
Route::view('/profile/password','profile.passwordProfile')->name('profile.password');

// TwoTwo Factor Authentication
Route::view('/profile/factorauth','profile.factorauth')->name('profile.factorauth');
// Disable Auth
Route::view('/profile/disableauh','profile.disableauh
')->name('profile.disableauh');
// Browser Session
Route::view('/profile/browsersession','profile.browser-session')->name('profile.browser-session');