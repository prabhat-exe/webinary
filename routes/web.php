<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AboutUs;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[homeController::class,'home']);
Route::post('/contact', [homeController::class, 'submit'])->name('contact.submit');
Route::get('/about',[AboutUs::class,'aboutus'])->name('about');
Route::get('/services',[ServicesController::class,'services'])->name('services');
Route::get('/portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');

