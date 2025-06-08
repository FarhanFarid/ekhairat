<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'authentication'], function () {
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('auth.logout');
    Route::group(['prefix' => 'login'], function () {
        Route::get('/', [AuthenticationController::class, 'loginIndex'])->name('auth.login.index');
        Route::post('/save', [AuthenticationController::class, 'login'])->name('auth.login');
    });
    Route::group(['prefix' => 'register'], function () {
        Route::get('/', [AuthenticationController::class, 'registerIndex'])->name('auth.reg.index');
        Route::post('/save', [AuthenticationController::class, 'register'])->name('auth.reg.save');
    });
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', ], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});
