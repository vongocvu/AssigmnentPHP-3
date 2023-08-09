<?php

use App\Http\Livewire\Admin\Champions\AddChampion;
use App\Http\Livewire\Admin\Champions\ListChampion;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Controllers\ChampionDetail;
use App\Http\Controllers\PostDetail;
use App\Http\Controllers\EditChampionController;
use App\Http\Controllers\PostByCate;
use App\Http\Livewire\Admin\Posts\AddPost;
use App\Http\Livewire\Admin\Categories\AddCategory;
use App\Http\Livewire\Admin\Categories\ListCategory;
use App\Http\Livewire\Champions\Champions;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\HowToPlayComponent;
use App\Http\Livewire\Posts\Posts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Livewire\Admin\Posts\ListPost;

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



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('', Dashboard::class);
    Route::prefix('champion')->group(function () {
        Route::get('/add', AddChampion::class);
        Route::get('/list-champion', ListChampion::class);
        Route::get('/edit-champion/{slug_name}', [EditChampionController::class, 'showEditChampion']);
    });
    Route::prefix('post')->group(function () {
        Route::get('/add', AddPost::class);
        Route::post('/save-post', [AddPost::class, "savePost"]);
        Route::get('/list-post', ListPost::class);
    });

    Route::prefix('category')->group(function () {
        Route::get('/add', AddCategory::class);
        Route::post('/save-category', [AddCategory::class, 'saveCategory']);
        Route::get('/list-category', ListCategory::class);
    });
});


Route::get('/', HomeComponent::class);
Route::get('/how-to-play/', HowToPlayComponent::class);


Route::prefix('posts')->group(function () {
    Route::get('', Posts::class);
    Route::get('/{cate_slug}/', [PostByCate::class, 'showPostByCate']);
    Route::get('/{cate_slug}/{post_slug}', [PostDetail::class, 'showDetailPost']);
});

Route::prefix('champions')->group(function () {
    Route::get('', Champions::class);
    Route::get('/{name_slug}', [ChampionDetail::class, 'showDetailChampion']);
});


Route::get('/auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
