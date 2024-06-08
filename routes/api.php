<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\DeveloperController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/skills', [SkillController::class, 'index']);


Route::post('/developers', [DeveloperController::class, 'store']);
