<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\SiteController::class, 'welcome'])->name('welcome');
Route::get('/news/{id}', [\App\Http\Controllers\SiteController::class, 'post'])->name('post');
Route::get('/all-news', [\App\Http\Controllers\SiteController::class, 'all'])->name('all');
Route::post('/add-to-favorites', [\App\Http\Controllers\SiteController::class, 'add'])->name('add');
Route::get('/local-news/{id}', [\App\Http\Controllers\SiteController::class, 'locale'])->name('locale');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $user  = Auth::user();
    $posts = $user->posts;
    return view('dashboard', compact('posts'));
})->name('dashboard');
