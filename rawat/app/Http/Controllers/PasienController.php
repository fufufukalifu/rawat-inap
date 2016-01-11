<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('pasiens')
                ->join('ruangrawatinaps', 'pasiens.id_ruangan', '=', 'ruangrawatinaps.no')
                ->select('pasiens.*','ruangrawatinaps.*')
                ->orderBy('pasiens.nama_pasien')
                ->get();
        $result = DB::table('pasiens')->orderBy('nama_pasien')->get();
        return view('pasien.index')->with('pasien', $result);
    }

    public function search(Request $request){
        $search = \Request::get('search'); //<-- we use global request to get the param of URI 
        $pasiens = DB::table('pasiens')
                    ->where('nama_pasien', 'like', "%$search%")
                    ->get();   
        return view('pasien.index',compact('pasiens'));
    }
    public function tampilpasien($id) {
        $row = DB::table('pasiens')
                ->where('id_pasien', $id)
                ->join('ruangrawatinaps', 'pasiens.id_ruangan', '=', 'ruangrawatinaps.no')
                ->select('pasiens.*','ruangrawatinaps.*')
                ->orderBy('pasiens.nama_pasien')
                ->first();
        return view('pasien.show')->with('row', $row);
    }


    /**
     * Show the form for creating a new resource.

     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function formPasien($id) {
        $row = DB::table('ruangrawatinaps')->where('no', $id)->first();
        return view('pasien.create')->with('row', $row);
        // return view('pasien.create');
    }

    public function tambahpasien(Request $request) {
        $post   = $request->all();
        $v      = \Validator::make($request->all(),
            [ 
                'id_pasien' => 'required',
                'nama_pasien' => 'required',
                'nama_panggilan' => 'required',
                'jenis_kelamin' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'umur' => 'required',
                'kecamatan' => 'required',
                'kelurahan' => 'required',
                'alamat' => 'required',
                'telepon' => 'required',
                'agama'  => 'required',
                'meritial_status' => 'required',
                'pekerjaan' => 'required',
                'nama_penanggungjawab' => 'required',
                'alamat_penanggungjawab' => 'required',
                'nama_pasangan' => 'required',               
                'id_ruangan' => 'required'
                // 'no' => 'required'
            ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $data = array(
                    'id_pasien' => $post['id_pasien'],
                    'nama_pasien' => $post['nama_pasien'],
                    'nama_panggilan' => $post['nama_panggilan'],
                    'jenis_kelamin' => $post['jenis_kelamin'],
                    'tempat_lahir' => $post['tempat_lahir'],
                    'tanggal_lahir' => $post['tanggal_lahir'],
                    'umur' => $post['umur'],
                    'kecamatan' => $post['kecamatan'],
                    'kelurahan' => $post['kelurahan'],
                    'alamat' => $post['alamat'],
                    'telepon' => $post['telepon'],
                    'agama' => $post['agama'],
                    'meritial_status' => $post['meritial_status'],
                    'pekerjaan' => $post['pekerjaan'],
                    'nama_penanggungjawab' => $post['nama_penanggungjawab'],
                    'alamat_penanggungjawab' => $post['alamat_penanggungjawab'],
                    'nama_pasangan' => $post['nama_pasangan'],
                    'id_ruangan' => $post['id_ruangan']
                );
            $i = DB::table('pasiens')->insert($data);
            if ($i > 0 ) {
                return redirect('pasien');
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
        return view('pasien.edit')->with('row', $row);
    }

    public function updatespasien(Request $request) {
        $post   = $request->all();
        $v      = \Validator::make($request->all(),
            [ 
                'id_pasien' => 'required',
                'nama_pasien' => 'required',
                'nama_panggilan' => 'required',
                'jenis_kelamin' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'umur' => 'required',
                'kecamatan' => 'required',
                'kelurahan' => 'required',
                'alamat' => 'required',
                'telepon' => 'required',
                'pekerjaan' => 'required',
                'nama_penanggungjawab' => 'required',
                'alamat_penanggungjawab' => 'required',
                'nama_pasangan' => 'required'
            ]);
        
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $data = array(
                    'id_pasien' => $post['id_pasien'],
                    'nama_pasien' => $post['nama_pasien'],
                    'nama_panggilan' => $post['nama_panggilan'],
                    'jenis_kelamin' => $post['jenis_kelamin'],
                    'tempat_lahir' => $post['tempat_lahir'],
                    'tanggal_lahir' => $post['tanggal_lahir'],
                    'umur' => $post['umur'],
                    'kecamatan' => $post['kecamatan'],
                    'kelurahan' => $post['kelurahan'],
                    'alamat' => $post['alamat'],
                    'telepon' => $post['telepon'],
                    'pekerjaan' => $post['pekerjaan'],
                    'nama_penanggungjawab' => $post['nama_penanggungjawab'],
                    'alamat_penanggungjawab' => $post['alamat_penanggungjawab'],
                    'nama_pasangan' => $post['nama_pasangan']
                );
            $i = DB::table('pasiens')->where('id_pasien', $post['id_pasien'])->update($data);
            if ($i > 0 ) {
                return redirect('pasien');
            }
        }
    }
    


}
