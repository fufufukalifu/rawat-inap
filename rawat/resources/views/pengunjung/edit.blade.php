@extends('layouts.main')
@section('content')
	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	<p style="color:red">{{$errors->first('nama_pasien')}}</p>
                  	<p style="color:red">{{$errors->first('nama_panggilan')}}</p>
					 	<h1 class="mb"><i class="fa fa-male"></i> Data Pasien</h1>
						<form action="{{action('PendaftaranController@updates')}}" class="form-horizontal style-form" method="post">
						<div class="form-group">
	                            <div class="col-sm-10">
	                            	<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
	                            	<input type="hidden" name="id_pasien" value="<?= $row->id_pasien ?>">
	                            </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Nama Pasien</label>
	                            <div class="col-sm-10">
	                                <input type="text" name="nama_pasien" value="<?= $row->nama_pasien ?>" class="form-control">
	                            </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-sm-2 col-sm-2 control-label">Nama Panggilan</label>
	                            <div class="col-sm-10">
	                                <input type="text" name="nama_panggilan" value="<?= $row->nama_panggilan ?>" class="form-control">
	                            </div>
	                    </div>

	                    <div class="row mt">
          				<div class="col-sm-10 text-center">
          					<a href="<?php echo 'ruangan' ?>">Back</a>
          				</div>
	          			<div class="col-sm-2 text-center">   
				       		<input type="submit" value="Edit" class="btn btn-primary">
				       	</div>
				       	</div>

                     </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div><!-- /row -->

@endsection