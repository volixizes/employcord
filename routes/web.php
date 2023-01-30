<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('auth.login');
});

<<<<<<< HEAD
Route::get('/MyAccount', function () {
    return view('myaccounts');
});
Route::get('/Dashboard', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
=======
Auth::routes();

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/employees', function(){
    return view('employees');
})->name('employees');

Route::get('/trackrecords', function(){
    return view('trackrecords');
})->name('trackrecords');
>>>>>>> 9105594d1bba8a14fd4b8a9ed456925eb5b658a4
