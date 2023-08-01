<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HomeController;


Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'processRegistration'])->name('register.submit');
Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment');
Route::post('/payment', [PaymentController::class, 'processPayment'])->name('process.payment');
Route::post('/balance', [PaymentController::class, 'processBalance'])->name('process.balance');
Route::get('/', [HomeController::class, 'showHome'])->name('home');
