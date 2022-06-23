<?php

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
    return view('Article.User.home');
});

// Admin
    // Category
    Route::get('/category_table', [App\Http\Controllers\CategoryController::class, 'index']);
    Route::get('/add_category', [App\Http\Controllers\CategoryController::class, 'create']);
    Route::post('/store_category', [App\Http\Controllers\CategoryController::class, 'store']);
    Route::get('/edit_category/{id}', [App\Http\Controllers\CategoryController::class, 'edit']);
    Route::post('/update_category/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('storecategory');
    Route::get('/delete_category/{id}', [App\Http\Controllers\CategoryController::class, 'delete']);

    // Tag
    Route::get('/tag_table', [App\Http\Controllers\TagController::class, 'index']);
    Route::get('/create_tag', [App\Http\Controllers\TagController::class, 'create']);
    Route::post('/store_tag', [App\Http\Controllers\TagController::class, 'store']);
    Route::get('/edit_tag/{id}', [App\Http\Controllers\TagController::class, 'edit']);
    Route::post('/update_tag/{id}', [App\Http\Controllers\TagController::class, 'update'])->name('storetag');
    Route::get('/delete_tag/{id}', [App\Http\Controllers\TagController::class, 'delete']);

    // Article
    Route::get('/article_table', [App\Http\Controllers\ArticleController::class, 'index']);
    Route::get('/create_article', [App\Http\Controllers\ArticleController::class, 'create']);
    Route::post('/store_article', [App\Http\Controllers\ArticleController::class, 'store']);
    Route::get('/edit_article/{id}', [App\Http\Controllers\ArticleController::class, 'edit']);
    Route::post('/update_article/{id}', [App\Http\Controllers\ArticleController::class, 'update'])->name('storearticle');
    Route::get('/delete_article/{id}', [App\Http\Controllers\ArticleController::class, 'delete']);

    // SubContent
    Route::get('/subcontent_table', [App\Http\Controllers\SubContentController::class, 'index']);
    Route::get('/create_subcontent', [App\Http\Controllers\SubContentController::class, 'create']);
    Route::post('/store_subcontent', [App\Http\Controllers\SubContentController::class, 'store']);
    Route::get('/edit_subcontent/{id}', [App\Http\Controllers\SubContentController::class, 'edit']);
    Route::post('/update_subcontent/{id}', [App\Http\Controllers\SubContentController::class, 'update'])->name('storesubcontent');
    Route::get('/delete_subcontent/{id}', [App\Http\Controllers\SubContentController::class, 'delete']);

// User
    // Home
    Route::get('/', [App\Http\Controllers\UserInterfaceController::class, 'home']);
    
    // Article
    Route::get('/explore', [App\Http\Controllers\UserInterfaceController::class, 'explore']);
    Route::get('/explore/{category_id}', [App\Http\Controllers\UserInterfaceController::class, 'explorecategory']);
    Route::get('/explore_latest', [App\Http\Controllers\UserInterfaceController::class, 'latest']);
    Route::get('/explore_oldest', [App\Http\Controllers\UserInterfaceController::class, 'oldest']);
    Route::get('/explore_tag/{tag_id}', [App\Http\Controllers\UserInterfaceController::class, 'exploretag']);
    
    // Read Article or Show Article
    Route::get('/read_article/{id}', [App\Http\Controllers\UserInterfaceController::class, 'readarticle']);

    // Categories
    Route::get('/category', [App\Http\Controllers\UserInterfaceController::class, 'category']);

    // About
    Route::get('/about', [App\Http\Controllers\UserInterfaceController::class, 'about']);