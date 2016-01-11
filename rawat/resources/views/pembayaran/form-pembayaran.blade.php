@extends('layouts.main')
@section('content')

<h2>Daftar Pasien</h2>

<div class="col-md-4">
	<div class="row mt">
		<div class="col-lg-12">
			<div class="form-panel">
				 <h6 class="mb"><i class="fa fa-search-plus"></i>PENCARIAN</h6>
				 <form method="get" action="{{action('PembayaranController@searchpembayaran')}}">
				    <div class="form-group">
				       	<label class="control-label">Cari</label>
				    	<input type="text" class="form-control" name="searchpembayaran" placeholder="Enter to search" id="onenter">
				    </div>
					<div class="form-group">
						<button class="btn btn-primary" value="Cari" id="cari">cari</button>
					</div>
				</form>
  			</div>
  		</div>
  	</div>
</div>


<div class="col-md-6">
	<div class="row mt">
		<div class="col-lg-12">
			<div class="form-panel">
				<h6 class="mb"><i class="fa fa-search-plus"></i> Hasil Pencarian Data Pasien</h6>
	           	
				<?php if (!isset($_GET["searchpembayaran"]) && !isset($_GET["tampil"])){ ?>
					<h3>Data Tidak Tersedia</h3>
        <?php }else{  ?>
					<form  method="get" action="{{action('PembayaranController@searchpembayarantampil')}}">
						@foreach($pasiens as $data)
						<div class="form-group">
							<label class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama_pasien" value= "{{$data->nama_pasien}}" >
						</div>

						<div class="form-group">
							<label class="control-label">Umur</label>
							<input type="text" class="form-control" name="umur" value= "{{$data->umur}}" >
						</div>

						<div class="form-group">
							<label class="control-label">Alamat</label>
							<input type="text" class="form-control" name="alamat" value= "{{$data->alamat}}" >
						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-primary" name="tampil" value= "Tampil" >
						</div>
						<hr>
						@endforeach
					</form>
				<?php } ?>
			</div>
	    </div>
  	</div>
</div>

<div class="col-lg-12">
  
      <div class="form-panel">
       <div class="row">

            <?php if (!isset($_GET["tampil"])){ ?>
              
            <?php }else{  ?>
              <form>
                @foreach($pasiens as $data)
                  <div class="col-md-6">
                     <div class="form-group">
                      <div class="content-panel">
                        <h4><i class="fa fa-angle-center"></i>Pembayaran Mulai Dari</h4>
                        <hr>
                        <table class="table">
                          <tbody>
                            <tr>
                              <td>Mulai Tanggal:</td>
                              <td>{{$data->tanggal_masuk}}</td>
                            </tr>
                            <tr>
                              <td>Selesai Tanggal:</td>
                              <td>{{date('d-m-Y')}}</td>
                            </tr>
                            <tr>
                              <td>Lama:</td>
                              <td>
                                <?php $a = $data->tanggal_masuk;
                                      $b = date('d-m-Y');
                                      $c = $b-$a;
                                      echo "$c";

                                ?>

                              </td>
                            </tr>
                          </tbody>
                          
                        </table>
                      </div>
                    </div>
                  </div>
                   <div class="col-md-6">
                     <div class="col-md-12">
                      <div class="content-panel">
                        <h4><i class="fa fa-angle-center"></i>Rincian Pembayaran Atas Nama (Penanggung jawab)</h4>
                        <hr>
                        <table class="table">
                          <tbody>
                            <tr>
                              <td>Biaya Ruangan:</td>
                              <td>
                                  <?php 
                                    $harga = $data->harga;
                                    $hargaruangan = $harga * $c;
                                    echo "$hargaruangan";

                                   ?>
                              </td>
                            </tr>
                            <tr>
                              <td>Obat:</td>
                              <td>Belum</td>
                            </tr>
                            <tr>
                              <td>Lain-lain:</td>
                              <td>Belum</td>
                            </tr>
                            <tr>
                              <td>Total:</td>
                              <td>Belum</td>
                            </tr>
                          </tbody>
                          
                        </table>
                      </div>
                      <br>
                      Jumlah Record : Sekian
                      <br>
                      <button type="button" class="btn btn-theme"><i class="fa fa-save"></i> | Detail</button>
                        <button type="button" class="btn btn-theme"><i class="fa fa-file"></i> | Bayar</button>
                        <button type="button" class="btn btn-theme"><i class="fa fa-list-alt"></i> | Cetak</button>

                     </div>
                   </div>




                <hr>
                @endforeach
              </form>
            <?php } ?>





        
       



       </div>
      </div>
   </div>
</div>
<!-- daftar Penggunaan Obat -->
</div>



@endsection