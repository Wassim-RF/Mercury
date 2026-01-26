<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\groupController;

Route::get('/', [groupController::class , 'index']);