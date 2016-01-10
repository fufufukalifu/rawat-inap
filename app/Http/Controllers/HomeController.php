<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function daftar_pengunjung(){
        return view('pengunjung.form-pengunjung');
    }

    public function update_pendaftaran(){
        return view('pengunjung.update-pendaftaran');
    }

     public function tampil_ruangan(){
        return view('ruangan.view-ruangan');
    }

     public function tampil_obat(){
        return view('obat.view-obat');
    }
    //  public function tampil_opik2(){
    //     return view('ruangan.view-ruangan');
    // }
    public function daftar_pasien(){
        return view('Pasien.form-pendaftaran');
    }
    // }
    //  public function tampil_didik2(){
    //     return view('ruangan.view-ruangan');
    // }
          public function tampil_jenis_ruangan(){
        return view('ruangan.view-jenisruangan');
    }
    //  public function tampil_aziz(){
    //     return view('ruangan.view-ruangan');
    // }
    //  public function tampil_opi(){
    //     return view('ruangan.view-ruangan');
    // }
    // public function tampil_opi(){
    //     return view('ruangan.view-ruangan');
    // }
    // public function anggi(){
    //     return view('ruangan.view-ruangan');
    // }
    // public function anggi2(){
    //     return view('ruangan.view-ruangan');
    // }
}
