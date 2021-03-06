<?php

use App\Events\MessageCreated;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MenuAdd;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use App\Models\User;
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

Route::get('/data', [FrontEndController::class,'Data']);
Route::get('/artikel',[FrontEndController::class,'all']);
Route::get('/artikel/{id}',[FrontEndController::class,'HeadArtikel']);
Route::get('/artikel/{id}/detail',[FrontEndController::class,'ShowArtikel']);
Route::get('x', [FrontEndController::class,'dataS']);
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
   
    Route::get('/dashboard', function () {
        $users = User::paginate(5);
        $article = Article::paginate(5);
        $ads = Article::paginate(5);
        return view('dashboard', ['dbuser' => $users,'dbartikel'=>$article,'dbAds'=>$ads]);
    })->name('dashboard');

    Route::get('/user',[UserController::class,'index'])->name('user');
    
    Route::get('/article',[ArticleController::class,'index'])->name('article');

    Route::get('/iklan',function(){
        return view('admin.iklan-page');
    })->name('iklan');
    

    /**
     * management user
     */

    //Add User View 
    Route::get('/add-user',[UserController::class,'create']);
    //Edit User View 
    Route::get('/edit-user/{id}',[UserController::class,'show'])->name('edit-user');
    //Add User  
    Route::post('/add-user',[UserController::class,'store']);
    //Update User  
    Route::post('/update-user/{id}',[UserController::class,'updateProfile']);
    //Update User  Personal Indformation
    Route::post('/update/personal/information/{id}',[UserController::class,"personalInformation"]);
    //Delete user 
    Route::get('/delete-user/{id}',[UserController::class,'destroy']);
    
    
    /**
     * Management Artikel
     */

    //Add Artikel Page
    Route::get('/add-artikel',[ArticleController::class,'create']);
    //Add User 
    Route::post('/add-artikel',[ArticleController::class,'store']);
    //Edit View Article
    Route::get('/edit-artikel/{id}',[ArticleController::class,'show']);
    //Update View Article 
    Route::post('/update-artikel/{id}',[ArticleController::class,'update']);
    //Delete Article 
    Route::get('/delete-artikel/{id}',[ArticleController::class,'delete']);

    //Management Trash Artikel 
    Route::get('/delete-artikel-trash/{id}',[ArticleController::class,'destroy'])->name('hapus/{id}');
    Route::get('/restote-artikel/{id}',[ArticleController::class,'restore']);
    Route::get('/trash-artikel',[ArticleController      ::class,'trash'])->name('trash');

    /**
     * Management Category
     */
    Route::post('/add/category',[CategoryController::class,'store']);
    Route::post('/add/subcategory',[SubCategoryController::class,'store']);

    /**
     * Management Role
     */
    Route::get('/role',[RoleebController::class,'index']);
});
require_once __DIR__ . '/jetstream.php';            