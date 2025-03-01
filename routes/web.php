<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SihadeController;
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

Route::get('/', [SihadeController::class, 'index']);


// Route::get('/', function () {
//     // return view('welcome');
//     return view('frontend.00_full.index');
// });

Route::get('/404', function () {
    // return view('welcome');
    return view('404');
});

Route::get('/bahan2', function () {
    // return view('welcome');
    return view('frontend.00_full.bahan2');
});


Route::get('/dashboard', [AdministratorController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
