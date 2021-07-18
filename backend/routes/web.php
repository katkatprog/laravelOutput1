<?php

use App\Http\Controllers\PlayersController;
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

Route::get('/players', [PlayersController::class, 'index']);
Route::get('/players/{id}', [PlayersController::class, 'show']);
Route::post('/players/create', [PlayersController::class, 'create']);
Route::post('/players/delete/{id}', [PlayersController::class, 'delete']);