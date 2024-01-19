<?php

use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/',function() {  return view("welcome");})->name('welcome');;

Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');

Route::get('/create/post', [PostController::class, 'create'])->name('post.create');

Route::post('/add/post/', [PostController::class, 'store'])->name('post.store');

Route::get('/modifier/post/{slug}', [PostController::class, 'modifier'])->name('post.modifier');

Route::put('/update/post/{slug}', [PostController::class, 'update'])->name('post.update');

Route::delete('/delete/post/{slug}', [PostController::class, 'delete'])->name('post.delete');

Route::get('/mesposts', function() {  return view("mesposts");})->name('mesposts');

Route::resource('commentaires', CommentaireController::class);


Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';