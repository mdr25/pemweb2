<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\TokoController;


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
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::prefix('toko')->group(function () {
    Route::get('/', [TokoController::class, 'index']);
    Route::get('/detail', [TokoController::class, 'detail']);
    Route::get('/about', [TokoController::class, 'about']);


    Route::get('/admin', [TokoController::class, 'admin'])->name('produk.admin');
    Route::get('create', [TokoController::class, 'create'])->name('produk.create');
    Route::post('store', [TokoController::class, 'store'])->name('produk.store');


    Route::get('/customers', [TokoController::class, 'customers'])->name('produk.customers');
    Route::get('AddCustomer', [TokoController::class, 'AddCustomer'])->name('produk.AddCustomer');
    Route::post('NewCustomer', [TokoController::class, 'NewCustomer'])->name('produk.NewCustomer');
});
