<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MenuAdd;
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

Route::get('/', [FrontEndController::class,'index']);
Route::get('/artikel',[FrontEndController::class,'all']);
Route::get('/artikel/{id}',[FrontEndController::class,'HeadArtikel']);
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
   
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/user',[UserController::class,'index'])->name('user');
    
    Route::get('/artikel',[ArtikelController::class,'index'])->name('artikel');


    Route::get('/iklan',function(){
        return view('admin.iklan-page');
    })->name('iklan');


    /**
     * management user
     */

    //Add view 
    Route::get('/add-user',[UserController::class,'create']);
    //Edit user 
    Route::get('/edit-user/{id}',[UserController::class,'show'])->name('edit-user');
    //Add user 
    Route::post('/add-user',[UserController::class,'store']);
    //Edit user
    Route::post('/update-user/{id}',[UserController::class,'updateProfile']);
    Route::post('/update/personal/information/{id}',[UserController::class,"personalInformation"]);
    //Delete user 
    Route::get('/delete-user/{id}',[UserController::class,'destroy']);
    
    
    /**
     * management artikel
     */

    //Add Artikel 
    Route::get('/add-artikel',[ArtikelController::class,'create']);
    //Add user 
    Route::post('/add-artikel',[ArtikelController::class,'store']);
    //edit view artikel
    Route::get('/edit-artikel/{id}',[ArtikelController::class,'show']);
    //Add user 
    Route::post('/update-artikel/{id}',[ArtikelController::class,'update']);
    //role action
    Route::get('/delete-artikel/{id}',[ArtikelController::class,'delete']);

    Route::get('/delete-artikel-trash/{id}',[ArtikelController::class,'destroy']);

    Route::get('/restote-artikel/{id}',[ArtikelController::class,'restore']);
    Route::get('/trash-artikel',[ArtikelController::class,'trash'])->name('trash');


    Route::get('/role',[RoleController::class,'index']);
});
require_once __DIR__ . '/jetstream.php';