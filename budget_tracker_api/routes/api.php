<?php

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

/**
 * Jwt Routes.
 */
Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware('auth:api')->group(function () {
        Route::get('me', [AuthController::class, 'me']);
        Route::post('logout', [AuthController::class, 'logout']);
    });
});

Route::middleware(['auth:api', 'admin'])->get('/users', [UserController::class, 'index']);

/**
 * Basic routes
 */
//get all
Route::get('/expenses', [ExpenseController::class, 'index']);

//post expense
Route::post('/expenses', [ExpenseController::class, 'store']);

//total expenses
Route::get('/expenses/total', [ExpenseController::class, 'getTotal']);

//sort expenses by date
Route::get('/expenses/sorted', [ExpenseController::class, 'getSorted']);

//get expenses from user, route is protected
Route::middleware('auth:api')->get('/expenses/my', [ExpenseController::class, 'myExpenses']);

//get expense by id
Route::get('/expenses/{id}', [ExpenseController::class, 'show']);

//update expense
Route::put('/expenses/{id}', [ExpenseController::class, 'update']);

//delete expense
Route::delete('/expenses/{id}', [ExpenseController::class, 'destroy']);
