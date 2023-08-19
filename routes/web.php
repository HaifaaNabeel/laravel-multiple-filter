<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

// Route::get('/AllProducts', function () {
//     return view('AllProducts');
// });
// Route::get('/AllProducts', [ProductController::class, 'index'])->name('AllProducts');
Route::resource('/Products', ProductController::class, ['names' => 'Products']);
Route::get('/AllProducts', [ProductController::class, 'allProductSubmit'])->name('AllProducts');
Route::get('/searchProducts', [ProductController::class, 'searchProducts'])->name('searchProducts');
Route::get('/filter-products', [ProductController::class, 'filterProducts'])->name('/filter-products');
// Route::get('/filter-products', 'ProductController@filterProducts');



