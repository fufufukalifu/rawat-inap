@extends('layouts.main')
@section('content')

<div class="container">
      <?php 
        foreach ($data as $row) {
      ?>
           <div class="col-md-3 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5><?php echo $row->nama_ruangan ?> Kelas <?php echo $row->kelas_ruangan ?></h5>
                  </div>
                   <div class="col-md-12">
                      <a data-toggle="tab" href="#<?php echo $row->kelas_ruangan ?>"> <img src="{{ asset("/assets/img/ruangan/$row->kelas_ruangan.png") }}" width="190"></a>
                         <br><br>                         
                        <a href="<?php echo '../formPasien/' .$row->no ?>">
                          <input class="btn btn-sm btn-clear-g" type="submit" name="edit" value="Pilih">
                        </a>
                    </div>
                </div>
          </div><!-- /col-md-4 -->

      <?php } ?>



        

    <div class="tab-content">
    <div id="home ?>" class="tab-pane  fade in active">
      <div class="col-md-12 mb">
              <!-- WHITE PANEL - TOP USER -->
              <div class="content-panel pn">
                <div class="col-md-2 grey-header">             
                  <h5>Deskripsi Umum</h5>       
                </div>
                <div class="col-md-12 mb">
                  
                  <h4>  
                    Banyak pilihan kamar yang dapat anda pilih . pilihlah kamar yang nyaman dan agar kondisi pasien cepat sembuh
                  </h4> 
                </div>
              </div>
            </div><!-- /col-md-4 -->
     </div>
     <?php 
        foreach ($data as $row) {
      ?>
    <div id="<?php echo $row->kelas_ruangan ?>" class="tab-pane fade">
      <div class="col-md-11">
        <div class="form-group">
          <div class="content-panel">
            <h4><i class="fa fa-angle-center"></i><?php echo $row->kelas_ruangan ?></h4>
            <hr>
            <table class="table">         
            <tbody>
              <tr>
                <td>Jenis Ruagan : </td>
                <td><?php echo $row->jenis_ruangan ?></td>
              </tr>
              <tr>
                <td>Keterangan : </td>
                <td><?php echo $row->keterangan ?></td>
              </tr>
              <tr>
                <td>Harga : </td>
                <td><?php echo $row->harga ?> / Hari</td>
              </tr>
              <tr>
                <td>Kapasitas : </td>
                <td><?php echo $row->jumlah?></td>
              </tr>
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
     <?php } ?>

    </div>
</div>

@endsection