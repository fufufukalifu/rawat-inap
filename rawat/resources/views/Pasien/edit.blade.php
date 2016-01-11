
 @extends('layouts.main')
 @section('content')

 <div class="col-md-7">
 	<div class="row mt">
 		<div class="form-panel">
 			<h1 class="mb"><i class="fa fa-male"></i> Data Pasien</h1>
				<form action="{{action('PasienController@updatespasien')}}" method="post">
					<div class="form-group">
	                   	<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
	                    <input type="hidden" name="id_pasien" value="<?= $row->id_pasien ?>">
                    </div>
	                <div class="form-group">
	                    <label class="control-label">Nama Pasien</label>
	                    <input class="form-control"type="text" name="nama_pasien" value="<?= $row->nama_pasien ?>" class="form-control">
	                </div>
	                <div class="form-group">
	                        <label class="control-label">Id Ruangan</label>
	                        <input type="text" name="id_ruangan" class="form-control" value="<?php echo "$row->id_ruangan"; ?>" >
	                </div>
	                <div class="form-group">
	                    <label class="control-label">Nama panggilan</label>
	                    <input class="form-control"type="text" name="nama_panggilan" value="<?= $row->nama_panggilan ?>" class="form-control">
	                </div>

	                <div class="form-group">
                       	<label class="control-label">Jenis Kelamin</label><br>
 						<input type="text" class="form-control" name="jenis_kelamin" value="<?= $row->jenis_kelamin ?>">
					</div>

	                <div class="form-group">
	                    <label class="control-label">Tempat Lahir</label>
	                    <input type="text" class="form-control" name="tempat_lahir" value="<?= $row->tempat_lahir ?>">
	                </div>
	                <div class="form-group">
	                        <label class="control-label">Tanggal Lahir</label>
	                        <input type="date" name="tanggal_lahir" class="form-control" min="1900-01-02" max="2020-12-31" value="<?= $row->tanggal_lahir ?>">
	                </div>

	                <div class="form-group">
	                    <label class="control-label">Umur</label>
	                    <input type="number" name="umur" class="form-control"  min="1" max="100" value="<?= $row->umur ?>">
	                </div>
 					<hr>

		 			<div class="form-group">
                        <label class="control-label">Kecamatan</label>
                       	<input class="form-control" type="text" name="kecamatan" value="<?= $row->kecamatan?>">
	                </div>

                   	<div class="form-group">
                       	<label class="control-label">Kelurahan</label>
                       	<input class="form-control" type="text" name="kelurahan" value="<?= $row->kelurahan ?>">
                   	</div>

                   	<div class="form-group">
                       	<label class="control-label">Alamat RT/RW</label>
                       	<input class="form-control" type="text" name="alamat" value="<?= $row->alamat ?>">
                   	</div>
	               	<div class="form-group">
                       	<label class="control-label">No Telp</label>
                       	<input class="form-control" type="number" name="telepon" value="<?= $row->telepon ?>" >
                   	</div>
	               	<hr>

	               	<div class="form-group">
	                   	<label class="control-label">Status</label>
	                 	<input class="form-control" type="text" name="meritial_status"  value="<?= $row->meritial_status ?>">
	               	</div>
	               	<div class="form-group">
	                   	<label class="control-label">Agama</label>
	                   	<input class="form-control" type="text" name="agama"  value="<?= $row->agama?>">
	                </div>
	                <div class="form-group">
                        <label class="control-label">Pekerjaan</label>
                        <input class="form-control" type="text" name="pekerjaan" value="<?= $row->pekerjaan ?>">
                    </div>
	                <hr>

	                <div class="form-group">
                        <label class="control-label">Nama Ibu/Bapak</label>
                        <input class="form-control" type="text" name="nama_penanggungjawab" value="<?= $row->nama_penanggungjawab ?>">
                    </div>

	                <div class="form-group">
	                    <label class="control-label">Alamat</label>
	                    <input type="text" class="form-control" name="alamat_penanggungjawab" value="<?= $row->alamat_penanggungjawab ?>">
	                </div>

	                <div class="form-group">
	                    <label class="control-label">Nama Suami/Istri</label>
	                    <input type="text" class="form-control" name="nama_pasangan" value="<?= $row->nama_pasangan ?>">
	                </div>

	                <div class="form-group">
	                    <input class="btn btn-primary" type="submit" value="Berbarui" >
	                </div>

                </form>
                    <div class="row mt">
                     	<div class="col-sm-2 text-center">
	                        <a href="../pasien">
          						<input type="submit" value="Kembali" class="btn btn-primary">
          					</a>
          				</div>
          					
          			</div>
 		</div>
 	</div>
 </div>


 @endsection
