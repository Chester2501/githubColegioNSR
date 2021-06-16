<?php

use App\Http\Controllers\Admin\CategoriaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;

Route::get('', [HomeController::class,'index'])->name('admin.home');
Route::resource('categorias', CategoriaController::class)->names('admin.categorias');
Route::resource('tags',TagController::class)->names('admin.tags');

Route::resource('posts', PostController::class)->names('admin.posts');