<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ParcelleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sites', [SiteController::class, 'getLesSites' ]);
Route::get('/parcelles', [ParcelleController::class, 'getLesParcelles']);
Route::get('/parcelles/{num}', [ParcelleController::class, 'getUneParcelle']);
Route::get('/sites/parcelles', function () {
    return view('bienvenue sur la liste des parcelles ');
});

Route::get('/sites/parcelles/parcelle/{num}', function ( $num ) {
    return view('Voici la parcelle n° $num : ');
});

