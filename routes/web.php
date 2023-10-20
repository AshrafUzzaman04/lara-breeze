<?php

use App\Http\Controllers\FirstController;
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


Route::get('/first', function () {
    return app()->make("first_service_helper");
});


Route::get('/second', function () {
    return app()->make("second_service_helper");
});

Route::get('/third', function () {
    return app()->make("third_service_helper");
});

Route::get("/about", function () {
    return view('about');
});

Route::get("/ffffffffffff", function () {
    return view('contact');
})->name("contact");

Route::get("/country", [FirstController::class, 'index'])->middleware("country");






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
