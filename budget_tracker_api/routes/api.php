<?php

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;

//get all
Route::get('/expenses', [ExpenseController::class, 'index']);

//post expense
Route::post('/expenses', [ExpenseController::class, 'store']);

//total expenses
Route::get('/expenses/total', [ExpenseController::class, 'getTotal']);

//sort expenses by date
Route::get('/expenses/sorted', [ExpenseController::class, 'getSorted']);

//get expense by id
Route::get('/expenses/{id}', [ExpenseController::class, 'show']);

//uptdate expense
Route::put('/expenses/{id}', [ExpenseController::class, 'update']);

//delete expense
Route::delete('/expenses/{id}', [ExpenseController::class, 'destroy']);
