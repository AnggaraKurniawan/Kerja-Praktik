<?php

use App\Http\Controllers\testimoniController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\portofolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\detailberitacontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Gunakan namespace yang benar untuk controller
Route::resource('services', \App\Http\Controllers\serviceController::class);
Route::resource('testimoni', \App\Http\Controllers\testimoniController::class);
Route::resource('berita', \App\Http\Controllers\beritaController::class);
Route::resource('berita', \App\Http\Controllers\beritaController::class);
Route::resource('portofolio', \App\Http\Controllers\portofolioController::class);
Route::resource('portofolio', \App\Http\Controllers\portofolioController::class);
Route::resource('home', \App\Http\Controllers\HomeController::class);
Route::resource('about', \App\Http\Controllers\HomeController::class);
Route::resource('detailberita', \App\Http\Controllers\detailberitacontroller::class);
Route::resource('contact', \App\Http\Controllers\ContactController::class);
Route::resource('login', \App\Http\Controllers\AuthController::class);
Route::resource('register', \App\Http\Controllers\AuthController::class);
Route::resource('users', \App\Http\Controllers\UserController::class);


// Route::resource('portofolioo', \App\Http\Controllers\portofolioController::class);
Route::get('/portofolioo', [portofolioController::class, 'portofolioutama'])->name('portofolioutama');
Route::get('/dashboard', [Dashboard::class, 'index'])->name('index');
Route::get('/service', [serviceController::class, 'service'])->name('service');
Route::get('/beritaa', [beritaController::class, 'beritautama'])->name('beritautama');

use App\Http\Controllers\HomeController;
use App\Models\service;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/waste', [serviceController::class, 'waste'])->name('waste');
Route::get('/detailberita/{id}', [detailberitacontroller::class, 'detailBerita'])->name('detailberita');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');




// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

