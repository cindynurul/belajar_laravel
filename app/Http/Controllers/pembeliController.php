<?php

namespace App\Http\Controllers;

use App\Models\pembelis;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    
public function pembeli(){

    $pmbl = pembelis::all();
    return view('pembelis', compact('pmbl'));
}


}
