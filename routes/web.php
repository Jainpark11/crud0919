<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(["middleware"=>"authCheck2"], function(){
    Route::get('/pro', function () {
        return view('post.pro');
    });
    Route::get('/ds', function () {
        return view('post.ds');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Route::resource('posts', PostController::class)->middleware('authCheck2');
Route::resource('posts', PostController::class)->middleware('authCheck2');
Route::get('/unavailable', function () {
    return view('unavailable');
})->name('unavailable');

require __DIR__ . '/auth.php';
