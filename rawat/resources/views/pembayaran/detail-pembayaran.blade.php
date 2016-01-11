@extends('layouts.main')
@section('content')

<div class="col-md-7">
	<div class="row mt">
		<div class="form-panel">
			<h1 class="mb"><i class="fa fa-male"></i> Detail Pembayaran</h1>
				
				<table>
					<tbody>
						<tr>
							<td>No Pendaftaran </td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Id Ruangan </td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Nama Pasien </td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Nama Penanggung Jawab </td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Mulai Tanggal </td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Selesai Tanggal </td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Lama Waktu </td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Biaya Ruangan </td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Biaya Obat </td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Biaya Lain-lain </td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Total Biaya </td>
							<td>:</td>
							<td></td>
						</tr>

					</tbody>

				</table>
                    <div class="row mt">
                     	<div class="col-sm-2 text-center">
	                        <a href="pasien">
          						<input type="submit" value="Cetak" class="btn btn-primary">
          					</a>
          		</div>				
          	</div>
		</div>
	</div>
</div>


@endsection
