<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Product;

// use App\Http\Controllers\HomeController;

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

Route::get('new',[HomeController::class,'index']);

Route::get('/dashboard', function () {
    $products = Product::take(20)->get();
    return view('dashboard',[
        'products'=>$products
    ]);
})->middleware(['auth'])->name('dashboard');
Route::get('allCart',[CartController::class,'index'])->middleware(['auth'])->name('cart');
Route::get('cart/{id}',[CartController::class,'add'])->middleware(['auth'])->name('addCart');

require __DIR__.'/auth.php';
