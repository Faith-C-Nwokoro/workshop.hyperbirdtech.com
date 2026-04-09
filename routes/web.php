<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\KitController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/workshops', [WorkshopController::class, 'index'])->name('workshops.index');

Route::get('/assignments', [AssignmentController::class, 'index'])->name('assignments.index');
Route::post('/assignments', [AssignmentController::class, 'submit'])->name('assignments.submit');

Route::get('/kits', [KitController::class, 'index'])->name('kits.index');
Route::post('/kits', [KitController::class, 'request'])->name('kits.request');
