<?php

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
    $data = [
        'title' => 'BENVENUTO SU BOOLANDO!',
    ];
    return view('home', $data);
})->name('home');


// creo rotta per products 

Route::get('/products-boolando', function () {
    // prendo array da config->products.php cosi qui non occupa spazio
    $dress = config('products');

    $data = [
        'title' => 'I nostri Prodotti',
        'dress' => $dress
    ];

    return view('products', $data);
})->name('products');


// creo rotta per about 

Route::get('/about-boolando', function () {
    $data = [
        'title' => 'About us',
    ];
    return view('about', $data);
})->name('about');
