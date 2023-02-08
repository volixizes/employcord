<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BirthdayController;
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

Auth::routes();

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/employees', function(){
    return view('employees');
})->name('employees');

<<<<<<< Updated upstream
Route::get('/trackrecords', function(){
    return view('trackrecords');
})->name('trackrecords');

Route::post('/createannouncement', [AnnouncementController::class, 'create'])->name('createannouncement');
=======
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/employee', [BirthdayController::class,'index'])->name('birthday');

// Announcement routes
Route::post('/create-announcement', [AnnouncementController::class,'create'])->name('create-announcement');

Route::post('/createemployee', [EmployeeController::class,'create'])->name('createemployee');

Route::controller(DocumentController::class)->group(function() {
    Route::get('/track-records', 'display')->name('track-records');
    Route::post('/upload-image', 'store')->name('upload-image');
});
>>>>>>> Stashed changes
