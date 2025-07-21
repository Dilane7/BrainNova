<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteRequestController;
use App\Http\Controllers\Admin\QuoteDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('/admin/dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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

Route::get('/demande-devis', [QuoteRequestController::class, 'create'])->name('quote.create');
// Traite le formulaire
Route::post('/demande-devis', [QuoteRequestController::class, 'store'])->name('quote.store');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/devis', [QuoteDashboardController::class, 'index'])->name('quotes.index');
    Route::get('/devis/{quote}', [QuoteDashboardController::class, 'show'])->name('quotes.show');
});


require __DIR__.'/auth.php';
