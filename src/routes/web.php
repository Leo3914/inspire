<?php

use Illuminate\Support\Facades\Route;
use Leo3914\Controllers\InspirationController;

Route::get('/inspire', [InspirationController::class,'index']);
