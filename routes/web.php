<?php

use App\Http\Controllers\Auth\CategoryController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\CommentController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes([
    
]);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
//Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

Route::prefix('auth')->group(function () {
    // POST Crud
    Route::resource('posts', PostController::class);

    // Category
    Route::resource('categories', CategoryController::class);
});

// Route::get('/', function(){
//     return view('layouts.site');
// });



Route::get('layouts/site', [SiteController::class,'master']);

Route::get('singleblog/{id}', [SiteController::class,'singleblog'])->middleware('auth');
Route::get('/', [SiteController::class,'index']);
Route::post('postcomment/{id}',[CommentController::class,'postcomment'])->middleware('auth');
Route::post('commentreply/{id}',[CommentController::class,'commentreply'])->middleware('auth');
Route::get('deletecommentreply/{id}',[CommentController::class,'deletecommentreply'])->middleware('auth');

// Site Auth


