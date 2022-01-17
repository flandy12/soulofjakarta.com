<?php

use App\Http\Controllers\RoleController;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/user',function(){
        return view('admin.user-page');
    })->name('user');
    Route::get('/artikel',function(){
        return view('admin.artikel-page');
    })->name('artikel');
    Route::get('/iklan',function(){
        return view('admin.iklan-page');
    })->name('iklan');

    //role action
    Route::get('/role',[RoleController::class,'index']);
});