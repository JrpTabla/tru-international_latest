<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages/homepage', ['title' => 'Traders United']);
});

Route::get('/risk-protection-program', function () {
    return view('pages/risk-protection-program', ['title' => 'Traders United | Risk Protection Program']);
});

Route::get('/unity-gains', function () {
    return view('pages/unity-gains', ['title' => 'Traders United | UnityGains']);
});

Route::get('/communitrade', function () {
    return view('pages/communitrade', ['title' => 'Traders United | CommuniTrade']);
});

Route::get('/dashboard', function () {
    return view('pages/user/dashboard', ['title' => 'Traders United | Dashboard']);
})->middleware(['auth'])->name('dashboard');

Route::get('/techhub', function () {
    return view('pages/user/techhub', ['title' => 'Traders United | TechHub']);
})->middleware(['auth'])->name('techhub');


Auth::routes(['verify' => true]);

require __DIR__.'/auth.php';

require __DIR__.'/user.php';

