<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\RepliesController;
use App\Http\Controllers\StatusController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/feedback', [FeedbackController::class, 'index']);
Route::post('/feedback', [FeedbackController::class, 'create']);
Route::get('/feedback/{feedback_id}', [FeedbackController::class, 'feedback_detail']);
Route::get('/feedback/{feedback_id}/edit', [FeedbackController::class, 'feedback_edit']);
Route::post('/feedback/{feedback_id}/edit', [FeedbackController::class, 'feedback_update']);
Route::get('/feedback/{feedback_id}/delete', [FeedbackController::class, 'feedback_delete']);

Route::get('/feedback/{feedback_id}/comments', [CommentsController::class, 'feedback_comments']);
Route::post('/feedback/{feedback_id}/comments', [CommentsController::class, 'comments_create']);
Route::get('/feedback/{feedback_id}/comments/{comment_id}', [CommentsController::class, 'comment_detail']);
Route::get('/feedback/{feedback_id}/comments/{comment_id}/edit', [CommentsController::class, 'comment_edit']);
Route::post('/feedback/{feedback_id}/comments/{comment_id}/edit', [CommentsController::class, 'comment_update']);
Route::get('/feedback/{feedback_id}/comments/{comment_id}/delete', [CommentsController::class, 'comment_delete']);

Route::get('/comments/{comment_id}/replies', [RepliesController::class,'comment_replies']);
Route::post('/comments/{comment_id}/replies', [RepliesController::class, 'reply_create']);
Route::get('/comments/{comment_id}/replies/{reply_id}', [RepliesController::class, 'reply_detail']);
Route::get('/comments/{comment_id}/replies/{reply_id}/edit', [RepliesController::class, 'reply_edit']);
Route::post('/comments/{comment_id}/replies/{reply_id}/edit', [RepliesController::class, 'reply_update']);
Route::get('/comments/{comment_id}/replies/{reply_id}/delete', [RepliesController::class, 'reply_delete']);

Route::post('/feedback/{feedback_id}/status/{status_id}/change', [StatusController::class,'update_status']);

Route::post('/feedback/{feedback_id}/category/{category_id}/change',[StatusController::class, 'update_category']);