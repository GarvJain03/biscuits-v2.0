<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\LeaderboardController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/leaderboard', [LeaderboardController::class, 'leaderboard'])->name('leaderboard');

Route::prefix('/auth')->name('auth.')->middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('handleLogin');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('handleRegister');
});

Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth', 'dq')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'profile'])->name('dashboard');
    Route::post('/record_response', [ResponseController::class, 'record_response'])->name('record_response');
});

Route::get('/dq', function () {
    return view('disqualified');
})->name('dq');

Route::prefix('/admin')->name('admin.')->middleware('auth', 'admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/responses', [AdminController::class, 'responses'])->name('responses');
    Route::get('/responses/{id}', [AdminController::class, 'show_response'])->name('show_response');
    Route::post('/mark_correct', [AdminController::class, 'mark_correct'])->name('mark_correct');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
    Route::post('/post_notification', [NotificationController::class, 'notification'])->name('post_notification');
    Route::post('/record_admin_response', [ResponseController::class, 'record_admin_response'])->name('record_admin_response');
});
