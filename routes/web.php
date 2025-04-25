<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bookings;
use App\Http\Controllers\Stations;
use App\Http\Controllers\Services;
use App\Http\Controllers\Orders;
use App\Http\Controllers\Payments;


Route::controller(Stations::class)
    ->prefix('Stations')
    ->name('Stations.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('{id}', 'show')->name('show');
        });

Route::controller(Bookings::class)
    ->prefix('bookings')
    ->name('bookings.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('{id}', 'show')->name('show');
    });

Route::controller(Services::class)
    ->prefix('Services')
    ->name('Services.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('{id}', 'show')->name('show');
    });

Route::controller(Orders::class)
    ->prefix('Orders')
    ->name('Orders.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('{id}', 'show')->name('show');
    });

Route::controller(Payments::class)
    ->prefix('Payments')
    ->name('Payments.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('{id}', 'show')->name('show');
    });


//Route::get('/stations', [Stations::class, 'index']);
//Route::post('/stations', [Stations::class, 'store']);
//
//Route::get('/bookings', [Bookings::class, 'index']);
//Route::post('/bookings', [Bookings::class, 'store']);
//
//Route::get('/services', [Services::class, 'index']);
//Route::post('/services', [Services::class, 'store']);
//
//Route::get('/orders', [Orders::class, 'index']);
//Route::post('/orders', [Orders::class, 'store']);
//
//Route::get('/users', [Payments::class, 'index']);
//Route::post('/users', [Payments::class, 'store']);
