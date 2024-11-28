<?php

use App\Http\Controllers\wishlistController;
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


Route::get('/wishlist', [wishlistController::class, 'index'])->name('wishlist.index');
Route::post('/wishlist', [wishlistController::class, 'store'])->name('wishlist.store');


Route::get('/', function () {
    return view('welcome');
});
