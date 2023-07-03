<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PlotController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/', function () {
    return redirect()->Route('login');
});
Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');






Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//plots routes

Route::post('/viewplots', [PlotController::class, 'storedata'])->name('viewplots.store');
Route::get('/addplot',[PlotController::class,'addplot'])->name('addplot');
Route::get('/viewplots',[PlotController::class,'viewdata'])->name('viewplots');
Route::post('plot_delete', [PlotController::class, 'deleteplot'])->name('plot_delete');

Route::get('editplot/{id}', [PlotController::class, 'editplotdata']);

Route::post('/update', [PlotController::class, 'editplotsave'])->name('update');
Route::post('/checkplotvalue' , [PlotController::class, 'checkplotvalue'])->name('checkplotvalue');




//customers Routes
Route::get('/customers',[CustomerController::class,'showcustomer'])->name('customers');
Route::get('/addcustomer',[CustomerController::class,'addcustomer'])->name('addcustomer');
Route::post('/addcustomer',[CustomerController::class,'storecustomer'])->name('addcustomer.store');
Route::post('deletecustomers', [CustomerController::class, 'deletecustomers'])->name('deletecustomers');
Route::get('/editcustomer/{id}', [CustomerController::class, 'editcustomer'])->name('editcustomer');
Route::post('/updatecustomer', [CustomerController::class, 'updatecustomer'])->name('updatecustomer');

//booking Routes
Route::get('/booking',[BookingController::class,'showbooking'])->name('booking');
Route::get('/addbooking',[BookingController::class,'addbooking'])->name('addbooking');
