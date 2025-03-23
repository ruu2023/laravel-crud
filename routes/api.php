<?php

use App\Http\Controllers\AuthController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    // 認証不要ルート
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);

    // 認証が必要なルート
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/hello', function () {
            return response()->json(['message' => 'Hello, authenticated user!']);
        });
        Route::get('/user', function () {
            $user = User::all();
            return response()->json(['message' => $user]);
        });
    });
});

Route::get('/test', function () {
    return response()->json(['message' => 'feel']);
});
