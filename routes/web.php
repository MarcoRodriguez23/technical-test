<?php

use App\Http\Controllers\AdminController;
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
Route::put('/oferta',[OfertaController::class,'update'])->name('oferta.update');


Route::get('/oferta/decision-final/aceptar/{cliente}',[AdminController::class,'aceptar'])->name('admin.aceptar');
Route::get('/oferta/decision-final/rechazar/{cliente}',[AdminController::class,'rechazar'])->name('admin.rechazar');

Route::get('/oferta/decision/{cliente}',[AdminController::class,'show'])->name('admin.show');

Route::post('/logout',[LogoutController::class,'store'])->name('logout');