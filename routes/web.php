<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[DemoController::class,'createTripForm']);
Route::post('/store-trip', [DemoController::class, 'storeTrip']);
Route::get('/purchase-ticket-form', [DemoController::class, 'purchaseTicketForm'])->name('purchase_ticket_form');
Route::post('/store-ticket', [DemoController::class, 'storeTicket']);
Route::get('/success', [DemoController::class, 'success']);