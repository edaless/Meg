<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])->name('home');

// event
Route::get('/event/create', [MainController::class, 'eventCreate'])
    ->name('event.create');
Route::post('/event/store', [MainController::class, 'eventStore'])
    ->name('event.store');
Route::get('/event/delete/{event}', [MainController::class, 'eventDelete'])
    ->name('event.delete');

// type
Route::get('/type/create', [MainController::class, 'typeCreate'])
    ->name('type.create');
Route::post('/type/store', [MainController::class, 'typeStore'])
    ->name('type.store');
Route::get('/type/delete/{type}', [MainController::class, 'typeDelete'])
    ->name('type.delete');
