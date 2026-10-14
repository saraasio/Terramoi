<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Parcellesite extends Controller
{
    public function voir($num)
    {
        return view('parcelle')->with('siteId', $num);
    }
}
