<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

Route::middleware('auth')->group(function () {
    Route::get('/get_user_info', [UserController::class, 'getUserInfo'])->name('user_info');
});