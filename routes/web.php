<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\groupController;
use App\Http\Controllers\contactController;

Route::get('/', [groupController::class , 'index']);
Route::get('/home', [groupController::class , 'index']);
Route::get('/groups', [groupController::class , 'groups']);
Route::get('/contacts' , [contactController::class , 'index']);
Route::get('/group' , [groupController::class , 'showOneGroup']);