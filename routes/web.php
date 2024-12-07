<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\VisionController;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// rute ke frontend
Route::get('/', [FrontendController::class, 'index'])->name('front.index');
Route::get('about', [FrontendController::class, 'about'])->name('front.about');
Route::get('vision-mission', [FrontendController::class, 'visimision'])->name('front.vision-mission');
Route::get('greeting', [FrontendController::class, 'greeting'])->name('front.greeting');
Route::get('teacher', [FrontendController::class, 'teacher'])->name('front.teacher');
Route::get('facility', [FrontendController::class, 'facility'])->name('front.facility');
Route::get('extracurricular', [FrontendController::class, 'extracurricular'])->name('front.extracurricular');
// Route::get('extracurricular/detail/{extracurricular:slug}', [FrontendController::class, 'extracurricular'])->name('front.extracurricular');
Route::get('gallery', [FrontendController::class, 'gallery'])->name('front.gallery');
Route::get('information', [FrontendController::class, 'information'])->name('front.information');
// Route::get('information/detail/{information:slug}', [FrontendController::class, 'information'])->name('front.information');
Route::get('article', [FrontendController::class, 'article'])->name('front.article');
// Route::get('article/detail/{article:slug}', [FrontendController::class, 'articleDetail'])->name('front.article.detail');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('carousel', CarouselController::class)->parameters([
    'carousel' => 'slug']);
    Route::resource('category', CategoryController::class)->parameters([
        'category' => 'slug']);
    Route::resource('socialmedia', SocialMediaController::class)->parameters([
        'socialmedia' => 'slug'
    ]);
    Route::resource('teacher', TeacherController::class)->parameters([
        'teacher' => 'slug'
    ]);
    Route::resource('extracurricular', ExtracurricularController::class)->parameters([
        'extracurricular' => 'slug'
    ]);
    Route::resource('facility', FacilityController::class)->parameters([
        'facility' => 'slug'
    ]);
    Route::resource('about', AboutController::class)->parameters([
        'about' => 'slug'
    ]);
    Route::resource('vision-mission', VisionController::class);
});
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });