<?php

use App\Http\Controllers\AdvantageController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionFiveController;
use App\Http\Controllers\SectionFourController;
use App\Http\Controllers\SectionThreeController;
use App\Http\Controllers\SectionTwoController;
use App\Http\Controllers\TaglineController;
use App\Http\Controllers\TitleWebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('galleries', GalleryController::class);
        Route::resource('taglines', TaglineController::class);
        Route::resource('titleWebsites', TitleWebsiteController::class);
        Route::resource('advantages', AdvantageController::class);
        Route::resource('sectionTwos', SectionTwoController::class);
        Route::resource('sectionThrees', SectionThreeController::class);
        Route::resource('sectionFours', SectionFourController::class);
        Route::resource('sectionFives', SectionFiveController::class);
        Route::resource('footers', FooterController::class);
    });
});

require __DIR__.'/auth.php';
