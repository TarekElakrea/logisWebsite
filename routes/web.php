<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\portfolioDetailsController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\teamsController;

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

/*Route::get('/', function () {
    return view('wepsite-pages.home');
});*/

 Route::get('/',[homeController::class,'index'])->name('home.view');
 Route::get('/about',[aboutController::class,'index'])->name('about.view');
 Route::get('/service',[servicesController::class,'index'])->name('service.view');
 Route::get('/portfolio',[portfolioController::class,'index'])->name('portfolio.view');
 Route::get('/portfolio/{id}',[portfolioController::class,'read'])->name('portfolioDetails.view');
 Route::get('/teams',[teamsController::class,'index'])->name('teams.view');
 Route::get('/contact',[contactController::class,'index'])->name('contact.view');



