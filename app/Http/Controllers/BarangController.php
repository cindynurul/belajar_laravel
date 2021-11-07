<?php

namespace App\Http\Controllers;

use App\Models\Barangs;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    
public function tampilkan(){

    $brg = barangs::all();
    return view('barangs', compact('brg'));
}


}
