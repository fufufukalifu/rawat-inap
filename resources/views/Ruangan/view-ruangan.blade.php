@extends('layouts.main')
@section('content')

<div class="container">
      <?php 
        foreach ($data as $row) {
      ?>
           <div class="col-md-3 col-sm-4 mb">
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5><?php echo $row->jenis_ruangan ?></h5>
                  </div>
                   <div class="col-md-12">

                        <a data-toggle="tab" href="#<?php echo $row->nama_ruangan ?>"> <img src="{{ asset("/assets/img/product.png") }}" width="120"></a>
                        <div class="col-md-12">
							<a class="small mt" href="<?php echo 'jenisRuangan/'.$row->jenis_ruangan ?>">Detail</a>
						</div>
                  </div>
                </div>
          </div><!-- /col-md-4 -->

      <?php } ?>

        

	  <div class="tab-content">
	  <div id="home ?>" class="tab-pane  fade in active">
      <div class="col-md-12 mb">
              <!-- WHITE PANEL - TOP USER -->
              <div class="green-panel pn">
                <div class="col-md-2 green-header">             
                  <h5>Deskripsi Umum</h5>       
                </div>
                <div class="col-md-12 mb">
				 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                </div>
              </div>
            </div><!-- /col-md-4 -->
   	 </div>
	   <?php 
        foreach ($data as $row) {
      ?>

	  <div id="<?php echo $row->nama_ruangan ?>" class="tab-pane fade">
      <div class="col-md-12 mb">
              <!-- WHITE PANEL - TOP USER -->
              <div class="green-panel pn">
                <div class="col-md-2 green-header">             
                  <h5><?php echo $row->nama_ruangan ?></h5>       
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