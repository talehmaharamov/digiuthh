<?php

use DigitalCreative\Filepond\Http\Controllers\FilepondController;
use Illuminate\Support\Facades\Route;

Route::post('/process', [ FilepondController::class, 'process' ])->name('nova.filepond.process');
Route::delete('/revert', [ FilepondController::class, 'revert' ])->name('nova.filepond.revert');
Route::get('/load', [ FilepondController::class, 'load' ])->name('nova.filepond.load');
