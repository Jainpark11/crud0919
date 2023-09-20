<?php

use App\Http\Controllers\FindJobController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestingController;

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

Route::group(["middleware" => "authCheck2"], function () {
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
Route::get('/testing/create', function () {
    return view('testing.create');
})->middleware('levelCheck');
Route::get('/testing', function () {
    return view('testing.index');
});
Route::get('/index2', function () {
    return view('testing.index2');
});
//Route::resource('posts', PostController::class)->middleware('authCheck2');
Route::resource('posts', PostController::class);
Route::resource('findjob',FindJobController::class);

Route::get('/unavailable', function () {
    return view('unavailable');
})->name('unavailable');

require __DIR__ . '/auth.php';

Route::get('user-data', function () {
    return Auth::user()->name;
});
