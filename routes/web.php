<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ContactInfoController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/campus', [HomeController::class, 'campus'])->name('campus');
Route::get('/history', [HomeController::class, 'history'])->name('history');
Route::get('/faculty', [HomeController::class, 'faculty'])->name('faculty');
Route::get('/alumni', [HomeController::class, 'alumni'])->name('alumni');
Route::get('/admissions', [HomeController::class, 'admissions'])->name('admissions');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/studentcare', [HomeController::class, 'studentcare'])->name('studentcare');
Route::get('/activities', [HomeController::class, 'activities'])->name('activities');
Route::get('/academics', [HomeController::class, 'academics'])->name('academics');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('/alumni', [HomeController::class, 'alumni'])->name('alumni');
Route::post('/alumni/store', [HomeController::class, 'alumniStore'])->name('alumni.store');
// Add this line with your other routes
Route::get('/faculty-members/{category}', [HomeController::class, 'getFacultyByCategory'])
     ->name('faculty.members.category');

// Admin Authentication Routes (outside auth middleware)
Route::middleware('web')->group(function () {
    Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.post');
    Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
});

// Admin Protected Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('sliders', SliderController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('team', TeamController::class);
    Route::resource('faculty', FacultyController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('pages', PageController::class);
    Route::resource('contact-info', ContactInfoController::class);
});