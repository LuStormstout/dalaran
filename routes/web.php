<?php

use App\Http\Controllers\LecturesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LecturesController::class, 'index'])
    ->name('lectures.index');

Route::get('/lectures/interview-guide', [LecturesController::class, 'interviewGuide'])->name('lectures.interview-guide');
