<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PostController;



/*Route::get('/',HomeController::class )->name('home');*/
Route::get('/', [PostController::class,'index'])->name('posts.index');

/*
Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [ CursoController::class, 'store'])->name('cursos.store');
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');*/


Route::resource('cursos', CursoController::class);
Route::view('welcome', 'welcome')->name('welcome');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('contactanos', [ContactanosController::class,'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class,'store'])->name('contactanos.store');

Route::get('posts', [PostController::class, 'categoria'])->name('posts.categoria');

Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');
Route::get('categoria/{categoria}', [PostController::class, 'show'])->name('posts.show');
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('prueba', function () {
    return 'Has accedido';
})->middleware(['auth:sanctum','age']);

Route::get('noautorisado', function () {
    return 'usted no es mayor de edad';
});
