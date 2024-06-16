<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LeverancierController; 
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPerLeverancierController;
use App\Models\Leverancier;
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

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::resource('product', ProductController::class);
Route::get('/product/{product}/levering', [ProductController::class, 'levering'])->name('product.levering');

Route::get('/leverancier/overzicht', [LeverancierController::class, 'leverancier'])->name('leverancier.overzicht');
Route::get('/leverancier/overzicht/{leverancier}', [LeverancierController::class, 'leveranciershow'])->name('leverancier.overzichtshow');

Route::get('/leverancier/overzicht/{leverancier}/edit', [LeverancierController::class, 'edit'])->name('leverancier.edit');
Route::put('/leverancier/overzicht/{leverancier}', [LeverancierController::class, 'update'])->name('leverancier.update');
Route::resource('leverancier', LeverancierController::class);

Route::get('/product/{product}/levering/{leverancier}/create', [ProductPerLeverancierController::class, 'create'])->name('leverancier.create');
Route::post('/product/{product}/levering/{leverancier}', [ProductPerLeverancierController::class, 'store'])->name('leverancier.store');

Route::resource('contact', ContactController::class);

require __DIR__.'/auth.php';
