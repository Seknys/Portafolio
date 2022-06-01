<?php

//Flinch wince
use App\Http\Controllers\PortafolioController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::view('portafolio','portafolio.index')->name('portafolio');
Route::get('portafolio',[PortafolioController::class,'index'])->name('portafolio');
Route::get('portafolio/create',[PortafolioController::class,'create'])->name('create');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
