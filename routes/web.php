<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PagesController;

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
    return view('index_app');
})->name('index');

Route::get('auth/signin', function () {
    return view('auth/signin');
})->name('signin');

// Untuk redirect ke Google
Route::get('auth/google/redirect', [SocialiteController::class, 'redirect'])
    ->middleware(['guest'])
    ->name('redirect');

// Untuk callback dari Google
Route::get('auth/google/callback', [SocialiteController::class, 'callback'])
    ->middleware(['guest'])
    ->name('callback');

// Untuk logout
Route::post('auth/google/logout', [SocialiteController::class, 'logout'])
    ->middleware(['auth'])
    ->name('logout');

// Route::get('userProfile', [UserProfileController::class, 'index'])
//     ->middleware(['auth'])
//     ->name('userProfile');

// Route::name(['prefix' => 'user.',  'middleware' => 'auth'])->group(function () {
//     Route::get('/profile', [UserProfileController::class, 'index'])
//         ->name('profile');
// });

Route::group(['middleware' => ['auth']], function () {
    Route::get('userProfile', [UserProfileController::class, 'index'])->name('userProfile');
    Route::get('userAddress', [UserProfileController::class, 'address'])->name('userAddress');
    Route::get('userMembership', [UserProfileController::class, 'membership'])->name('userMembership');
    // Route::post('/orders', 'store');
});

Route::group(['prefix' => 'page'], function () {
    Route::get('/legalPolicy', [PagesController::class, 'legalPolicy'])->name('legalPolicy');
    Route::get('/helpSupport', [PagesController::class, 'helpSupport'])->name('helpSupport');
});
