<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AboutUs;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\contactController;

use App\Http\Controllers\adminControllers\adminLoginController;
use App\Http\Controllers\adminControllers\adminDashboardController;
use App\Http\Controllers\adminControllers\adminHomeController;
use App\Http\Controllers\adminControllers\adminServicesController;

use Illuminate\Support\Facades\Log;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [homeController::class, 'home'])->name('home');
Route::post('/contact', [homeController::class, 'submit'])->name('contact.submit');
Route::get('/about', [AboutUs::class, 'aboutus'])->name('about');
Route::get('/services', [ServicesController::class, 'services'])->name('services');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/appsportfolio', [PortfolioController::class, 'appsportfolio'])->name('appsportfolio');
Route::get('/contact', [contactController::class, 'contact'])->name('contact');



Route::get('/adminLogin', [adminLoginController::class, 'adminLogin'])->name('adminLogin');

Route::post('/adminLogin', [adminLoginController::class, 'checkCredential']);

// Route::get('/adminDashboard', [adminDashboardController::class, 'adminDashboard'])
//     ->name('adminDashboard');
Route::get('/adminLogout', [adminLoginController::class, 'adminLogout'])->name('adminLogout');

Route::group(['middleware' => ['checkLogin']], function () {
    Route::get('/adminDashboard', [adminDashboardController::class, 'adminDashboard'])
        ->name('adminDashboard');
    Route::get('/adminHome', [adminHomeController::class, 'adminHome'])
        ->name('adminHome');
    // routes/web.php

    Route::put('/admin/section/{id}/update', [adminHomeController::class, 'update'])->name('admin.section.update');
    Route::put('/admin/projects/updateprojectview', [adminHomeController::class, 'updateHomeview'])->name('admin.projects.updateHomeview');
    Route::put('/admin/reviews/updateprojectview', [adminHomeController::class, 'updatereviewHomeview'])->name('admin.reviews.updateHomeview');

    Route::get('/admin/Services', [adminServicesController::class, 'adminServices'])->name('adminServices');
    Route::resource('admin/services', adminServicesController::class)->except(['show']);
      Route::put('/admin/services/{id}', [adminServicesController::class, 'update'])->name('admin.services.update');
     Route::post('/admin/servicesdelete/{id}', [adminServicesController::class, 'delete'])->name('admin.services.delete');


});



Route::get('/refresh-captcha', function () {
    return response()->json(['captcha' => captcha_img()]);
});


Route::get('/dns-check', function () {
    $output = shell_exec('ping play.google.com');
    Log::info("DNS Check Output:\n" . $output);
    return response("<pre>$output</pre>");
});
