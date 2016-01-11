<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PembayaranController extends Controller
{
    public function index(){       
            return view('pembayaran.form-pembayaran');
        }
    public function searchpembayaran(Request $request){
        $search = \Request::get('searchpembayaran'); //<-- we use global request to get the param of URI 
        $pasiens = DB::table('pasiens')
        			->join('ruangrawatinaps', 'pasiens.id_ruangan', '=', 'ruangrawatinaps.no')
                	->select('pasiens.*','ruangrawatinaps.*')
                    ->where('nama_pasien', 'like', "%$search%")
                    ->get();   
        return view('pembayaran.form-pembayaran',compact('pasiens'));
    }

    public function searchpembayarantampil(Request $request){
        $search = \Request::get('nama_pasien'); //<-- we use global request to get the param of URI 
        $pasiens = DB::table('pasiens')
        			->join('ruangrawatinaps', 'pasiens.id_ruangan', '=', 'ruangrawatinaps.no')
        			->join('rekapobats', 'pasiens.no', '=', 'rekapobats.no')
                	->select('pasiens.*','ruangrawatinaps.*','rekapobats.*')
                    ->where('nama_pasien', 'like', "%$search%")
                    ->get();   
        return view('pembayaran.form-pembayaran',compact('pasiens'));
    }
}
