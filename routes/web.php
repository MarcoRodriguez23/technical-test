<?php

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

use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('login');
// });
// Route::get('/datos', function () {
//   return view('datos')->name('datos.index');
// });
Route::get('/oferta', function () {
  return view('oferta');
});

Route::get('/',[LoginController::class,'index'])->name('login.index');
Route::post('/',[LoginController::class,'store'])->name('login.store');

Route::get('/datos',[DataController::class,'index'])->name('data.index');
