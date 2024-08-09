<?php

use App\Http\Controllers\Authentication\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::post('/authentication', AuthenticationController::class)->name('authentication');
