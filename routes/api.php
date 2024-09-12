<?
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

// Post API routes
Route::apiResource('posts', PostController::class);

// Category API routes
Route::apiResource('categories', CategoryController::class);

// User API routes
Route::apiResource('users', UserController::class);

// Comments (nested within posts)
Route::get('posts/{post}/comments', [CommentController::class, 'index']);
Route::post('posts/{post}/comments', [CommentController::class, 'store']);
