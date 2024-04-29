<?php

use App\Http\Controllers\GegevensController;
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
})->name('homepage');

Route::get('/allergeen/index', [GegevensController::class, 'index'])->name('allergeen.index');

Route::post('/allergeen/index', [GegevensController::class, 'index'])->name('allergeen.index');

Route::get('/leverancier/index/{data}', [GegevensController::class, 'indexLeverancier'])->name('leverancier.index');
