<?php

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;

//get all
Route::get('/expenses', [ExpenseController::class, 'index']);

//post expense
Route::post('/expenses', [ExpenseController::class, 'store']);
