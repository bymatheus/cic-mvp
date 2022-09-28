<?php

use App\Http\Controllers\Dashboard\LogoutController;
use App\Http\Controllers\LandingPage\ContactController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\Dashboard\HomeController as HomeDashboardController;
use App\Http\Controllers\LandingPage\LoginController;
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
Route::controller(HomeController::class)->group(function () {
    Route::get('', 'index')->name('home.index');
});

Route::controller(ContactController::class)->group(function () {
    Route::post('/contato', 'store')->name('contact.store');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
});

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::controller(HomeDashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard.home.index');
});

Route::controller(LogoutController::class)->group(function () {
    Route::delete('logout/', 'index')->name('dashboard.logout.index');
});
