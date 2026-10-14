<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ParcelleController;
use App\Http\Controllers\EspacePersonnelGestionnaireController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sites', [SiteController::class, 'getLesSites' ]);
Route::get('/sites/parcelles', [ParcelleController::class, 'getLesParcelles']);
Route::get('/sites/parcelles/{num}', [ParcelleController::class, 'getUneParcelle']);
Route::get('/espacepersonnelgestionnaire', [EspacePersonnelGestionnaireController::class, 'getEspacePersonnelGestionnaire']);
Route::get('/sites/parcelles/parcelle/{num}', function ( $num ) {
    return view('Voici la parcelle n° $num : ');
});


