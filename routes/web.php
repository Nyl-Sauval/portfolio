<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


use App\Http\Middleware\SetLanguage;

Route::middleware([SetLanguage::class])->group(function () {
    // Routes qui doivent appliquer la langue
    Route::get('/', [PageController::class, 'index'])->name('welcome');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/index', [PageController::class, 'index'])->name('index');
    Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/skills', function () {
        return view('skills');
    })->name('skills');




});



Route::post('/change-language', [LanguageController::class, 'changeLanguage'])->name('change.language');





require __DIR__.'/auth.php';
