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
Route::get('/contacts/ajax', [ContactController::class, 'ajaxFilter']);

// Post
Route::post('/groups/store', [groupController::class , 'store'])->name('groups.store');
Route::post('/contacts/store', [contactController::class , 'store'])->name('contacts.store');
Route::put('/contacts/store', [contactController::class , 'update'])->name('contacts.store');
Route::put('/groups/store', [groupController::class , 'store'])->name('groups.update');
Route::delete('/groups/store', [groupController::class , 'destroy'])->name('groups.delete');
Route::delete('/contacts/store' , [contactController::class , 'destroy']);