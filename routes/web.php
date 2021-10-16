<?php

use App\Http\Livewire\Blog\Show;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Blog\Index;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Pages\Price;
use Spatie\Permission\Models\Role;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Learning\Course;
use App\Http\Livewire\Admin\Blog\Create;
use App\Http\Livewire\Admin\Blog\update;
use App\Http\Controllers\SiteMapController;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Subscriptions\Payment;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Admin\Index as dashoard;
use App\Http\Livewire\Admin\Tag\Index as Tags;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Admin\User\Index as Users;
use App\Http\Livewire\learning\Index as Learning;
use App\Http\Livewire\Subscriptions\PaymentStore as PaymentStore;
use App\Http\Livewire\learning\Episode as Episode;
use App\Http\Livewire\Category\Course as Courses_Category;
use App\Http\Livewire\learning\Show as Courseshow;
use App\Http\Livewire\Portfolio\Index as Portfolio;
use App\Http\Livewire\Admin\Blog\Index as AdminBlog;
use App\Http\Livewire\Admin\Course\Index as ListCourse;
use App\Http\Livewire\Admin\User\Update as Updateusers;
use App\Http\Livewire\Admin\Category\Index as Categories;
use App\Http\Livewire\Admin\Episode\Index as ListEpisode;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Livewire\Admin\Course\Create as CreateCourse;
use App\Http\Livewire\Admin\Course\update as UpdateCourse;
use App\Http\Livewire\Subscriptions\Index as Subscription;
use App\Http\Livewire\Admin\Episode\Create as CreateEpisode;
use App\Http\Livewire\Admin\Episode\update as UpdateEpisode;
use App\Http\Livewire\Admin\Role\Index as Rol;



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


Route::get('/plans', Subscription::class)->name('plans');
Route::get('/payments', Payment::class)->name('payments');
Route::post('/paymentstore', PaymentStore::class)->name('paymentstore');



Route::get('sitemap.xml', [SiteMapController::class, 'index'])->name('sitemap');

Route::get('/', Home::class)->name('home');
Route::get('/portfolio', portfolio::class)->name('portfolio');

Route::get('/learning', Learning::class)->name('learning');
Route::get('/courses/{course}', Courseshow::class)->name('course_show');
Route::get('/course/{course}/{episode}', Episode::class)->name('episode');
Route::get('/learning.course', Course::class)->name('course');

Route::get('/blog', Index::class)->name('blog');
Route::get('post/{article}', Show::class)->name('article.show');
Route::get('price', Price::class)->name('price');

Route::get('topic/{category}', Courses_Category::class )->name('courses_category');


//Route::get('/user/verify/{token}', RegisterController::class);

Route::middleware(['auth','verified'])->group(function () {
    //Auth::routes(['verify' => true]);
    Route::get('admin/dashboard', dashoard::class)->name('dashboard');
    Route::middleware(['role:admin'])->group(function () {

    //User
    Route::get('admin/users', Users::class)->name('users');
    Route::get('admin/user/update/{id}', Updateusers::class)->name('updateuser');

    // Blog
    Route::get('admin/blog', AdminBlog::class)->name('storepost');
    Route::get('admin/blog/create', Create::class)->name('createpost');
    Route::get('admin/blog/update/{id}', Update::class)->name('updatepost');

    // Course
    Route::get('admin/course', ListCourse::class)->name('listcourse');
    Route::get('admin/course/create', CreateCourse::class)->name('createcourse');
    Route::get('admin/course/update/{id}', UpdateCourse::class)->name('updatecourse');

    Route::get('admin/episode', ListEpisode::class)->name('listepisode');
    Route::get('admin/episode/create', CreateEpisode::class)->name('createepisode');
    Route::get('admin/episode/update/{id}', UpdateEpisode::class)->name('updateepisode');


    //Categorie
    Route::get('admin/Categorie', Categories::class)->name('categories');

    //Tag
    Route::get('admin/tag', Tags::class)->name('tags');

    // Role
    Route::get('admin/role', Rol::class)->name('role');

    });
});

