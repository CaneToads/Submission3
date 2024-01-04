<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/create', [PageController::class, 'create'])->name('create');
Route::get('/update', [PageController::class, 'update'])->name('update');
Route::get('/delete', [PageController::class, 'delete'])->name('delete');
