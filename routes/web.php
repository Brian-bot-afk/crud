<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;

// Welcome Page Route
Route::get('/', function () {
    return view('welcome');
});

// User Routes
Route::resource('users', UserController::class);

// Post Routes
Route::resource('posts', PostController::class);

// Comment Routes (Nested within posts)
Route::prefix('posts/{post}/comments')->name('comments.')->group(function () {
    Route::get('/', [CommentController::class, 'index'])->name('index');
    Route::get('create', [CommentController::class, 'create'])->name('create');
    Route::post('/', [CommentController::class, 'store'])->name('store');
    Route::get('{comment}/edit', [CommentController::class, 'edit'])->name('edit');
    Route::put('{comment}', [CommentController::class, 'update'])->name('update');
    Route::delete('{comment}', [CommentController::class, 'destroy'])->name('destroy');
});

// Category Routes
Route::resource('categories', CategoryController::class);
