@extends('layouts.main')
@section('content')

<div class="col-md-7">
	<div class="row mt">
		<div class="form-panel">
			<h2 class="mb"><i class="fa fa-male"></i> Daftar Pasien</h2>
				<div class="form-group">
				    {!! Form::label('id_pasien', 'ID:', ['class' => 'control-label']) !!}
			    	{!! Form::text('id_pasien', $pasien->id_pasien, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('nama_pasien', 'Nama:', ['class' => 'control-label']) !!}
			    	{!! Form::text('nama_pasien', $pasien->nama_pasien, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('nama_panggilan', 'Panggilan:', ['class' => 'control-label']) !!}
			    	{!! Form::text('nama_panggilan', $pasien->nama_panggilan, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('jenis_kelamin', 'Kelamin:', ['class' => 'control-label']) !!}
			    	{!! Form::text('jenis_kelamin', $pasien->jenis_kelamin, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('tempat_lahir', 'Tmp lhir:', ['class' => 'control-label']) !!}
			    	{!! Form::text('tempat_lahir', $pasien->tempat_lahir, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('tanggal_lahir', 'Lahir:', ['class' => 'control-label']) !!}
			    	{!! Form::text('tanggal_lahir', $pasien->tanggal_lahir, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('umur', 'Umur:', ['class' => 'control-label']) !!}
			    	{!! Form::text('umur', $pasien->umur, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('kecamatan', 'Keceamatan:', ['class' => 'control-label']) !!}
			    	{!! Form::text('kecamatan', $pasien->kecamatan, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('kelurahan', 'Panggilan:', ['class' => 'control-label']) !!}
			    	{!! Form::text('kelurahan', $pasien->kelurahan, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('alamat', 'Alamat:', ['class' => 'control-label']) !!}
			    	{!! Form::text('alamat', $pasien->alamat, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('telepon', 'Tlp:', ['class' => 'control-label']) !!}
			    	{!! Form::text('telepon', $pasien->telepon, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('meritial_status', 'Status:', ['class' => 'control-label']) !!}
			    	{!! Form::text('meritial_status', $pasien->meritial_status, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('agama', 'agama:', ['class' => 'control-label']) !!}
			    	{!! Form::text('agama', $pasien->agama, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('pekerjaan', 'pekerjaan:', ['class' => 'control-label']) !!}
			    	{!! Form::text('pekerjaan', $pasien->pekerjaan, ['class' => 'form-control']) !!}
				</div>


				<div class="form-group">
				   <a href="pasien"> 
				   		{!! Form::submit('Back', ['class' => 'btn btn-primary']) !!}
					</a>
				</div>


		
		</div>
	</div>
</div>


@stop
