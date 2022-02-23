<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use App\Models\Article;

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
// Controllers for portfolio pages 
Route::get('/', [WelcomeController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/faq', [FaqController::class, 'show'])->name('faq.show');
Route::post('/faq', [FaqController::class, 'store'])->name('faq.store');
Route::get('/faq/create', [FaqController::class, 'create']);
Route::get('/faq/{faq}/edit', [FaqController::class, 'edit'])->name('faq.edit'); //name wildcat the same in controller RMB
Route::put('/faq/{faq}', [FaqController::class, 'update'])->name('faq.update');
Route::get('/faq/{faq}/delete', [FaqController::class, 'destroy'])->name('faq.delete');



Route::get('/profile', [ProfileController::class, 'show']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{blog}', [BlogController::class, 'show']);