<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ParcelleController;
=======
>>>>>>> 6666deea65324aac50c9586c4e3f8ccbc5b015b9

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::get('/sites', [SiteController::class, 'getLesSites' ]);
Route::get('/parcelles', [ParcelleController::class, 'getLesParcelles']);
Route::get('/parcelles/{num}', [ParcelleController::class, 'getUneParcelle']);
Route::get('/sites/parcelles', function () {
    return view('bienvenue sur la liste des parcelles ');
});

Route::get('/sites/parcelles/parcelle/{num}', function ( $num ) {
    return view('Voici la parcelle n° $num : ');
});

=======
>>>>>>> 6666deea65324aac50c9586c4e3f8ccbc5b015b9
