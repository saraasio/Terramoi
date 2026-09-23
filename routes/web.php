<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sites', function () {
    return view('bienvenue sur le site');
});


Route::get('/sites/parcelles', function () {
    return view('bienvenue sur la liste des parcelles ');
});

Route::get('/sites/parcelles/parcelle/{num}', function ( $num ) {
    return view('Voici la parcelle n° $num : ');
});

