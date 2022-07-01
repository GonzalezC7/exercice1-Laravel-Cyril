<?php

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
    return view('welcome');
})->name('clients.accueil');

Route::get('/clients', function () {
    return view('clients');
})->name('clients');

Route::get('/clients/{id}', function ($id) {
    return "Client Numéro " . $id;
})->name('clients.show');

Route::post('/clients/{id}', function ($id) {
    return view('clients');
})->name('clients.create');

Route::put('/clients/{id}', function ($id) {
    return "Modification du client " . $id;
})->name('clients.update');

Route::delete('/clients/{id}', function ($id) {
    return "Suppression du client " . $id;
})->name('clients.delete');
