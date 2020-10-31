<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio',[LandingController::class,'index'])->name('Landing.index');
Route::get('/acercade',[LandingController::class,'acercade'])->name('Landing.acercade');
Route::get('/servicios',[LandingController::class,'servicios'])->name('Landing.servicios');
Route::get('/contactos',[LandingController::class,'contacto'])->name('Landing.contacto');
