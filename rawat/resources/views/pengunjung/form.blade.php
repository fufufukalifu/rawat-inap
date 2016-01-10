@extends('layouts.main')
@section('content')
	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	<p style="color:red">{{$errors->first('id_pasien')}}</p>
                  	<p style="color:red">{{$errors->first('nama_pasien')}}</p>
                  	<p style="color:red">{{$errors->first('nama_panggilan')}}</p>
					 	<h1 class="mb"><i class="fa fa-male"></i> Data Pasien</h1>
						<form action="{{action('PendaftaranController@tambah')}}" class="form-horizontal style-form" method="post">
						<div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">No Pendaftaran</label>
	                            <div class="col-sm-10">
	                            	<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
	                                <input type="text" name="id_pasien" class="form-control">
	                            </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Nama Pasien</label>
	                            <div class="col-sm-10">
	                                <input type="text" name="nama_pasien" class="form-control">
	                            </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Nama Panggilan</label>
	                            <div class="col-sm-10">
	                                <input type="text" name="nama_panggilan" class="form-control">
	                            </div>
	                    </div>

	                    <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                            	<div class="col-sm-2">
	                                <select id="t" class="form-control">
	                                	<option>Pria</option>
	                                	<option>Wanita</option>
	                                </select>
	                            </div>
                        </div>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control">
	                            </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control">
	                            </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Umur</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control">
	                            </div>
	                    </div>
 						<hr>

 						<div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Kecamatan / Kelurahan</label>
                            	<div class="col-sm-2">
	                                <select id="t" class="form-control">
	                                	<option>Bojong Kidul</option>
	                                	<option>Lembang</option>
	                                </select>
	                            </div>
	                            <div class="col-sm-3">
	                                <select id="t" class="form-control">
	                                	<option>Cibaduyut Wetan</option>
	                                	<option>Cibaduyut Kulon</option>
	                                </select>
	                            </div>
                        </div>

				       	<div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
	                            <div class="col-sm-6">
	                                <input type="text" class="form-control">
	                            </div>
	                            <label class="col-sm-1 control-label">RT : </label>
	                            <div class="col-sm-1">
	                                <input type="text" class="form-control">
	                            </div>
	                            <label class="col-sm-1 control-label">RW : </label>
	                            <div class="col-sm-1">
	                                <input type="text" class="form-control">
	                            </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Telepon</label>
	                            <div class="col-sm-1">
	                                <input type="text" class="form-control">
	                            </div>
	                            <div class="col-sm-2">
	                                <input type="text" class="form-control">
	                            </div>
	                    </div>
	                    <hr>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Agama</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control">
	                            </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Maritial Status</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control">
	                            </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Pekerjaan</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control">
	                            </div>
	                    </div>
	                    <hr>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Nama Ibu/Bapak</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control">
	                            </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Alamat orang tua</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control">
	                            </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Nama Suami/Istri</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control">
	                            </div>
	                    </div>

	                    <div class="row mt">
          				<div class="col-sm-10 text-center">
          					<a href="<?php echo 'ruangan' ?>">Back</a>
          				</div>
	          			<div class="col-sm-2 text-center">   
				       		<input type="submit" value="Tambah" class="btn btn-primary">
				       	</div>
				       	</div>

                     </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div><!-- /row -->

@endsection