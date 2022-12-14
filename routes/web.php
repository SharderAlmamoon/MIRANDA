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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admindashboard', function () {
    return view('backend.admindashboard');
})->middleware('auth')->name('bdashboard');

Route::get('/blankpage', function () {
    return view('backend.blankpage');
})->name('blankpage');

Route::get('/frontpage', function () {
    return view('frontend.indexhtml');
})->name('frontpage');

Route::get('/frontpageBlank', function () {
    return view('frontend.blankfrontend');
})->name('blankfrontend');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
