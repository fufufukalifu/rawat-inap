<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Obat extends Controller
{
    public function tampil_penggunaan_obat(){
        $result = DB::table('obats')->paginate(5);
        return view('Obat.view-obat')->with('data', $result);
    }
}
