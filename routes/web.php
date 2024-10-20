<?php


use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Http\Controllers\Guest\MainController;


Route::get('/', [MainController::class, 'index'])->name('guest.home');