<?php

use App\Http\Controllers\controllerblog;
use App\Http\Controllers\controllerform;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[controllerblog::class,'index'])->name('index');
Route::get('about',[controllerblog::class,'about'])->name('about');
Route::get('contact',[controllerblog::class,'contact'])->name('contact');
Route::get('post',[controllerblog::class,'post'])->name('post');
Route::get('form1',[controllerform::class,'form1'])->name('form1');
Route::post('form1_data',[controllerform::class,'form1_data'])->name('form1_data');
