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

Route::get('/about', [IndexController::class, 'about']) -> name('about');

Route::get('/watchlist', [IndexController::class, 'watchlist']) -> name('watchlist');

// Route::get('/help', [IndexController::class, 'help']) -> name('help');

Route::get('/account', [IndexController::class, 'account']) -> name('account');

Route::post('/account/login', [IndexController::class, 'login']) -> name('login');

Route::get('/account/logout', [IndexController::class, 'logout']) -> name('logout');

Route::get('/coin/{short}', [IndexController::class, 'show']) -> name('show');

Route::post('/store', [IndexController::class, 'store']);

Route::get('/watchlist', [IndexController::class, 'watchlist']) -> name('watchlist');