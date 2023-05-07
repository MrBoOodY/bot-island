<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
Route::get('/',[HomeController::class,"home"]);
});
Route::group(['middleware' =>['AdminMiddeware','preventBackHistory']],function(){
 Route::get('/redirects',[HomeController::class,"index"])->name('dashboard');
 Route::resource('categories', 'CategoryController');
 Route::get('des/category/{id}',[CategoryController::class,'destroy'])->name('categories.destroy');
 Route::resource('banners', 'BannerController');
 Route::get('des/banner/{id}',[BannerController::class,'destroy'])->name('banners.destroy');
 Route::resource('contacts', 'ContactController');
 Route::get('/contact/des/{id}',[ContactController::class,'destroy'])->name('contacts.destroy');
 Route::resource('services', 'ServiceController');
 Route::get('/service/des/{id}',[ServiceController::class,'destroy'])->name('services.destroy');
 Route::resource('person', 'PersonController');
 Route::get('/person/des/{id}',[PersonController::class,'destroy'])->name('person.destroy');
 Route::post('/Update/Profile',[HomeController::class,"Profile"])->name('updateprofile');
});

