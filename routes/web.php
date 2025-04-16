<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\LecturesController::class, 'index'])
    ->name('lectures.index')
    ->middleware('auth.basic'); // Basic authentication middleware
