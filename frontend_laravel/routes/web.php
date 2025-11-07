<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerformanceController;

Route::get('/', [PerformanceController::class, 'index']);
