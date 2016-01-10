@extends('layouts.main')
@section('content')

<h2>Daftar Pasien</h2>

<div class="col-md-4">
	<div class="row mt">
		<div class="col-lg-12">
			<div class="form-panel">
				 <h6 class="mb"><i class="fa fa-search-plus"></i>PENCARIAN</h6>
			</div>
	    </div>
  	</div>
</div>

<div class="col-md-6">
	<div class="row mt">
		<div class="col-lg-12">
			<div class="form-panel">
				<h6 class="mb"><i class="fa fa-search-plus"></i> Hasil Pencarian Data Pasien</h6>


	           	{{--<p>{{$nama->nama_pasien}} </p>--}}
				<p>Nama Ruangan :BELUM</p>
				<p>Nama Pasien : BELUM</p>
			    <p>Nama Penanggung Jawab : BELUM </p>
				<button class="btn btn-primary"><i class="fa fa-plus-circle"></i> Detail</button>
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
			@foreach($pasien as $data)
			<tr>
			    <td>{{$data->id_pasien}}</td>
				<td>{{$data->nama_pasien}}</td>
				<td>{{$data->jenis_kelamin}}</td>
				<td>{{$data->umur}}</td>
				<td>{{$data->agama}}</td>
				<td>{{$data->pekerjaan}}</td>
				<td>
					<a href="<?php echo 'EditPasien/' .$data->id_pasien ?>">
						<input class="btn btn-primary" type="submit" name="edit" value="Edit">
					</a>


				</td>
			</tr>
			@endforeach
		</table>
		</div>
		<a href="<?php echo 'formPasien' ?>">
			<input class="btn btn-primary" type="submit" name="delete" value="Tambah">
		</a>
	</div>
</div>
@endsection