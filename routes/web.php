<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

    Route::get('/user',[UserController::class,'index'])->name('user');
    
    Route::get('/artikel',[ArtikelController::class,'index'])->name('artikel');
    Route::get('/iklan',function(){
        return view('admin.iklan-page');
    })->name('iklan');

    //add view 
    Route::get('/add-user',[UserController::class,'create']);
    //edit user 
    Route::get('/edit-user/{id}',[UserController::class,'show'])->name('edit-user');
    //add user 
    Route::post('/add-user',[UserController::class,'store']);
    //role action
    Route::get('/role',[RoleController::class,'index']);
});