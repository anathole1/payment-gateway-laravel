<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('ebok', [PaymentController::class,'index'])->name('ebok');
Route::post('ebok/payment',[PaymentController::class,'store'])->name('ebok.payment');
Route::get('ebok/callback',[PaymentController::class,'callback'])->name('ebok-callback');
