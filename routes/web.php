<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SweetController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TwitterLoginController;
use App\Http\Controllers\GoogleLoginController;


// Twitter Login
Route::get('auth/login/twitter', [TwitterLoginController::class, 'redirectToProvider'])->name('login.twitter');
Route::get('auto/twitter/callback', [TwitterLoginController::class, 'handleProviderCallback']);

//Google Login
Route::get('auth/login/google', [GoogleLoginController::class, 'redirectToProvider'])->name('login.google');
Route::get('auto/google/callback', [GoogleLoginController::class, 'handleProviderCallback']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('review.confirm', [ReviewController::class,'confirm'])->name('review.confirm');
Route::post('sweet.confirm', [SweetController::class,'confirm'])->name('sweet.confirm');
Route::group(['middleware' => 'auth'], function () {
    /*
    Route::resource('sweet', SweetController::class);
    */
    Route::get('/sweet/search/input', [SearchController::class, 'create'])->name('search.input');
    Route::get('/sweet/search/result', [SearchController::class, 'index'])->name('search.result');
    Route::resource('profile', ProfileController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('sweet', SweetController::class)->except([
        'index' //indexをauthの外で
    ]);

    Route::get('profile/{user}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
});

Route::get('sweet', [SweetController::class, 'index'])->name('sweet.index');

require __DIR__.'/auth.php';
