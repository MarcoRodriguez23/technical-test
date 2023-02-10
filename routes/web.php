<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;

Route::get('/',[LoginController::class,'index'])->name('login.index');
Route::post('/',[LoginController::class,'store'])->name('login.store');

Route::get('/datos',[DataController::class,'index'])->name('data.index');

Route::get('/oferta', function () {
  return view('oferta');
});