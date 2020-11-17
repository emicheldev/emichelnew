<?php

use App\Http\Controllers\A;
use App\Http\Livewire\Blog\Post;
use App\Http\Livewire\Blog\Show;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Blog\Index;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Pages\Price;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Learning\Course;
use App\Http\Livewire\Admin\Blog\Create;
use App\Http\Livewire\Admin\Blog\update;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Topics\Index as Topics;
use App\Http\Livewire\Admin\Index as dashoard;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Admin\User\Index as Users;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Livewire\learning\Index as Learning;
use App\Http\Livewire\Admin\Blog\Index as AdminBlog;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\SiteMapController;

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



Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});



Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});


Route::get('sitemap.xml', [SiteMapController::class, 'index'])->name('sitemap');

Route::get('/', Home::class)->name('home');
Route::get('/learning', Learning::class)->name('learning');
Route::get('/topics.php', Topics::class)->name('topics.php');
Route::get('/learning.course', Course::class)->name('course');
    
    Route::get('/blog/', Index::class)->name('blog');
    Route::get('post/{article}', Show::class)->name('article.show');
    Route::get('/price', Price::class)->name('price');

//Route::get('/user/verify/{token}', RegisterController::class);

Route::middleware(['auth','verified'])->group(function () {
        //Auth::routes(['verify' => true]);
        Route::get('admin/dashboard', dashoard::class)->name('dashboard');
        Route::get('admin/users', Users::class)->name('users');
        Route::get('admin/blog', AdminBlog::class)->name('storepost');
        Route::get('admin/blog/create', Create::class)->name('createpost');
        Route::get('admin/blog/update/{id}', Update::class)->name('updatepost');

    });

