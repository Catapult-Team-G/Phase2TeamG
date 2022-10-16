<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SweetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;

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

Route::post('review.confirm', [ReviewController::class,'confirm'])->name('review.confirm');
Route::post('sweet.confirm', [SweetController::class,'confirm'])->name('sweet.confirm');
Route::group(['middleware' => 'auth'], function () {
    /*
    Route::resource('sweet', SweetController::class);
    */
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
