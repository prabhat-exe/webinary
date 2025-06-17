<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AboutUs;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\contactController;

use Illuminate\Support\Facades\Log;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[homeController::class,'home'])->name('home');
Route::post('/contact', [homeController::class, 'submit'])->name('contact.submit');
Route::get('/about',[AboutUs::class,'aboutus'])->name('about');
Route::get('/services',[ServicesController::class,'services'])->name('services');
Route::get('/portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');
Route::get('/appsportfolio',[PortfolioController::class,'appsportfolio'])->name('appsportfolio');
Route::get('/contact',[contactController::class,'contact'])->name('contact');




Route::get('/dns-check', function () {
    $output = shell_exec('ping play.google.com');
    Log::info("DNS Check Output:\n" . $output);
    return response("<pre>$output</pre>");
});