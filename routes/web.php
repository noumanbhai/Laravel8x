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

Route::get('/', function () {
    return view('welcome');
});
    // cateory controller
Route::resource('/category','CategoryController');
// soft delete cateory
Route::get('softdelete/category/{id}','CategoryController@softdelete');
// permanent delete
Route::delete('category/delete/{id}','CategoryController@delete');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

	$users=User::all();
    return view('dashboard',compact('users'));
    
})->name('dashboard');
