<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\SpeachController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\VisionController;
use App\Models\Extracurricular;
use App\Models\Information;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;

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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('profile', [DashboardController::class, 'profile'])->name('dashboard.profile');

    Route::resource('carousel', CarouselController::class)->parameters([
        'carousel' => 'slug'
    ]);
    Route::resource('category', CategoryController::class)->parameters([
        'category' => 'slug'
    ]);
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
    Route::resource('mail', ContactController::class)->parameters([
        'mail' => 'slug'
    ]);
    Route::resource('information', InformationController::class)->parameters([
        'information' => 'slug'
    ]);
    Route::resource('promotion', PromotionController::class)->parameters([
        'promotion' => 'slug'
    ]);
    Route::resource('article', ArticleController::class)->parameters([
        'article' => 'slug'
    ]);
    Route::resource('gallery', GalleryController::class)->parameters([
        'article' => 'slug'
    ]);

    Route::resource('about', AboutController::class);
    Route::resource('speach', SpeachController::class);
    Route::resource('vision-mission', VisionController::class);
});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/profile', function () {
//         return view('dashboard');
//     })->name('profile');
// });