@extends('layouts.main')
@section('content')

<div class="container">
  <br>
      <?php 
        foreach ($data as $row) {
      ?>
           <div class="col-md-3 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5><?php echo $row->jenis_ruangan ?></h5>
                  </div>
                   <div class="col-md-13">
                        <div class="col-md-13">
                        <a data-toggle="tab" href="#<?php echo $row->jenis_ruangan ?>"> <img src="{{ asset("/assets/img/ruangan/$row->jenis_ruangan.png") }}" width="190"></a>
                       
                         <br><br>
                        
            							<a class="btn btn-sm btn-clear-g" href="<?php echo 'jenisRuangan/'.$row->jenis_ruangan ?>">Detail</a>
            						</div>
                  </div>
                </div>
          </div><!-- /col-md-4 -->

      <?php } ?>

        

	  <div class="tab-content">
	  <div id="home ?>" class="tab-pane  fade in active">
      <div class="col-md-12 mb">
              <!-- WHITE PANEL - TOP USER -->
              <div class="content-panel pn">
                <div class="col-md-2 content-header">             
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

    <div id="<?php echo $row->jenis_ruangan ?>" class="tab-pane fade">
      <div class="col-md-12 mb">
              <!-- WHITE PANEL - TOP USER -->
              <div class="content-panel pn">
                <div class="col-md-2 content-header">             
                  <h5><?php echo $row->jenis_ruangan ?></h5>       
                </div>
                <div class="col-md-12 mb">
        <!-- menampilkan deskripsi dari kelas -->
                  <?php echo $row->keterangan ?>
                

                </div>
              </div>
            </div><!-- /col-md-4 -->
     </div>
     <?php } ?>

    </div>
</div>

@endsection