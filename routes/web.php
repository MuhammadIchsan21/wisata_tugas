<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')
        ->name('home');
Route::get('/detail', 'DetailController@index')
        ->name('detail');
Route::get('/checkout', 'CheckoutController@index')
        ->name('checkout');
Route::get('/success', 'SuccessController@index')
        ->name('checkout-success');



Route::prefix('admin')
        ->namespace('admin')//file folder controller/admin
        ->middleware(['auth', 'admin'])//auth & admin ada di file kernel.php
        ->group(function () {
            Route::get('/', 'DashboardController@index')
            ->name('dashboard');

            Route::resource('travel-package', 'TravelPackageController');
            Route::resource('gallery', 'GalleryController');
            Route::resource('transaction', 'TransactionController');
        });

Auth::routes(['verify' => true]);
