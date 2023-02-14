<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OfertaController;

Route::get('/',[LoginController::class,'index'])->name('login.index');
Route::post('/',[LoginController::class,'store'])->name('login.store');

Route::get('/datos',[DataController::class,'index'])->name('data.index');
Route::post('/datos',[DataController::class,'store'])->name('data.store');

Route::get('/oferta',[OfertaController::class,'index'])->name('oferta.index');
Route::post('/oferta',[OfertaController::class,'store'])->name('oferta.store');

Route::post('/logout',[LogoutController::class,'store'])->name('logout');