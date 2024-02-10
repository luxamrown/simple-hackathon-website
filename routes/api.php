<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::POST('/login', [AuthController::class,'login'])->name('login');
Route::POST('/register', [AuthController::class,'register'])->name('register');

Route::POST('/dashboard', [DashboardController::class,'getGroupData'])->name('getGroupData');
Route::POST('/savefile', [DashboardController::class,'saveFile'])->name('saveFile');



