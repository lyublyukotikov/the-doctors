<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\FailedRecordController;
use App\Http\Controllers\Api\HospitalController;
use App\Http\Controllers\Api\RecordController;
use App\Http\Controllers\Api\SlotController;
use App\Http\Middleware\IsAdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::post('auth/register', [AuthController::class, 'register']);

Route::post('auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'jwt.auth', 'prefix' => 'auth'], function () {
	Route::post('logout', [AuthController::class, 'logout']);
	Route::post('refresh', [AuthController::class, 'refresh']);
	Route::post('me', [AuthController::class, 'me']);

});

Route::group(['middleware' => ['jwt.auth', IsAdminMiddleware::class]], function () {
	Route::delete('doctors/{doctor}', [DoctorController::class, 'destroy']);
});

Route::get('doctors', [DoctorController::class, 'index']);
Route::get('doctors/{doctor}', [DoctorController::class, 'show']);
Route::post('doctors', [DoctorController::class, 'store']);
Route::patch('doctors/{doctor}', [DoctorController::class, 'update']);
Route::delete('doctors/{doctor}', [DoctorController::class, 'destroy']);

Route::get('clients', [ClientController::class, 'index']);
Route::get('clients/{client}', [ClientController::class, 'show']);
Route::post('clients', [ClientController::class, 'store']);
Route::patch('clients/{client}', [ClientController::class, 'update']);
Route::delete('clients/{client}', [ClientController::class, 'destroy']);

Route::get('hospitals', [HospitalController::class, 'index']);
Route::get('hospitals/{hospital}', [HospitalController::class, 'show']);
Route::post('hospitals', [HospitalController::class, 'store']);
Route::patch('hospitals/{hospital}', [HospitalController::class, 'update']);
Route::delete('hospitals/{hospital}', [HospitalController::class, 'destroy']);

Route::get('failed-records', [FailedRecordController::class, 'index']);
Route::get('failed-records/{failedRecord}', [FailedRecordController::class, 'show']);
Route::post('failed-records', [FailedRecordController::class, 'store']);
Route::patch('failed-records/{failedRecord}', [FailedRecordController::class, 'update']);
Route::delete('failed-records/{failedRecord}', [FailedRecordController::class, 'destroy']);

Route::get('records', [RecordController::class, 'index']);
Route::get('records/{record}', [RecordController::class, 'show']);
Route::post('records', [RecordController::class, 'store']);
Route::patch('records/{record}', [RecordController::class, 'update']);
Route::delete('records/{record}', [RecordController::class, 'destroy']);

Route::get('slots', [SlotController::class, 'index']);
Route::get('slots/{slot}', [SlotController::class, 'show']);
Route::post('slots', [SlotController::class, 'store']);
Route::patch('slots/{slot}', [SlotController::class, 'update']);
Route::delete('slots/{slot}', [SlotController::class, 'destroy']);

