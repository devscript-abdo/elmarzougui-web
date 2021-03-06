<?php

use App\Http\Controllers\Developer\DevloperController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\FaqController;
use App\Http\Controllers\Site\PlanController;
use App\Http\Controllers\Site\PortfolioController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Site\TagController;
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

Route::get('/', [SiteController::class, 'index'])->name('home');

Route::get('/about-us', [SiteController::class, 'about'])->name('about');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.single');

Route::get('/tags', [TagController::class, 'index'])->name('tags');
Route::get('/tags/{tag}', [TagController::class, 'show'])->name('tag.single');

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.single');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.single');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact')->middleware('doNotCacheResponse');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.post')->middleware('doNotCacheResponse');

Route::get('/plans', [PlanController::class, 'index'])->name('plans');

Route::get('faqs', [FaqController::class, 'index'])->name('faqs');




Route::group(['prefix' => 'theadmin', 'middleware' => 'doNotCacheResponse'], function () {

    Voyager::routes();

    Route::prefix('dev', function () {
        Route::get('/clear', [DevloperController::class, 'clearCache']);
    });
});
