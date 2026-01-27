<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\groupController;
use App\Http\Controllers\contactController;

// Get
Route::get('/', [groupController::class , 'index']);
Route::get('/home', [groupController::class , 'index']);
Route::get('/groups', [groupController::class , 'groups']);
Route::get('/contacts' , [contactController::class , 'index']);
Route::get('/group' , [groupController::class , 'showOneGroup']);

// Post
Route::post('/home' , [groupController::class , 'store'])->name('groups.store');
Route::post('/groups' , [groupController::class , 'store'])->name('groups.store');