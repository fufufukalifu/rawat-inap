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
					<!-- <form> -->
						@foreach($pasiens as $data)
						<div class="form-group">
							<label class="control-label">No Pendaftaran</label>
							<input type="text" class="form-control" name="nama_pasien" value= "{{$data->id_pasien}}" disabled >
						</div>

						<div class="form-group">
							<label class="control-label">Id Ruangan</label>
							<input type="text" class="form-control" name="nama_pasien" value= "{{$data->id_ruangan}}" disabled>
						</div>
							
						<div class="form-group">
							<label class="control-label">Nama Pasien</label>
							<input type="text" class="form-control" name="nama_pasien" value= "{{$data->nama_pasien}}" disabled>
						</div>

						<div class="form-group">
							<label class="control-label">Nama Panggilan</label>
							<input type="text" class="form-control" name="nama_pasien" value= "{{$data->nama_panggilan}}" disabled>
						</div>

						<div class="form-group">
							<a href="<?php echo 'tampilpasien/' .$data->id_pasien ?>">
								<input class="btn btn-primary" type="submit" name="edit" value="Detail">
							</a>
						</div>
						<hr>
						@endforeach
					<!-- </form> -->
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
				<th>No Pendaftaran</th>
				<th>Id Ruangan</th>
				<th>Nama Pasien</th>
				<th>Umur</th>
				<th>Penanggung Jawab</th>
				<th>Status</th>
			</tr>
			
			<?php  	if (!isset($_GET["search"])){?>
			@foreach($pasien as $data)
			<tr >
			    <td>{{$data->id_pasien}}</td>
			    <td>{{$data->id_ruangan}}</td>
				<td>{{$data->nama_pasien}}</td>
				<td>{{$data->umur}}</td>
				<td>{{$data->nama_penanggungjawab}}</td>
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
			    <td>{{$data->id_ruangan}}</td>
				<td>{{$data->nama_pasien}}</td>
				<td>{{$data->umur}}</td>
				<td>{{$data->nama_penanggungjawab}}</td>
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
		
	</div>
</div>
@endsection