<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

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

Route::get('/about', function () {
    return view('pages/about', ['title' => 'Traders United | About Us']);
});

Route::get('/blog', function () {
    return view('pages/blog', ['title' => 'Traders United | Blog']);
});


Route::get('/admin__dashboard', function () {
    return view('pages/admin/dashboard', ['title' => 'Traders United | Admin Dashboard']);
});

Route::get('/admin__blog', function () {
    return view('pages/admin/blog', ['title' => 'Traders United | Admin Blog']);
});


Route::get('/zoho', function () {
    return view('pages/zoho', ['title' => 'Traders United | Admin Blog']);
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




Route::get('/fetch-content', 'ContentController@fetchContent')->name('fetch-content');

