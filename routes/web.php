<?php

use App\Http\Controllers\{FriendshipController, UserController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'users'], function () {
    Route::get('/search', [UserController::class, 'search']);
    Route::post('/{userId}/friend-requests/{friendId}', [FriendshipController::class, 'send'])->name('send-friend-request');
});

require __DIR__ . '/auth.php';
