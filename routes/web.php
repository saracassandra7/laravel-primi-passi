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
    $saluto = 'Hello';
    $mondo = 'World!';

    $stampa_paragrafo = true;
    $lista = ['Culpa aspernatur', 'Recusandae autem', 'Labore saepe ducimus temporibus', 'Tempore dicta laudantium', 'Exercitationem voluptate similique', 'Expedita veniam'];

    return view('home', compact('saluto', 'mondo', 'stampa_paragrafo', 'lista'));
});
