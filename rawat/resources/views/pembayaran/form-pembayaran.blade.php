@extends('layouts.main')
@section('content')

<h2>Daftar Pasien</h2>

<div class="col-md-4">
	<div class="row mt">
		<div class="col-lg-12">
			<div class="form-panel">
				 <h6 class="mb"><i class="fa fa-search-plus"></i>PENCARIAN</h6>
				 <form method="get" action="{{action('PasienController@search')}}">
				    <div class="form-group">
				       	<label class="control-label">Cari</label>
				    	<input type="text" class="form-control" name="search" placeholder="Enter to search" id="onenter">
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
	           	
				<?php if (!isset($_GET["search"])){ ?>
					<h3>Data Tidak Tersedia</h3>
				<?php }else{  ?>
					<form>
						@foreach($pasiens as $data)
						<div class="form-group">
							<label class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama_pasien" value= "{{$data->nama_pasien}}" >
						</div>

						<div class="form-group">
							<label class="control-label">Umur</label>
							<input type="text" class="form-control" name="nama_pasien" value= "{{$data->umur}}" >
						</div>

						<div class="form-group">
							<label class="control-label">Alamat</label>
							<input type="text" class="form-control" name="nama_pasien" value= "{{$data->alamat}}" >
						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-primary" name="detail" value= "Detail" >
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
        <p style="color:red">{{$errors->first('id_obat')}}</p>
        <p style="color:red">{{$errors->first('nama_obat')}}</p>
        <p style="color:red">{{$errors->first('rute_pemberian')}}</p>
       <div class="row">
        <div class="col-md-6">
         <div class="form-group">
          <div class="content-panel">
            <h4><i class="fa fa-angle-center"></i>Pembayaran Mulai Dari</h4>
            <hr>
            <table class="table">
              <tbody>
              	<tr>
              		<td>Mulai Tanggal:</td>
              		<td>Belum</td>
              	</tr>
              	<tr>
              		<td>Selesai Tanggal:</td>
              		<td>Belum</td>
              	</tr>
              	<tr>
              		<td>Lama:</td>
              		<td>Belum</td>
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
              		<td>Belum</td>
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
          </div><! --/content-panel -->
          <br>
          Jumlah Record : Sekian
          <br>
          <button type="button" class="btn btn-theme"><i class="fa fa-save"></i> | Detail</button>
            <button type="button" class="btn btn-theme"><i class="fa fa-file"></i> | Bayar</button>
            <button type="button" class="btn btn-theme"><i class="fa fa-list-alt"></i> | Cetak</button>

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