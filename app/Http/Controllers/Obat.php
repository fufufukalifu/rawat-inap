<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class Obat extends Controller
{
    public function tampil_penggunaan_obat(){
        $result = DB::table('obats')->paginate(5);
        return view('Obat.view-obat')->with('data', $result);
    }

    public function tambah(Request $request) {
        $post   = $request->all();
        $v      = \Validator::make($request->all(),
            [ 
                'id_obat' => 'required',
                'nama_obat' => 'required',
                'rute_pemberian' => 'required',
                'dosis' => 'required',
                'harga' => 'required',

            ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $data = array(
                    'id_obat' => $post['id_obat'],
                    'nama_obat' => $post['nama_obat'],
                    'rute_pemberian' => $post['rute_pemberian'],
                    'dosis' => $post['dosis'],
                    'harga' => $post['harga'],

                );
            $i = DB::table('obats')->insert($data);
            if ($i > 0 ) {
                return redirect('obat');
            }
        }
    }

    public function search(Request $request){
        return view('Obat.view-hasil-pencarian-pasien');    

    // // Gets the query string from our form submission 
    // $query = Request::input('no-pendaftaran');
    // // Returns an array of articles that have the query string located somewhere within 
    // // our articles titles. Paginates them so we can break up lots of search results.
    // $daftar_pasien = DB::table('pasiens')->where('id_pasien', 'LIKE', '%' . $query . '%')->paginate(10);
    // // returns a view and passes the view the list of articles and the original query.
    // return view('Obat.hasil_pencarian_pasien', compact('daftar_pasien', 'query'));
 }
}
