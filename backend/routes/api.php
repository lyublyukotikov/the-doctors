<?php

	use App\Http\Controllers\Api\DoctorController;
	use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::apiResource('doctors', DoctorController::class);

Route::get('doctors', [DoctorController::class, 'index']);
Route::get('doctors/{doctor}', [DoctorController::class, 'show']);
Route::post('doctors', [DoctorController::class, 'store']);
Route::patch('doctors/{doctor}', [DoctorController::class, 'update']);
Route::delete('doctors/{doctor}', [DoctorController::class, 'destroy']);