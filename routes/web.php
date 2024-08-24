<?php

use App\Http\Controllers\FriendshipController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/users/{userId}/friend-requests/{friendId}', [FriendshipController::class, 'send'])->name('send-friend-request');

require __DIR__ . '/auth.php';
