<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
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
//     return view('welcome');
// });

Route::get('/', [StockController::class, 'index'])->name('stock.index');

Route::get('/myCart', [StockController::class, 'myCart'])->name('stock.myCart');

Route::middleware('auth')->group(function () {
    Route::get('/', [StockController::class, 'index'])->name('stock.index');
    Route::get('/myCart', [StockController::class, 'myCart'])->name('stock.myCart');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/addMyCart', [StockController::class, 'addMyCart'])->name('stock.addMyCart'); //追記
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
