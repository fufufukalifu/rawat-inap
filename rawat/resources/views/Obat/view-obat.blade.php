@extends('layouts.main')
@section('content')

<!-- Modal -->



<div class="row mt">
  <h1>Coba</h1>
<!-- data pasien -->
<div class="col-lg-12">
   <div class="form-panel">
    <h4 class="mb">Data Pasien</h4>
    <!-- <form class="form-horizontal style-form" method="get" action="{{action('Obat@search')}}">-->
    <form class="form-horizontal style-form" method="post" action="{{action('Obat@search')}}">
      <div class="form-group">

        <label class="col-sm-2 col-sm-2 control-label">Cari</label>
        <div class="col-sm-5">
             <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
            <input type="text" class="form-control" name="key" placeholder="Enter to search"><br>
            <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"  id="cari" name="search">Set Pasien</button> -->
            <button type="submit" class="btn btn-info">Cari</button>
        </div>
      </div>
<!-- 
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Ruangan</label>
        <div class="col-sm-3">
         <input type="text" class="form-control" name="value">
         <br>
         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"  id="cari" name="search">Cari</button>
        </div>
       </div> -->
          
      <div class="form-group">
      <div class="container">  
          <?php 
            if (!empty($data['pasiens'])) {
            ?>

            <?php foreach ($data['pasiens'] as $pasien):?>
               <div class="col-sm-5">
                    <label class="col-sm-12 col-sm-12 control-label">Id Pasien</label> <br>
                    <input type="text" value="<?=$pasien->id_pasien ?>" disabled="true" class="form-control">
                  </div>
                  <div class="col-sm-5">
                    <label class="col-sm-12 col-sm-12 control-label">Nama Pasien</label>
                    <input type="text" value="<?=$pasien->nama_pasien ?>" disabled="true" class="form-control">
                  </div>  

           <?php endforeach ?> 
             
            <?php
            } else {
            ?>
             
             <h3>Data Pasien Tidak Ditemukan!</h3>

            <?php
            }
            ?>
            
       </div>
      </div>
      </div> 
    </form>
   </div>
</div>


<!-- daftar Penggunaan Obat -->
<div class="col-lg-12">
   <div class="form-panel">
    <h4 class="mb">Form Penggunaan Obat</h4>
    <form class="form-horizontal style-form" method="post" action="{{action('Obat@tambah')}}">
      <div class="form-group">
       <div class="col-md-6">
        <label class="col-sm-4 col-sm-4 control-label">Tanggal</label>
        <div class="col-sm-5">
            <input type="date" class="form-control" disabled>
        </div>
       </div>
       <div class="col-md-6">
        <label class="col-sm-4 col-sm-4 control-label">Waktu Pemberian</label>
        <div class="col-sm-5">
            <input type="time" class="form-control">
        </div>
       </div>
      </div>
      </div>
      <div class="form-panel">
        <p style="color:red">{{$errors->first('id_obat')}}</p>
        <p style="color:red">{{$errors->first('nama_obat')}}</p>
        <p style="color:red">{{$errors->first('rute_pemberian')}}</p>
       <div class="row">
        <div class="col-md-6">
         <div class="form-group">
          <a href=""></a>
          <input type="hidden" name="_token" value="<?= csrf_token(); ?>">          
          <label>id Obat</label><br>
          <input type="text" class="form-control" name="id_obat">
          <label>Nama Obat</label><br>
          <input type="text" class="form-control" name="nama_obat">         
          <label>Rute Pemberian</label><br>
          <input type="text" class="form-control" name="rute_pemberian">
          <label>Dosis</label><br>
          <input type="text" class="form-control" name="dosis"> 
          <label>Harga</label> 
          <input type="text" class="form-control" name="harga">
          
          <br>
          <input type="submit" class="btn btn-theme"><i class="fa fa-plus-circle"></i> | Tambahkan</button>
            
          </div>
         </div>
       <div class="col-md-6">
         <div class="col-md-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-center"></i>Daftar Penggunaan Obat</h4>
            <hr>
            <table class="table">
              <thead>
              <tr>
               <th>No</th>
               <th>Nama Obat</th>
               <th>Rute Pemberian</th>
               <th>Dosis</th>
               <th>Harga</th>
               <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($data['obats'] as $obats): ?>
               <tr>
                <td><?=$obats->no ?></td>
                <td><?=$obats->nama_obat ?></td>
                <td><?=$obats->rute_pemberian ?></td>
                <td><?=$obats->dosis ?></td>
                <td><?=$obats->harga ?></td>   
              </tr>
              <?php endforeach ?>
              

              </tbody>
            </table>
          </div><! --/content-panel -->
          <br>
          Jumlah Record : Sekian
          <br>
          <button type="button" class="btn btn-theme"><i class="fa fa-save"></i> | Simpan</button>
            <button type="button" class="btn btn-theme"><i class="fa fa-file"></i> | Baru</button>
            <button type="button" class="btn btn-theme"><i class="fa fa-list-alt"></i> | Daftar Penggunaan Obat</button>

         </div>
       </div>
       
       </div>
      </div>

    </form>
   </div>
</div>
<!-- daftar Penggunaan Obat -->
</div>
<script type="text/javascript">

 $('#cari').on('click',function (e) {
    $.get('{{ url("search_pasien") }}', function(res){
                    bootbox.dialog({
                        title: "Ketidaksesuaian",
                        message: res
                    });
                });
    });
</script>
@endsection
