@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title text-center">Transaksi</h1>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>ID PENDAFTARAN</th>
												<th>POLIKLINIK</th>
												<th>ID PASIEN</th>
												<th>NAMA</th>
												<th>JENIS KELAMIN</th>
												<th>ALAMAT</th>
												<th>TELPON</th>
												<th>DIAGNOSA</th>
												<th>TGL DAFTAR</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
													@foreach($transaksi as $transaksi)
													<tr>
														<td>{{$transaksi->id}}</td>
														<td>{{$transaksi->poliklinik->nama}}</td>
														<td>{{$transaksi->pasien->id}}</td>
														<td>{{$transaksi->pasien->nama}}</td>
														<td>{{$transaksi->pasien->jenis_kelamin}}</td>
														<td>{{$transaksi->pasien->alamat}}</td>
														<td>{{$transaksi->pasien->notelp}}</td>
														<td>{{$transaksi->kesimpulan}}</td>
														<td>{{$transaksi->created_at}}</td>
														<td>
															<a href="/pasien/{{$transaksi->pasien->id}}/detail" class="btn-primary btn-sm">Detail</a>
														</td>

													</tr>
												@endforeach
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
					</div>
				</div>
			</div>
		</div>
	</div>




@stop
				      
				      




	