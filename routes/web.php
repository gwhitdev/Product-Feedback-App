<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RepliesController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\VotesController;
use App\Http\Controllers\UsersController;
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
    return view('welcome');
});
/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
Route::get('/dashboard', [UsersController::class, 'index'])->middleware('auth')->name('dashboard');

// FEEDBACK ROUTES
Route::get('/feedback', [FeedbackController::class, 'index'])->middleware('auth')->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'create'])->middleware('auth');
Route::get('/feedback/new', [FeedbackController::class, 'new'])->middleware('auth');
Route::get('/feedback/{feedback_id}', [FeedbackController::class, 'detail'])->middleware('auth');
Route::get('/feedback/{feedback_id}/edit', [FeedbackController::class, 'edit'])->middleware('auth');
Route::post('/feedback/{feedback_id}/edit', [FeedbackController::class, 'update'])->middleware('auth');
Route::get('/feedback/{feedback_id}/delete', [FeedbackController::class, 'delete'])->middleware('auth');

// COMMENTS ROUTES
Route::get('/feedback/{feedback_id}/comments', [CommentsController::class, 'index'])->middleware('auth');
Route::post('/feedback/{feedback_id}/comments', [CommentsController::class, 'create'])->middleware('auth');
Route::get('/feedback/{feedback_id}/comments/{comment_id}', [CommentsController::class, 'detail'])->middleware('auth');
Route::get('/feedback/{feedback_id}/comments/{comment_id}/edit', [CommentsController::class, 'edit'])->middleware('auth');
Route::post('/feedback/{feedback_id}/comments/{comment_id}/update', [CommentsController::class, 'update'])->middleware('auth');
Route::get('/feedback/{feedback_id}/comments/{comment_id}/delete', [CommentsController::class, 'delete'])->middleware('auth');

// REPLIES ROUTES
Route::get('/comments/{comment_id}/replies', [RepliesController::class,'index'])->middleware('auth');
Route::post('/comments/{comment_id}/replies', [RepliesController::class, 'create'])->middleware('auth');
Route::get('/comments/{comment_id}/replies/{reply_id}', [RepliesController::class, 'detail'])->middleware('auth');
Route::get('/comments/{comment_id}/replies/{reply_id}/edit', [RepliesController::class, 'edit'])->middleware('auth');
Route::post('/comments/{comment_id}/replies/{reply_id}/edit', [RepliesController::class, 'update'])->middleware('auth');
Route::get('/comments/{comment_id}/replies/{reply_id}/delete', [RepliesController::class, 'delete'])->middleware('auth');

// STATUS ROUTES
Route::get('/feedback/{feedback_id}/change-status/{status_id}', [StatusController::class,'update_status'])->middleware('auth');

// CATEGORIES ROUTES
Route::get('/feedback/{feedback_id}/change-category/{category_id}',[CategoriesController::class, 'update_category'])->middleware('auth');

// VOTING ROUTES
Route::get('/feedback/{feedback_id}/vote-up', [VotesController::class, 'vote_up'])->middleware('auth');
Route::get('/feedback/{feedback_id}/vote-down', [VotesController::class, 'vote_down'])->middleware('auth');