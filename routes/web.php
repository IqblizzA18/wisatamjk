<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ExploreController;
use App\Http\Controllers\Frontend\FeedbackController;
use App\Http\Controllers\Admin\BackgroundController;
use App\Http\Controllers\Admin\WisataController;
use App\Http\Controllers\Admin\JenisWisataController;

Route::get('/',[\App\Http\Controllers\Frontend\HomepageController::class,'index'])->name('home');
Route::get('/about',[\App\Http\Controllers\Frontend\AboutController::class,'index'])->name('about');
Route::get('/explore',[\App\Http\Controllers\Frontend\ExploreController::class,'index'])->name('explore');
Route::get('/explore/{slug}',[\App\Http\Controllers\Frontend\ExploreController::class,'show'])->name('explore.show');
Route::get('/feedback',[\App\Http\Controllers\Frontend\FeedbackController::class,'index'])->name('feedback');

Auth::routes();

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('backgrounds', \App\Http\Controllers\Admin\BackgroundController::class)->except('show');
    Route::resource('jenis', \App\Http\Controllers\Admin\JenisWisataController::class)->except('show');
    Route::resource('wisata', \App\Http\Controllers\Admin\WisataController::class)
        ->parameters(['wisata' => 'wisata'])
        ->except('show');

     // Wisata Image routes nested under wisata
    Route::prefix('wisata')->name('wisata.')->group(function() {
        Route::get('{wisata}/images', [\App\Http\Controllers\Admin\WisataImageController::class, 'index'])->name('images.index');
        Route::post('{wisata}/images', [\App\Http\Controllers\Admin\WisataImageController::class, 'store'])->name('images.store');
        Route::delete('images/{image}', [\App\Http\Controllers\Admin\WisataImageController::class, 'destroy'])->name('images.destroy');
    });
});

