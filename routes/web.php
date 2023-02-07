<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
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

// Announcement routes
Route::post('/createannouncement', [AnnouncementController::class,'create'])->name('createannouncement');

Route::post('/createemployee', [EmployeeController::class,'create'])->name('createemployee');
