<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::layout('layouts.auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::livewire('login', 'auth.login')
            ->name('login');

        Route::livewire('register', 'auth.register')
            ->name('register');
            
    });

    Route::livewire('password/reset', 'auth.passwords.email')
        ->name('password.request');

    Route::livewire('password/reset/{token}', 'auth.passwords.reset')
        ->name('password.reset');

    Route::middleware('auth')->group(function () {
        Route::livewire('email/verify', 'auth.verify')
            ->middleware('throttle:6,1')
            ->name('verification.notice');

        Route::livewire('password/confirm', 'auth.passwords.confirm')
            ->name('password.confirm');
    });
});

Route::get('/login/{social}','Auth\socialLogin@Login')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/login/{social}/callback','Auth\socialLogin@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', 'Auth\EmailVerificationController')
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', 'Auth\LogoutController')
        ->name('logout');
});

Route::layout('layouts.app')->group(function (){
    Route::livewire('/', 'pages.home')->name('home');
    Route::livewire('/learning', 'learning.index')->name('learning');
    Route::livewire('/topics.php', 'topics.index')->name('topics.php');
    Route::livewire('/learning.course', 'learning.course')->name('course');

    Route::livewire('/blog', 'blog.index')->name('blog');
    Route::livewire('/post', 'blog.post')->name('post');
    Route::livewire('/price', 'pages.price')->name('price');

});

Route::layout('layouts.admin')->group(function(){

    Route::middleware('auth')->group(function () {
        Route::livewire('admin/dashboard', 'admin.index')->name('dashboard');
        Route::livewire('admin/users', 'admin.user.index')->name('users');
        Route::livewire('admin/blog', 'admin.blog.index')->name('storepost');
        Route::livewire('admin/blog/create', 'admin.blog.create')->name('createpost');
    });
});
