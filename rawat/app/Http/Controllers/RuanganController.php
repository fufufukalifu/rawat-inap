<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//for make transaction with database
use DB;

use Illuminate\Pagination\LengthAwarePaginator;

class RuanganController extends Controller
{
     public function tampil_ruangan(){
        $result = DB::table('ruangrawatinaps')->select( DB::raw('DISTINCT(jenis_ruangan),keterangan') )->get();
        return view('ruangan.view-ruangan')->with('data', $result);
    }

    public function jenis_ruangan($jenis_ruangan){
    	 $result = DB::table('ruangrawatinaps')->where('jenis_ruangan',$jenis_ruangan)->get();
        return view('ruangan.view-jenisruangan')->with('data', $result);
    }
    

  
}
