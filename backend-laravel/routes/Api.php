<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;

Route::apiResource('mobils', MobilController::class);
