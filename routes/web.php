<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DocumentController;
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

Route::get('/employees', function(){
    return view('employees');
})->name('employees');

Route::get('/home', [HomeController::class,'index'])->name('home');

// Announcement routes
Route::post('/create-announcement', [AnnouncementController::class,'create'])->name('create-announcement');

Route::post('/createemployee', [EmployeeController::class,'create'])->name('createemployee');

Route::controller(DocumentController::class)->group(function() {
    Route::get('/track-records', 'display')->name('track-records');
    Route::post('/upload-image', 'store')->name('upload-image');
});