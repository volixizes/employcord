<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BirthdayController;
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
    })->middleware('auth')
      ->name('employees');

Route::get('/trackrecords', function(){
    return view('trackrecords');
})->name('trackrecords');

Route::get('/addemployee', function(){
    return view('addemployee');
})->name('addemployee');

Route::post('/createannouncement', [AnnouncementController::class, 'create'])->name('createannouncement');

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/home', [HomeController::class,'headcount'])->name('home');


// Announcement routes
Route::post('/create-announcement', [AnnouncementController::class,'create'])->name('create-announcement');

//Employee routes
Route::post('/addemployee', [EmployeeController::class,'create'])->name('addemployee');
Route::get('/editemployee/{id}', [EmployeeController::class,'edit'])->name('edit');

Route::post('/update', [EmployeeController::class,'update'])->name('update');

Route::controller(DocumentController::class)->group(function() {
    Route::get('/track-records', 'display')->name('track-records');
    Route::post('/upload-image', 'store')->name('upload-image');
});

// Route::post('/confirmemployee', function(){ 
//     return view('confirmemployee' );
// })->name('storeemployee');

Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/birthdays', [EmployeeController::class,'birthday'])->name('birthdays');
// Dashboard/Home routes
Route::get('/home', [HomeController::class,'index'
    ])->name('home');


// Announcement routes
Route::post('/create-announcement', [AnnouncementController::class,'create'
    ])->name('create-announcement');


// Employee registration routes
Route::post('/createemployee', [EmployeeController::class,'create'
    ])->name('createemployee');
    

// Route::get('/confirmemployee', [EmployeeController::class,'confirm'
//     ])->name('storeemployee');



Route::get('/employees', [EmployeeController::class,'index'
    ])->name('employees');
    
// Document routes
Route::controller(DocumentController::class)->group(function() {
    Route::get('/track-records', 'display')->name('track-records');
    Route::post('/upload-image', 'store')->name('upload-image');
    });

// Route::controller(DocumentController::class)->group(function() {
//     Route::get('/track-records', [
//         'middleware' => 'auth', 'uses' => 'display'
//         ])->name('track-records');
//     Route::post('/upload-image', [
//         'middleware' => 'auth', 'uses' => 'store'
//         ])->name('upload-image');
// });

