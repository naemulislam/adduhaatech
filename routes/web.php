<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GeneralSettingController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SoftwareController;
use App\Http\Controllers\Common\ConsultancyController;
use App\Http\Controllers\Common\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\ServiceController;
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

Route::controller(FrontendController::class)->as('front.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about-us', 'aboutUs')->name('aboutUs');
    Route::get('/consultancy', 'consultancy')->name('consultancy');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'contactStore')->name('contact.store');
    Route::get('/software/{slug}', 'showSoftware')->name('show.software');
    Route::get('/static-website', 'staticWebsite')->name('static_website');
    Route::get('/dynamic-website', 'dynamicWebsite')->name('dynamic_website');
    Route::get('/ecommerce-website', 'ecommerceWebsite')->name('ecommerce_website');
    Route::get('/news-portal', 'newsPortal')->name('news_portal');
    Route::get('/test', 'json');
});
Route::post('/consultancy/store', [ConsultancyController::class, 'consultancyStore'])->name('front.consultancy.store');
Route::post('/contact/store', [ContactController::class, 'contactStore'])->name('front.contact.store');

Route::controller(LoginController::class)->group(function () {
    Route::get('/admin/auth/login', 'adminLogin')->name('adminLogin');
    Route::post('/admin/auth/store', 'adminStore')->name('adminStore');
});
Route::prefix('admin/dashboard/')->middleware(['auth', 'verified'])->as('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [DashboardController::class, 'adminLogout'])->name('logout');
    //profile route
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'index')->name('index');
        Route::post('/admin/store', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::get('/admin/edit/{user}', 'edit')->name('edit');
        Route::put('/admin/update/{user}', 'update')->name('update');
        Route::get('/admin/destroy/{user}', 'destroy')->name('destroy');
        //Admin update profile route
        Route::get('/profile', 'profile')->name('profile');
        Route::post('/profile/update/{user}', 'profileUpdate')->name('profile.update');
        Route::get('/edit/password/', 'cPassword')->name('epassword');
        Route::post('/update/password/{user}', 'upassword')->name('upassword');
    });

    //Slider Route
    Route::controller(SliderController::class)->group(function () {
        Route::get('/slider', 'index')->name('slider.index');
        Route::post('/slider/store', 'store')->name('slider.store');
        Route::put('/slider/update/{slider}', 'update')->name('slider.update');
        Route::get('/slider/destroy/{slider}', 'destroy')->name('slider.destroy');
        Route::post('/slider/status/{slider}', 'status')->name('slider.status');
    });
    //Software Route
    Route::controller(SoftwareController::class)->group(function () {
        Route::get('/softwares', 'index')->name('software.index');
        Route::get('/software/create', 'create')->name('software.create');
        Route::post('/software/store', 'store')->name('software.store');
        Route::get('/software/show/{software}', 'show')->name('software.show');
        Route::get('/software/edit/{software}', 'edit')->name('software.edit');
        Route::put('/software/update/{software}', 'update')->name('software.update');
        Route::get('/software/destroy/{software}', 'destroy')->name('software.destroy');
        Route::post('/software/status', 'status_update')->name('software.status');
    });
    //Service Route
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/services', 'index')->name('service.index');
        Route::get('/service/create', 'create')->name('service.create');
        Route::post('/service/store', 'store')->name('service.store');
        Route::get('/service/show/{service}', 'show')->name('service.show');
        Route::get('/service/edit/{service}', 'edit')->name('service.edit');
        Route::put('/service/update/{service}', 'update')->name('service.update');
        Route::get('/service/destroy/{service}', 'destroy')->name('service.destroy');
        Route::post('/service/status', 'status_update')->name('service.status');
    });

    //General Setting
    Route::controller(GeneralSettingController::class)->group(function () {
        Route::get('/general/setting', 'index')->name('settings.index');
        Route::post('/general/setting/update/{generalSetting?}', 'update')->name('settings.update');
    });
    //Consultancy route
    Route::controller(ConsultancyController::class)->group(function () {
        Route::get('/consultancies/index', 'index')->name('consultancies.index');
        Route::get('/consultancies/show/{consultancy}', 'show')->name('consultancies.show');
        Route::get('/consultancies/destroy/{consultancy}', 'destroy')->name('consultancies.destroy');
    });
    //Contact route
    Route::controller(ContactController::class)->prefix('/contact-message')->group(function () {
        Route::post('/store', 'store')->name('message.store');
        Route::get('/index', 'index')->name('message.index');
        Route::get('/show/{contact}', 'show')->name('message.show');
        Route::get('/destroy/{contact}', 'destroy')->name('message.destroy');
    });
});

require __DIR__ . '/auth.php';
