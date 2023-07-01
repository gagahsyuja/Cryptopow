<?php

use App\Http\Controllers\CoinsController;
use App\Http\Controllers\IndexController;
use App\Models\Coin;
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

// Route::get('/', function () {
//     return view('index', ['var' => [IndexController::class, 'index']]);
// });

// Route::get('/', [CoinsController::class, 'index']);

Route::get('/', [IndexController::class, 'index']) -> name('index');

Route::get('/coin/{short}', [IndexController::class, 'show']) -> name('show');