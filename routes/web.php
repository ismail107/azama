<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DASHBOARDController;

use App\Http\Controllers\adminController;

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
    return  view('welcome');

    
});

Route::get('/DASHBOARD',[DASHBOARDController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/DASHBOARD', function () {
        
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
            
             return view('dashboard');
            }
            else if(Auth::user()->usertype=='1')
            {
             
             return view('admin');
            }
         }
        

    })->name('dashboard');
});



Route::get('/add_doctor_view',[adminController::class,'addview']);

Route::post('/upload_doctor',[adminController::class,'upload']);

Route::post('/appointment',[DASHBOARDController::class,'appointment']);



Route::get('/myappointment',[DASHBOARDController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[DASHBOARDController::class,'cancel_appoint']);




Route::get('showappointment',[adminController::class,'showappointment']);

Route::get('/approved/{id}',[adminController::class,'approved']);

Route::get('/canceled/{id}',[adminController::class,'canceled']);

Route::get('showdoctor',[adminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[adminController::class,'deletedoctor']);



Route::get('/updatedoctor/{id}',[adminController::class,'updatedoctor']);


Route::post('/editdoctor/{id}',[adminController::class,'editdoctor']);

Route::get('/emailview/{id}',[adminController::class,'emailview']);

Route::post('/sendemail/{id}',[adminController::class,'sendemail']);


