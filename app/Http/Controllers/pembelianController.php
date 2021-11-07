<?php

namespace App\Http\Controllers;

use App\Models\pembelians;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    
public function data(){

    $pmb = pembelians::all();
    return view('pembelians', compact('pmb'));
}


}
