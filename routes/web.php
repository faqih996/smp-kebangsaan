<?php

use App\Http\Controllers\FrontendController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});