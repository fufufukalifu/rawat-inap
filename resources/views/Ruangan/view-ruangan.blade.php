@extends('layouts.main')
@section('content')

<div class="row">
	
	<h1>hai</h1>
	<a href="<?php echo 'form' ?>">Tambah</a>
	<table class="table table-bordered table-hover">
		<thead>
			<th>ID Pasien</th>
			<th>Nama Lengkap</th>
			<th>Nama Panggilan</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php 
				foreach ($data as $row) {
			?>
				<tr>
					<td><?php echo $row->id_pasien ?></td>
					<td><?php echo $row->nama_pasien ?></td>
					<td><?php echo $row->nama_panggilan ?></td>
					<td>
						<a href="<?php echo 'EditPasien/' .$row->id_pasien ?>">Edit</a> |
						<a href="<?php echo 'DeletePasien/' .$row->id_pasien ?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
			<!-- dispay next prev button -->
			<?php echo  $data->render(); ?>
		</tbody>
	</table>
</div>

@endsection