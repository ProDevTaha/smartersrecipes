<?php

use App\Http\Controllers\DetailsController;
use App\Http\Controllers\CheckoutController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/return', function () {
    return view('return');
});

Route::controller(CheckoutController::class)->group(function(){
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

Route::match(['get','post'] , '/checkout/{price}' , [CheckoutController::class , 'checkoutSimple'] );

Route::get('/details/{index}',[DetailsController::class , 'index']);