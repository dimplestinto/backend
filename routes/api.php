<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MessageController;

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


Route::get('/message', [MessageController::class, 'index']);
Route::get('/message/{id}', [MessageController::class, 'show']);
Route::delete('/message', [MessageController::class, 'destroy']);
Route::post('/message', [MessageController::class, 'store']) ->name('message.store');

// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::post('/user', [UserController::class, 'store']) ->name('user.store');
// Route::put('/user/{id}', [UserController::class, 'update']) ->name('user.update');
// Route::put('/user/email/{id}', [UserController::class, 'email']) ->name('user.email');
// Route::put('/user/password/{id}', [UserController::class, 'password']) ->name('user.password');
// Route::delete('/user', [UserController::class, 'destroy']);