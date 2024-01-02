<?php

use MailchimpMarketing\ApiClient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use Symfony\Component\HttpFoundation\Request;

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
 * Comment's routes
 */
Route::controller(CommentController::class)
    ->name('comment.')
    ->group(function () {
        Route::post('posts/{post:slug}/comments', 'store')
            ->name('store');
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
 * Newsletter's routes
 */
Route::controller(NewsletterController::class)
    ->name('newsletter.')
    ->prefix('newsletter')
    ->group(function () {
        Route::get('/', 'index');
        Route::post('subscribe', 'subscribe')
            ->name('subscribe');
        Route::post('/unsubscribe', 'unsubscribe')
            ->name('unsubscribe');
});

/**
 * Test de notifications
 */
Route::get('/notification', function () {
    // TODO: Mettre la clé dans une constant
    return redirect('/')->with('warning', "Message de test");
});