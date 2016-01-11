<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class Obat extends Controller
{
    public function tampil_penggunaan_obat(){
        $data['obats'] = DB::table('obats')->get();
        $data['pasiens'] = DB::table('pasiens')->take(1)->get();
        // $data['pasiens'] = DB::table('pasiens')
        //             ->where('nama_pasien', 'like', "$search%")
        //             ->get(); 
        return view('Obat.view-obat')->with('data', $data);
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

    // public function search(Request $request, $key){
    //     $search = \Request::get('key'); //<-- we use global request to get the param of URI 
    //     $pasiens = DB::table('pasiens')
    //                 ->where('nama_pasien', 'like', "$search%")
    //                 ->get();   
    //     return $pasiens;
    // }
    public function search(Request $request){
        //fungsi untuk mencaridata pasien

        $post   = $request->all();//<-- we use global request to get the param of URI 
         $data['pasiens'] = DB::table('pasiens')
                    ->where('id_pasien', $post['key'])
                    ->get();   
        //untuk menampilkan data obat

        $data['obats'] = DB::table('obats')->get();
        $search = \Request::get('key');

        return view('Obat.view-obat')->with('data', $data);
        
    }
}
