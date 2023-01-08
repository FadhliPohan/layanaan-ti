<?php

use App\Http\Controllers\AduanController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\ScrupController;
use App\Http\Controllers\SperpatController;
use App\Models\Aduan;
use App\Models\Inventaris;
use App\Models\Sperpat;
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

Route::get('/', function () {
    return view('welcome');
});

// sperpat
Route::group(['prefix' => 'sperpat'], function () {
    Route::get('/', [SperpatController::class, 'index']);
    Route::get('/get', [SperpatController::class, 'get']);
    Route::get('/{id}', [SperpatController::class, 'getById']);
    Route::post('/store', [SperpatController::class, 'store']);
    Route::delete('/{id}', [SperpatController::class, 'destroy']);
    Route::put('/{id}', [SperpatController::class, 'update']);
});
//aduan
Route::group(['prefix' => 'aduan'], function () {
    Route::get('/', [AduanController::class, 'index']);
    Route::post('/store', [AduanController::class, 'store']);
    Route::get('/get', [AduanController::class, 'get']);
    Route::get('/get/{id}', [AduanController::class, 'getById']);
    Route::delete('/{id}', [AduanController::class, 'destroy']);
    Route::put('/{id}/edit', [AduanController::class, 'update']);
});
//inventaris
Route::group(['prefix' => 'inventaris'], function () {
    Route::get('/', [InventarisController::class, 'index']);
    Route::get('/get', [InventarisController::class, 'get']);
    Route::get('/get/{id}', [InventarisController::class, 'getById']);
    Route::post('/store', [InventarisController::class, 'store']);
    Route::delete('/{id}', [InventarisController::class, 'destroy']);
    Route::put('/{id}', [Inventaris::class, 'update']);
});

//scrup
Route::group(['prefix' => 'scrup'], function () {
    Route::get('/', [ScrupController::class, 'index']);
    Route::get('/get', [ScrupController::class, 'get']);
    Route::get('/{id}', [ScrupController::class, 'getById']);
    Route::delete('/{id}', [ScrupController::class, 'destroy']);
    Route::put('/{id}', [ScrupController::class, 'update']);
    Route::post('/store', [ScrupController::class, 'store']);
});
