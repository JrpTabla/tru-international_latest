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
use App\Http\Controllers\FormController;

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
    return view('pages/communitrade', ['title' => 'Traders United | CommuniTrade']);
});

Route::get('/about', function () {
    return view('pages/about', ['title' => 'Traders United | About Us']);
});

Route::get('/blog', function () {
    /* return view('pages/blog', ['title' => 'Traders United | Blog']); */
    return view('pages/maintenance', ['title' => 'Traders United | Blog']);
});

Route::get('/help_center', function () {
    return view('pages/maintenance', ['title' => 'Traders United | Help Center']);
});

Route::get('/partnership_program', function () {
    return view('pages/maintenance', ['title' => 'Traders United | Partnership Program']);
});

Route::get('/documents', function () {
    return view('pages/maintenance', ['title' => 'Traders United | Documents']);
});

Route::get('/feedback', function () {
    return view('pages/maintenance', ['title' => 'Traders United | Feedback']);
});

Route::get('/cookie_policy', function () {
    return view('pages/maintenance', ['title' => 'Traders United | Cookie Policy']);
});

Route::get('/privacy_policy', function () {
    return view('pages/maintenance', ['title' => 'Traders United | Privacy Policy']);
});

Route::get('/terms_of_use', function () {
    return view('pages/maintenance', ['title' => 'Traders United | Terms of Use']);
});

Route::get('/risk_disclosure', function () {
    return view('pages/maintenance', ['title' => 'Traders United | Risk Disclosure']);
});



/* ----------------------------------------- User Pages ---------------------------------------------------------*/

Route::get('/dashboard', function () {
    return view('pages/user/dashboard', ['title' => 'Traders United | Dashboard']);
})->middleware(['auth'])->name('dashboard');

Route::get('/techhub', function () {
    return view('pages/user/techhub', ['title' => 'Traders United | TechHub']);
})->middleware(['auth'])->name('techhub');


Route::get('/account-settings', function () {
    return view('pages/user/account_settings', ['title' => 'Traders United | Account Settings']);
})->middleware(['auth'])->name('account-setting');



/* ----------------------------------------- Homepage API ---------------------------------------------------------*/


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

Route::get('/tradegeek', function () {
    return view('pages/education/education', ['title' => 'Traders United | Education']);

    /* return view('pages/maintenance', ['title' => 'Traders United | Education']); */
});


Route::get('/tradegeek/{name}', function ($name) {
    return view('pages/education/educationCourse', ['title' => 'Traders United | Education Courses Page']);
});

Route::get('/tradegeek/course/{id}', function ($id) {
    return view('pages/education/educationModule', ['title' => 'Traders United | Education Courses Page']);
});


Route::get('/education_lesson/{id}', function ($id) {
    return view('pages/education/educationLesson', ['title' => 'Traders United | Education Lesson Page']);
});


/* ----------------------------------------- Education API ---------------------------------------------------------*/

/* Retrieve */
Route::get('/api/view-education-topic', [EducationTopicController::class, 'index']);

/* Retrieve */
Route::get('/api/retrieve-education-topic-id/{topic_name}', [EducationCourseController::class, 'RetrieveID']);

/* Retrieve */
Route::get('/api/view-education-course/{topic_name}/{difficulty_id}', [EducationCourseController::class, 'index']);


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





/* ----------------------------------------- Send a Email API ---------------------------------------------------------*/

Route::post('/submit-form', [FormController::class, 'submitForm']);

Route::post('/submit-notification', [FormController::class, 'submitFormMaintenancePage']);




Auth::routes(['verify' => true]);

require __DIR__.'/auth.php';

require __DIR__.'/user.php';