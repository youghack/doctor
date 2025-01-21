<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// user
Route::get('/',[HomeController::class,'index']);

// admin
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

// Admin Panel Routing
Route::get('/add_administrator_view',[AdminController::class,'addview']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/complain',[AdminController::class,'complain']);
Route::get('/viewcomplain/{id}',[AdminController::class,'showcomplain']);
Route::get('/done/{id}',[AdminController::class,'done']);
Route::get('/pending/{id}',[AdminController::class,'pending']);
Route::get('/showadministrator',[AdminController::class,'showadministrator']);
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('/update_administrator/{id}',[AdminController::class,'update_administrator']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);
Route::get('/emailview/{id}',[AdminController::class,'emailview']);
Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);
//User or victim
Route::post('/complainview',[HomeController::class,'complainview']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/viewdoctor',[HomeController::class,'viewdoctor']);
Route::get('/aboutus',[HomeController::class,'about_us']);



