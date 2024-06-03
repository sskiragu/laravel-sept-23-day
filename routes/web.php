<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/signup', [AuthController::class, 'signup']);