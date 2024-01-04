<?php

use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;

//¤ Posts ¤//
Route::controller(PostController::class)
    ->name('posts.')
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('posts/{post}', 'show')->name('show');
});

//¤ Comments ¤//
Route::controller(CommentController::class)
    ->name('comment.')
    ->group(function () {
        Route::post('posts/{post:slug}/comments', 'store')
            ->name('store');
});

//¤ Sessions (A rename: Auth) ¤//
Route::controller(SessionController::class)
    ->name('session.')
    ->group(function () {
        Route::post('logout', 'destroy')->name('logout');
        Route::get('login', fn() => view('sessions.create'))->name('create');
        Route::post('login', 'store')->name('store');
});
Route::controller(RegisterController::class)
    ->name('register.')
    ->group(function () {
        Route::get('register', 'create')->name('create');
        Route::post('register', 'store')->name('store');
});

//¤ Newletters ¤//
Route::name('newsletter.')
    ->prefix('newsletter')
    ->group(function () {
        Route::post('subscribe', NewsletterController::class)->name('subscribe');
});

//¤ Administration ¤/
Route::name('admin.')
    ->middleware('admin')
    ->prefix('admin')
    ->group(function () {
        //¤ General ¤//
        Route::get('/', fn() => view('admin.index'))->name('index');

        //¤ Posts ¤//
        Route::name('posts.')
            ->controller(AdminPostController::class)
            ->prefix('posts')
            ->group(function () {
                Route::get('/', 'index')
                    ->name('index');

                Route::get('/create', [PostController::class, 'create'])
                    ->name('create');

                Route::post('/', [PostController::class, 'store'])
                    ->name('store');
            
                Route::get('/{posts}/edit', 'edit')
                    ->name('edit');
            });
});