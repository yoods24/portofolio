<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->name('home');
Route::get('/project', [ProjectController::class, 'index'])->name('product.index');
