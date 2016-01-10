
	@extends('layouts.main')
	@section('content')
		<div class="col-md-7">
			<div class="row mt">
				<!-- <div class="col-lg-17"> -->
					<div class="form-panel">
					 <h2 class="mb"><i class="fa fa-male"></i> Daftar Pasien</h2>
						<form class="form-horizontal style-form" method="get">
							<div class="form-group">
					        	<div class="col-md-10">
					        		<label>No Pendaftaran</label>
					         		<input type="text" class="form-control">
					        	</div>
					        	<div class="col-md-10">
					        		<label>No Ruangan</label>
					         		<input type="text" class="form-control">
					        	</div>
					            <div class="col-md-10">
					       			<label >Nama Pasien</label>
					         		<input type="text" class="form-control">
					        	</div>
 					        	<div class="col-md-10">
				        			<label>Nama panggilan</label>
				         			<input type="text" class="form-control">
				        		</div>
					        	<div class="col-md-10">
					        		<label>Jenis Kelamin</label>
					        	</div>
					        	<div class="col-md-10">
					        		<label>Laki-Laki</label>
						         	<input type="radio" name="kelamin" value="laki-laki" >
						         	<label>Perempuan</label>
						         	<input type="radio" name="kelamin" value="perempuan" >
					         	</div>
					         	<div class="col-md-10">
					       			<label >Tempat Lahir</label>
					         		<input type="text" class="form-control">
					        	</div>
 					        	<div class="col-md-10">
				        			<label>Tanggal Lahir</label>
				         			<input type="text" class="form-control">
				        		</div>
				        		<div class="col-md-10">
				        			<label>Umur</label>
				         			<input type="text" class="form-control">
				        		</div>
					        </div>
					        <div class="form-group">
					        	<div class="col-md-10">
					        		<label>Kecamatan</label>
					         		<input type="text"  class="form-control">
					        	</div>
					        	<div class="col-md-10">
					        		<label>Kelurahan</label>
					         		<input type="text"  class="form-control">
					        	</div>
					        	<div class="col-md-10">
					        		<label>Alamat</label>
					         		<input type="text"  class="form-control">
					         	</div>
					         	<div class="col-md-3">
					         		<label>RT</label>
					         		<input type="text" class="form-control">
					         	</div>
					         	<div class="col-md-3">
					         		<label>RW</label>
					         		<input type="text"  class="form-control">
					        	</div>
					            <div class="col-md-10">
					       			<label >Telepon</label>
					         		<input type="text"  class="form-control">
					        	</div>
					        </div>


					        <div class="form-group">
					        	<div class="col-md-10">
					        		<label>Agama</label>
					         		<select class="form-control">
					         			<option name="Islam" value="Islam">Islam</option>
					         			<option name="Kristen" value="Kristen">Kristen</option>
					         			<option name="Hindu" value="Hindu">Hindu</option>
					         			<option name="Budha" value="Budha">Budha</option>
					         			<option name="Khatolit" value="Khatolit">Khatolit</option>
					         		</select>
					        	</div>
					        	<div class="col-md-10">
					        		<label>Status Pernikahan</label>
					         		<select class="form-control">
					         			<option name="Islam" value="Islam">Single</option>
					         			<option name="Kristen" value="Kristen">Menikah</option>
					         			<option name="Hindu" value="Hindu">Cerai</option>
					         		</select>
					        	</div>
					        	<div class="col-md-10">
					        		<label>Pekerjaan</label>
					         		<input type="text"  class="form-control">
					         	</div>	
					        </div>

					        <div class="form-group">
					        	<div class="col-md-10">
					        		<label>Nama Orangtua</label>
					         		<input type="text"  class="form-control">
					        	</div>
					        	<div class="col-md-10">
					        		<label>Alamat Orangtua</label>
					         		<input type="text"  class="form-control">
					        	</div>
					        	<div class="col-md-10">
					        		<label>Nama Suami/Istri</label>
					         		<input type="text"  class="form-control">
					         	</div>
					         	
					         	<div class="col-md-10">
					        		<br>
					        		<button class="btn btn-primary">Simpan</button>
					         	</div>	
					        	
					        </div>
			           	</form>
			       </div>
				</div>
  			</div>
		<!-- </div> -->
	@endsection