<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Models\User;
use App\Models\PageContent;


use App\Http\Controllers\EducationLevelController;
use App\Http\Controllers\EducationTopicController;
use App\Http\Controllers\EducationCourseController;
use App\Http\Controllers\EducationModuleController;
use App\Http\Controllers\EducationLessonController;

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

Route::get('/dispute_resolution', function () {
    return view('pages/dispute-resolution', ['title' => 'Traders United | Risk Protection Program']);
});

Route::get('/unitygains', function () {
    return view('pages/unity-gains', ['title' => 'Traders United | UnityGains']);
});

Route::get('/communitrade', function () {
    return view('pages/communiTrade', ['title' => 'Traders United | CommuniTrade']);
});

Route::get('/about', function () {
    return view('pages/about', ['title' => 'Traders United | About Us']);
});


Route::get('/blog', function () {
    return view('pages/blog', ['title' => 'Traders United | Blog']);
});


// Route::get('/admin__dashboard', function () {
//     return view('pages/admin/dashboard', ['title' => 'Traders United | Admin Dashboard']);
// });

// Route::get('/admin__blog', function () {
//     return view('pages/admin/blog', ['title' => 'Traders United | Admin Blog']);
// });


// Route::get('/zoho', function () {
//     return view('pages/zoho', ['title' => 'Traders United | Admin Blog']);
// });




Route::get('/dashboard', function () {
    return view('pages/user/dashboard', ['title' => 'Traders United | Dashboard']);
})->middleware(['auth'])->name('dashboard');

Route::get('/techhub', function () {
    return view('pages/user/techhub', ['title' => 'Traders United | TechHub']);
})->middleware(['auth'])->name('techhub');


Auth::routes(['verify' => true]);

require __DIR__.'/auth.php';

require __DIR__.'/user.php';


Route::get('/api/content/Homepage-section-3', function () {

    $pageContents = PageContent::where('page_name', "Home_page")
    ->where('page_section', 3)
    ->get();

    return response()->json($pageContents);
});

Route::get('/api/content/Homepage-section-4', function () {

    $pageContents = PageContent::where('page_name', "Home_page")
    ->where('page_section', 4)
    ->get();

    return response()->json($pageContents);
});

Route::get('/api/content/Homepage-section-5', function () {

    $pageContents = PageContent::where('page_name', "Home_page")
    ->where('page_section', 5)
    ->get();

    return response()->json($pageContents);
});

Route::get('/api/content/Homepage-section-6', function () {

    $pageContents = PageContent::where('page_name', "Home_page")
    ->where('page_section', 6)
    ->get();

    return response()->json($pageContents);
});

Route::get('/api/content/Homepage-section-7', function () {

    $pageContents = PageContent::where('page_name', "Home_page")
    ->where('page_section', 7)
    ->get();

    return response()->json($pageContents);
});

Route::get('/api/content/Homepage-section-8', function () {

    $pageContents = PageContent::where('page_name', "Home_page")
    ->where('page_section', 8)
    ->get();

    return response()->json($pageContents);
});


/* ----------------------------------------- Education Pages ---------------------------------------------------------*/

Route::get('/education', function () {
    return view('pages/education/education', ['title' => 'Traders United | Education Page']);
});


Route::get('/education/{id}', function ($id) {
    return view('pages/education/educationCourse', ['title' => 'Traders United | Education Courses Page']);
});

Route::get('/education_course/{id}', function ($id) {
    return view('pages/education/educationModule', ['title' => 'Traders United | Education Courses Page']);
});


Route::get('/education_lesson/{id}', function ($id) {
    return view('pages/education/educationLesson', ['title' => 'Traders United | Education Lesson Page']);
});


/* ----------------------------------------- Education API ---------------------------------------------------------*/

/* Retrieve */
Route::get('/api/view-education-topic', [EducationTopicController::class, 'index']);


/* Retrieve */
Route::get('/api/view-education-course/{topic_id}/{difficulty_id}', [EducationCourseController::class, 'index']);


/* Retrieve */
Route::get('/api/retrieve-education-level', [EducationLevelController::class, 'index']);

/* Page Data */
Route::get('/api/page-education-course/{id}', [EducationCourseController::class, 'page']);


/* Retrieve */
Route::get('/api/view-education-module/{course_id}', [EducationModuleController::class, 'index']);


/* Retrieve */
Route::get('/api/view-education-lesson/{module_id}', [EducationLessonController::class, 'index']);


/* Page Data */
Route::get('/api/page-education-lesson/{id}', [EducationLessonController::class, 'page']);
