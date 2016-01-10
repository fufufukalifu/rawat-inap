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




<div class="col-md-11">
	<div class="row mt">
		<div class="table-responsive">
		<table class="table table-striped table-bordered" >
			<tr>
				<td>Identitas</td>
				<td>Nama</td>
				<td>Jenis Kelamin</td>
				<td>Umur</td>
				<td>Agama</td>
				<td>Pekerjaan</td>
				<td>Status</td>


			</tr>
			
			<?php  	if (!isset($_GET["search"])){?>
			@foreach($pasien as $data)
			<tr>
			    <td>{{$data->id_pasien}}</td>
				<td>{{$data->nama_pasien}}</td>
				<td>{{$data->jenis_kelamin}}</td>
				<td>{{$data->umur}}</td>
				<td>{{$data->agama}}</td>
				<td>{{$data->pekerjaan}}</td>
				<td>
					<a href="<?php echo 'UbahPasien/' .$data->id_pasien ?>">
						<input class="btn btn-primary" type="submit" name="edit" value="Edit">
					</a>


				</td>
			</tr>
			@endforeach
			<?php }else{ ?>
			@foreach($pasiens as $data)
			<tr>
			    <td>{{$data->id_pasien}}</td>
				<td>{{$data->nama_pasien}}</td>
				<td>{{$data->jenis_kelamin}}</td>
				<td>{{$data->umur}}</td>
				<td>{{$data->agama}}</td>
				<td>{{$data->pekerjaan}}</td>
				<td>
					<a href="<?php echo 'UbahPasien/' .$data->id_pasien ?>">
						<input class="btn btn-primary" type="submit" name="edit" value="Edit">
					</a>


				</td>
			</tr>
			@endforeach

			<?php } ?>
		</table>
		</div>
		<a href="<?php echo 'formPasien' ?>">
			<input class="btn btn-primary" type="submit" name="delete" value="Tambah">
		</a>
	</div>
</div>
@endsection