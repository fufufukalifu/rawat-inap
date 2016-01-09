@extends('layouts.main')
@section('content')
<div class="row mt">
<!-- data pasien -->
<div class="col-lg-12">
   <div class="form-panel">
    <h4 class="mb">Data Pasien</h4>
    <form class="form-horizontal style-form" method="get">
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">No Pendaftaran</label>
        <div class="col-sm-5">
            <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Ruangan</label>
        <div class="col-sm-3">
         <input type="text" class="form-control">
         <br>
         <button class="btn btn-primary">Cari</button>
        </div>
      </div>
      
      <div class="form-group">
       <label class="col-sm-2 col-sm-2 control-label">Nama Pasien</label>
       <div class="col-sm-8">
           <input type="text" class="form-control">
       </div>
      </div>

    </form>
   </div>
</div>


<!-- daftar Penggunaan Obat -->
<div class="col-lg-12">
   <div class="form-panel">
    <h4 class="mb">Form Penggunaan Obat</h4>
    <form class="form-horizontal style-form" method="get">
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
       <div class="row">
        <div class="col-md-6">
         <div class="form-group">
          <label>Nama Obat</label><br>
          <input type="text" class="form-control" name="nm_obat">
          <label>Rute Pemberian</label><br>
          <input type="text" class="form-control" name="rute_pemberian">
          <label>Dosis</label><br>
          <input type="text" class="form-control" name="dosis"> 
          <label>Keterangan</label> 
          <input type="text" class="form-control" name="keterangan">
          <label>Keterangan</label> 
          <input type="text" class="form-control" name="keterangan">
          
          <br>
          <button type="button" class="btn btn-theme"><i class="fa fa-plus-circle"></i> | Tambahkan</button>
            
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
               <th>Rute</th>
               <th>Harga</th>
               <th>Dosis</th>
               <th>Harga</th>
               <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($data as $obats): ?>
               <tr>
                <td><?=$obats->no ?></td>
                <td>Rute</td>
                <td>Harga</td>
                <td>Dosis</td>
                <td>Harga</td>
                <td>Aksi</td>   
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

@endsection
<script type="text/javascript">
  var d = new Date();
  var now = d.getDate();
</script>