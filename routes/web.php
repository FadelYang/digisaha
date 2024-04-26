<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(["auth", "verified"]);

Route::get('/product-and-service', [App\Http\Controllers\ProductAndServiceController::class, 'index'])->name('product-and-service');

Route::get('/product-and-service/register', [App\Http\Controllers\ProductAndServiceController::class, 'getRegisterPage'])->name('product-and-service.register-page')->middleware('auth');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent to ' . $request->user()->email . ' !');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');
