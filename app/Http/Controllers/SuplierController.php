<?php

namespace App\Http\Controllers;

use App\Models\supliers;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    
public function suplier(){

    $spl = supliers::all();
    return view('supliers', compact('spl'));
}


}
