<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParcelleController extends Controller
{
    public function getLesParcelles(){
	return "les parcelles";
	}
    public function getUneParcelle( $num ){
	return view('parcelle') -> with( 'num' , $num );
	}
}
