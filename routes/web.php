<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'index'] )->name('page');





Route::middleware('auth')->group(function () {
    Route::resource('homes', HomeController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('furnitures', FurnitureController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('commentaires', CommentaireController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
