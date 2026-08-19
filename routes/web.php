<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DigitalProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;

// Public Front-Facing Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');

// Digital Portfolio & Case Studies
Route::get('/portfolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portfolio/{slug}', [ProjectController::class, 'show'])->name('projects.show');

// Digital Products & SaaS Showcase
Route::get('/products', [DigitalProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [DigitalProductController::class, 'show'])->name('products.show');

// Trainer, Keynote Speaker & Workshop Galleries
Route::get('/trainer', [TrainerController::class, 'index'])->name('trainer.index');

// Blog & Tech Insights
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Contact & Project Calculator
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
