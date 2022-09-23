<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\AppointmentController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FeatureController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\Frontend\ErrorController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/contact',[ContactController::class,'contact']);
Route::get('/feature',[FeatureController::class,'feature']);
Route::get('/service',[ServiceController::class,'service']);
Route::get('/team',[TeamController::class,'team']);
Route::get('/testimonial',[TestimonialController::class,'testimonial']);
Route::get('/appointment',[AppointmentController::class,'appointment']);
Route::get('/error',[ErrorController::class,'error']);
