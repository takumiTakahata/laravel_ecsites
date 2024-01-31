<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcController;
use Illuminate\Support\Facades\Auth;

Route::get('/',[EcController::class,'index']);
Route::get('adminindex', [EcController::class, 'adminIndex'])->name('admin.index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
