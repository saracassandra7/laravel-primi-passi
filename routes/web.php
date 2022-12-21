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

Route::get('/christmas-songs', function () {

    $playlist = [
        [
            'title' => 'All I Want for Christmas Is You' ,
            'singer' => 'Mariah Carey',
            'year' => 1994,
        ],
        [
            'title' => 'Jingle Bell Rock' ,
            'singer' => 'Billy Idol',
            'year' => 2006,
        ],
        [
            'title' => 'Feliz Navidad' ,
            'singer' => 'Jose Feliciano',
            'year' => 1970,
        ],
        [
            'title' => 'Last Christmas' ,
            'singer' => 'Wham!',
            'year' => 1984,
        ],
        [
            'title' => 'O Holy Night' ,
            'singer' => 'Celine Dion',
            'year' => 1998,
        ],
    ];
    
    return view('songs', compact('playlist'));

});