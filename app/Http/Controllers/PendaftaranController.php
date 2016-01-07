<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//for make transaction with database
use DB;

use Illuminate\Pagination\LengthAwarePaginator;

class PendaftaranController extends Controller
{
     public function tampil_ruangan(){
        $result = DB::table('pasiens')->paginate(5);
        return view('ruangan.view-ruangan')->with('data', $result);
    }

    public function form() {
        return view('pengunjung.form');
    }

    public function tambah(Request $request) {
        $post   = $request->all();
        $v      = \Validator::make($request->all(),
            [ 
                'id_pasien' => 'required',
                'nama_pasien' => 'required',
                'nama_panggilan' => 'required'
            ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $data = array(
                    'id_pasien' => $post['id_pasien'],
                    'nama_pasien' => $post['nama_pasien'],
                    'nama_panggilan' => $post['nama_panggilan']
                );
            $i = DB::table('pasiens')->insert($data);
            if ($i > 0 ) {
                return redirect('ruangan');
            }
        }
    }

    public function delete($id) {
        $i = DB::table('pasiens')->where('id_pasien', $id)->delete();

        if ($i > 0 ) {
                return redirect('ruangan');
            
        }
    }

    public function edits($id) {
        $row = DB::table('pasiens')->where('id_pasien', $id)->first();
        return view('pengunjung.edit')->with('row', $row);
    }

    public function updates (Request $request) {
        $post   = $request->all();
        $v      = \Validator::make($request->all(),
            [ 
                'nama_pasien' => 'required',
                'nama_panggilan' => 'required'
            ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $data = array(
                    'id_pasien' => $post['id_pasien'],
                    'nama_pasien' => $post['nama_pasien'],
                    'nama_panggilan' => $post['nama_panggilan']
                );
            $i = DB::table('pasiens')->where('id_pasien', $post['id_pasien'])->update($data);
            if ($i > 0 ) {
                return redirect('ruangan');
            }
        }
    }
}
