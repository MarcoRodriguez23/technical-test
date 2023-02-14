<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/',[LoginController::class,'index'])->name('login.index');
Route::post('/',[LoginController::class,'store'])->name('login.store');

Route::get('/datos',[DataController::class,'index'])->name('data.index');

Route::get('/oferta', function () {
  return view('oferta');
});

Route::post('/logout',[LogoutController::class,'store'])->name('logout');