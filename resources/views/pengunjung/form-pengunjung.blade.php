@extends('layouts.main')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-6">
			<div class="row mt">
    <div class="col-lg-12">
     <div class="form-panel">
      <h6 class="mb"><i class="fa fa-search-plus"></i> Pencarian Data Pasien</h6>
      <form class="form-horizontal style-form" method="get">
       <div class="form-group">
        <div class="col-md-10">
         <input type="text" placeholder="Nama Pasien atau Nama Penanggung Jawab" class="form-control">
        </div>
       </div>
      </form>
     </div>
    </div><!-- col-lg-12-->      	
  	</div>
		</div>

		<div class="col-md-6">
			<div class="row mt">
				<div class="col-lg-12">
					<div class="form-panel">
					 <h6 class="mb"><i class="fa fa-search-plus"></i> Hasil Pencarian Data Pasien</h6>
						<p>Nama Pasien : 002-A</p>
						<p>Nama Ruangan : Raflesia</p>
						<p>Nama Pasien : John Doe</p>
						<p>Nama Penanggung Jawab : Opik Sutisna</p>
						<button class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Pengunjung</button>						
					</div>
				</div>
  	</div>
		</div>

		<div class="col-md-4">
			<div class="row mt">
				<div class="col-lg-12">
					<div class="form-panel">
					 <h6 class="mb"><i class="fa fa-male"></i> Data Pengunjung</h6>
							<form class="form-horizontal style-form" method="get">
       <div class="form-group">
        <div class="col-md-10">
         <input type="text" placeholder="Nama Pasien atau Nama Penanggung Jawab" class="form-control">
        </div>
       </div>
       
       <div class="form-group">
        <div class="col-md-10">
        <label class="sr-only">No Identitas</label>
         <input type="text" placeholder="contoh :123040031" class="form-control">
        </div>
       </div>
       
       <div class="form-group">
        <div class="col-md-10">
        <label class="sr-only">Nama Lengkap</label>
         <input type="text" placeholder="contoh :Jajang Miharja" class="form-control">
        </div>
       </div>
       
       <div class="form-group">
        <div class="col-md-10">
         <input type="text" placeholder="Nama Pasien atau Nama Penanggung Jawab" class="form-control">
        </div>
       </div>
       
      </form>
					</div>
				</div>
  	</div>
		</div>

	</div>
</div>
@endsection