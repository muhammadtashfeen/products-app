<?php

use App\Http\Controllers\BackendProductsController;
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
    return redirect()->route('backend.products.index');
});

Route::prefix('backend')->name('backend.')->group(function () {

    Route::resource('products', BackendProductsController::class)->only([
        'index',
        'show',
        'update',
        'create',
        'store',
        'destroy'
    ]);
});
