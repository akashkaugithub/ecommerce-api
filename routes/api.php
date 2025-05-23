<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/Getproducts', [ProductController::class, 'myProducts']);       
Route::post('/createProducts', [ProductController::class, 'createProduct']);         
Route::put('/updateProducts/{id}', [ProductController::class, 'updateProduct']);  
// Route::patch('/products/{id}', [ProductController::class, 'update']); 
Route::delete('/destroyProducts/{id}', [ProductController::class, 'destroyProduct']);
Route::delete('/editProducts/{id}', [ProductController::class, 'editProduct']);

