<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ExploreController;
use App\Http\Controllers\Frontend\FeedbackController;

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

Route::get('/',[\App\Http\Controllers\Frontend\HomepageController::class,'index'])->name('home');
Route::get('/about',[\App\Http\Controllers\Frontend\AboutController::class,'index'])->name('about');
Route::get('/explore',[\App\Http\Controllers\Frontend\ExploreController::class,'index'])->name('explore');
Route::get('/explore/{slug}',[\App\Http\Controllers\Frontend\ExploreController::class,'show'])->name('explore.show');
Route::get('/feedback',[\App\Http\Controllers\Frontend\FeedbackController::class,'index'])->name('feedback');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

