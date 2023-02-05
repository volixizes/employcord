<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Announcement;

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

Route::post('announcemets', [AnnouncementController::class, 'store'])->name('announcements.store');
