<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('/items', ItemController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/item-category', ItemCategoryController::class);
    Route::resource('/transaction', TransactionController::class);
    //use this to get all the subcategories
    Route::resource('/subcategory', SubcategoryController::class);
});

Route::post('/register', [ AuthController::class, 'register' ]);
Route::post('/login', [ AuthController::class, 'login' ]);

