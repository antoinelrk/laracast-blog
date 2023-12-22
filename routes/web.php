<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/**
 * Posts routes
 */
Route::controller(PostController::class)
    ->name('posts')
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('posts/{post}', 'show')->name('show');
});

/**
 * Register's routes
 */
Route::controller(RegisterController::class)
    ->name('register.')
    ->group(function () {
        Route::get('register', 'create')->name('create');
        Route::post('register', 'store')->name('store');
});

/**
 * Session's routes
 */
Route::controller(SessionController::class)
    ->name('session.')
    ->group(function () {
        Route::post('logout', 'destroy')->name('logout');
        Route::get('login', fn() => view('sessions.create'))->name('create');
        Route::post('login', 'store')->name('store');
});

/**
 * Test de notifications
 */
Route::get('/notification', function () {
    // TODO: Mettre la clé dans une constant
    return redirect('/')->with('warning', "Message de test");
});