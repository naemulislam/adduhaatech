<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GeneralSettingController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Common\ConsultancyController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\LoginController;
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

Route::controller(FrontendController::class)->as('front.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/consultancy', 'consultancy')->name('consultancy');
    Route::post('/consultancy/store', 'consultancyStore')->name('consultancy.store');
    Route::get('/test', 'json');
});
Route::post('/consultancy/store', [ConsultancyController::class,'consultancyStore'])->name('front.consultancy.store');

Route::controller(LoginController::class)->group(function(){
    Route::get('/admin/auth/login', 'adminLogin')->name('adminLogin');
    Route::post('/admin/auth/store', 'adminStore')->name('adminStore');
});
Route::prefix('admin/dashboard/')->middleware(['auth', 'verified'])->as('admin.')->group(function(){
    Route::get('/', [DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/logout', [DashboardController::class,'adminLogout'])->name('logout');
    //profile route
    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile','profile')->name('profile');
        Route::put('/profile/update/{user}','profileUpdate')->name('profile.update');
    });

     //Slider Route
     Route::controller(SliderController::class)->group(function(){
        Route::get('/slider','index')->name('slider.index');
        Route::get('/slider/create','create')->name('slider.create');
        Route::post('/slider/store','store')->name('slider.store');
        Route::get('/slider/edit/{slider}','edit')->name('slider.edit');
        Route::put('/slider/update/{slider}','update')->name('slider.update');
        Route::get('/slider/destroy/{slider}','destroy')->name('slider.destroy');
        Route::post('/slider/status/{slider}','status')->name('slider.status');
    });

    //General Setting
    Route::controller(GeneralSettingController::class)->group(function(){
        Route::get('/general/setting','index')->name('settings.index');
        Route::post('/general/setting/update/{generalSetting?}','update')->name('settings.update');
    });
    //Consultancy route
    Route::controller(ConsultancyController::class)->group(function(){
        Route::get('/consultancies/index','index')->name('consultancies.index');
    });
});

require __DIR__.'/auth.php';
