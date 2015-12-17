@extends('layouts.main')
@section('content')
<div class="row">

	<div class="container">
		<div class="col-md-12">
			<div class="row mt">
				<div class="col-lg-12">
					<div class="form-panel">
					 	<h1 class="mb"><i class="fa fa-male"></i> Data Pasien</h1>
						<form class="form-horizontal style-form" method="get">
					       	<div class="form-group">
					        	<div class="col-md-4">
					         		<input type="text" placeholder="No Pendaftaran" class="form-control">
					        	</div>
					       </div>

					    <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Id Ruangan" class="form-control">
				        	</div>
				       </div>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Nama Pasien" class="form-control">
				        	</div>
				       </div>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Nama Panggilan" class="form-control">
				        	</div>
				       </div>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Jenis Kelamin" class="form-control">
				        	</div>
				       </div>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Tempat Lahir" class="form-control">
				        	</div>
				       </div>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="date" placeholder="Tanggal Lahir" class="form-control">
				        	</div>
				       </div>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Umur" class="form-control">
				        	</div>
				       </div>

				       <ul class="sidebar-menu" id="nav-accordion">
				       <li class="mt margin0"><hr></li>
				       </ul>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Kecamatan / Kelurahan" class="form-control">
				        	</div>
				       </div>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Alamat" class="form-control">
				        	</div>
				       </div>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Telepone" class="form-control">
				        	</div>
				       </div>

				       <ul class="sidebar-menu" id="nav-accordion">
				       <li class="mt margin0"><hr></li>
				       </ul>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Agama" class="form-control">
				        	</div>
				       </div>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Maritial Status" class="form-control">
				        	</div>
				       </div>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Pekerjaan" class="form-control">
				        	</div>
				       </div>

				       <ul class="sidebar-menu" id="nav-accordion">
				       <li class="mt margin0"><hr></li>
				       </ul>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Nama Ibu/Bapak" class="form-control">
				        	</div>
				       </div>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Alamat orang tua" class="form-control">
				        	</div>
				       </div>

				       <div class="form-group">
				        	<div class="col-md-4">
				         		<input type="text" placeholder="Nama Suami/Istri" class="form-control">
				        	</div>
				       </div>

				       <button class="btn btn-primary"><i class="fa fa-plus-circle"></i> Perbarui</button>



	</div>

</div>
@endsection