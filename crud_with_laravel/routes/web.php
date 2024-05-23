<?php

use App\Http\Controllers\ClientController;
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
    return view('welcome');
});

Route::get('/client', [ClientController::class, 'index'])->name('client.index');

Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/client', [ClientController::class, 'store'])->name('client.store');


Route::get('/client/{client}/update', [ClientController::class, 'update'])->name('client.update');
Route::put('/client/{client}', [ClientController::class, 'put'])->name('client.update.put');

Route::delete('/client/{client}/delete', [ClientController::class, 'delete'])->name('client.delete');
