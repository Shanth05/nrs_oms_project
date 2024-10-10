<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CashLedgerController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\DoctorPrescriptionController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FrameController;
use App\Http\Controllers\LenseController;



Route::get('/', function () {
    return view('welcome');
});


Route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);
Route::resource('cashledger', CashLedgerController::class);
Route::resource('orderitem', OrderItemController::class);
Route::resource('doctorprescriptions', DoctorPrescriptionController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('frames', FrameController::class);
Route::resource('lenses', LenseController::class);
