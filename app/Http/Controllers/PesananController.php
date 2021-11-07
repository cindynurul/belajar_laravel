<?php

namespace App\Http\Controllers;

use App\Models\pesanans;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    
public function pesanan(){

    $psn = pesanans::all();
    return view('pesanans', compact('psn'));
}


}
