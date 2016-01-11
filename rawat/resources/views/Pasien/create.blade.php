@extends('layouts.main')
@section('content')

<div class="col-md-7">
	<div class="row mt">
		<div class="form-panel">
			<h1 class="mb"><i class="fa fa-male"></i> Data Pasien</h1>
				<form action="{{action('PasienController@tambahpasien')}}" method="post">
						<div class="form-group">
	                        <label class="control-label">No Pendaftaran</label>
	                        <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
	                        <input type="text" name="id_pasien" class="form-control">
	                        <input type="hidden" name="tanggal_masuk" class="form-control" value="<?php echo date('d-m-Y'); ?>">
	                    </div>
						
						<div class="form-group">
	                        <label class="control-label">Id Ruangan</label>
	                        <input type="text" name="id_ruangan" class="form-control" value="<?php echo "$row->no"; ?>" >
	                    </div>	                    

	                    <div class="form-group">
	                        <label class="control-label">Nama Pasien</label>
	                        <input type="text" name="nama_pasien" class="form-control">
	                    </div>

	                    <div class="form-group">
	                        <label class="control-label">Nama Panggilan</label>
	                        <input type="text" name="nama_panggilan" class="form-control">
	                    </div>

	                    <div class="form-group">
                            <label class="control-label">Jenis Kelamin</label><br>
 							<label class="radio-inline"><input type="radio" name="jenis_kelamin" value="Laki-Laki" checked>Laki-Laki</label>
							<label class="radio-inline"><input type="radio" name="jenis_kelamin" value="Perempuan">Peremuan</label>
						</div>

	                    <div class="form-group">
	                        <label class="control-label">Tempat Lahir</label>
	                        <input type="text" class="form-control" name="tempat_lahir">
	                    </div>

	                    <div class="form-group">
	                        <label class="control-label">Tanggal Lahir</label>
	                        <input type="date" name="tanggal_lahir" class="form-control" min="1900-01-02" max="2020-12-31">
	                    </div>

	                    <div class="form-group">
	                        <label class="control-label">Umur</label>
	                        <input type="number" name="umur" class="form-control" min="1" max="100">
	                    </div>
 						<hr>

 						<div class="form-group">
                            <label class="control-label">Kecamatan</label>
                           	<input class="form-control" type="text" name="kecamatan">
	                    </div>

                        <div class="form-group">
                            <label class="control-label">Kelurahan</label>
                           	<input class="form-control" type="text" name="kelurahan">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Alamat RT/RW</label>
                           	<input class="form-control" type="text" name="alamat">
                        </div>
	                    <div class="form-group">
                            <label class="control-label">No Telp</label>
                           	<input class="form-control" type="number" name="telepon">
                        </div>
	                    <hr>

	                    <div class="form-group">
	                        <label class="control-label">Status</label>
	                    	<select name="meritial_status" class="form-control">
	                    		<option value="Menikah">Menikah</option>
	                    		<option value="Lajang">Lajang</option>
	                    	</select>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label">Agama</label>
	                    	<select name="agama" class="form-control">
	                    		<option value="Islam">Islam</option>
	                    		<option value="Hindu">Hindu</option>
	                    		<option value="Budha">Budha</option>
	                    		<option value="Kristen">Kristen</option>
	                    		<option value="Khatolid">Khatolid</option>
	                    	</select>
	                    </div>
	                    <div class="form-group">
                            <label class="control-label">Pekerjaan</label>
                           	<input class="form-control" type="text" name="pekerjaan">
                        </div>
	                    <hr>

	                    <div class="form-group">
                            <label class="control-label">Nama Ibu/Bapak</label>
                           	<input class="form-control" type="text" name="nama_penanggungjawab">
                        </div>

	                    <div class="form-group">
	                        <label class="control-label">Alamat</label>
	                        <input type="text" class="form-control" name="alamat_penanggungjawab">
	                    </div>

	                    <div class="form-group">
	                        <label class="control-label">Nama Suami/Istri</label>
	                        <input type="text" class="form-control" name="nama_pasangan">
	                    </div>


	                    <div class="row mt">
          				
	          			<div class="col-sm-2 text-center">   
				       		<input type="submit" value="Simpan" class="btn btn-primary">
				       	</div>
				       	</div>
                    </form>
                    <div class="row mt">
                     	<div class="col-sm-2 text-center">
	                        <a href="pasien">
          						<input type="submit" value="Kembali" class="btn btn-primary">
          					</a>
          				</div>
          					
          			</div>

		
		</div>
	</div>
</div>


@endsection
