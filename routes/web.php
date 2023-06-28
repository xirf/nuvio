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
    return view('app', ['title' => 'Custom Title']);
});

// /product/:id 
Route::get("/product/{id}", function($id) {
    return view('product', ['title' => 'Product ' . $id]);
});