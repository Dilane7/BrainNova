<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

// // Assurez-vous d'avoir un contrôleur ou des vues correspondantes
// Route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('/services', [PageController::class, 'services'])->name('services');
// Route::get('/realisations', [PageController::class, 'realisations'])->name('realisations');
// Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/APropos', function () {
    return view('apropos');
})->name('apropos');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/devis', function () {
    return view('devis');
})->name('devis');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');