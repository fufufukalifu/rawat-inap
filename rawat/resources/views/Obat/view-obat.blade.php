@extends('layouts.main')
@section('content')

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hasil Pencarian</h4>
      </div>
      <div class="modal-body">
        <?php if (!isset($_GET["search"])){ ?>
<<<<<<< HEAD
          <?php var_dump($data) ?>
=======
          <?php var_dump($data['pasiens']) ?>
>>>>>>> fc9d28dce0a0cda0348badde36c4fe4d01611840
          <h3>Data Tidak Tersedia</h3>
        <?php }else{  ?>
          <form>
            @foreach($data as $obats)
            <div class="form-group">
              <label class="control-label">Nama</label>
              <input type="text" class="form-control" name="nama_pasien" value= "{{$obats->no}}" >
            </div>
            @endforeach
        <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div class="row mt">
  <h1>Coba</h1>
<!-- data pasien -->
<div class="col-lg-12">
   <div class="form-panel">
    <h4 class="mb">Data Pasien</h4>
    <!-- <form class="form-horizontal style-form" method="get" action="{{action('Obat@search')}}">-->
    <form class="form-horizontal style-form" method="get" action="">
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Cari</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="key" placeholder="Enter to search" id="onenter"><br>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"  id="cari" name="search">Set Pasien</button>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Ruangan</label>
        <div class="col-sm-3">
         <input type="text" class="form-control" name="value">
         <br>
<<<<<<< HEAD
         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"  id="cari" name="search">Cari</button>
        </div>
=======
         <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"  id="cari" name="search">Cari</button>
         --></div>
>>>>>>> fc9d28dce0a0cda0348badde36c4fe4d01611840
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
