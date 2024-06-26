<?php

use App\Http\Controllers\api\TimetableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/timetables', [TimetableController::class, 'index'])->name('timetable.index');