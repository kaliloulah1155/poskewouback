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
    // return view('welcome');
     return view('dashboard');
});



Route::get('/accueil', function () {
    return view('accueil');
});


Route::get('/inscription_corporate', function () {
    return view('inscription_corporate');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/demande_passeport', function () {
    return view('demande_passeport');
});


Route::get('/profil', function () {
    return view('profil');
});

Route::get('/renouvellement_passeport', function () {
    return view('renouvellement_passeport');
});

Route::get('/historique_achat', function () {
    return view('historique_achat');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('momo', function () {
    return 'bonjour mooise';
});





