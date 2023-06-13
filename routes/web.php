<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;


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



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Protected routes
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Posts routes
    Route::resource('posts',  PostController::class);

    // Comments routes
    Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
});


// // Dashboard
// Route::get('/', function () {
//     return view('dashboard');
// })->name('dashboard')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
})->name('welcome')->middleware('guest');

// Catch-all route for handling 404 errors
Route::fallback(function () {
    return view('errors.404');
})->name('fallback.404');