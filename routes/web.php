<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  
  return view('welcome');

});

Route::middleware(['auth', 'verified'])->group(function () {

  Route::get('/dashboard', function () {
    return view('app.dashboard');
  })->name('dashboard');

  Route::get('/second', function () {
    return view('app.second');
  })->name('second');

});

Route::middleware('auth')->group(function () {

  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';
