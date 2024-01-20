<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TraitementInscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [OfferController::class, 'marketplace'])->name('marketplace');

Route::get('/marketplace/category/{category?}', [OfferController::class, 'marketplace'])->name('marketplace.category');
Route::get('/marketplace/location/{location?}', [OfferController::class, 'marketplace'])->name('marketplace.location');

Route::get('/publier_annonce', [OfferController::class, 'create'])->name('offer');

Route::get('/annonce/{id}', [OfferController::class, 'show'])->name('annonce');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/logout', function () {
    return view('logout');
})->name('logout');

Route::get('/password_reset', function () {
    return view('password_reset');
})->name('password_reset');

Route::post('/register', [TraitementInscriptionController::class, 'store'])->name('register');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/publier_annonce', [OfferController::class, 'store'])->name('offer');

Route::post('/password_reset', [LoginController::class, 'reset_password'])->name('password_reset');

Route::post('/contact', [ContactController::class, 'store'])->name('contact');
