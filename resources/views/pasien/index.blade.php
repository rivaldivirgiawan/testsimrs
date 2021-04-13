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
												<th>ID REKAM MEDIS</th>
												<th>NAMA</th>
												<th>JENIS KELAMIN</th>
												<th>ALAMAT</th>
												<th>NO TELEPON</th>
												<th></th>
												</thead>
											</tr>
										</thead>
										<tbody>
													@foreach($data_pasien as $pasien)
													<tr>
														<td>{{$pasien->id}}</td>
														<td>{{$pasien->nama}}</td>
														<td>{{$pasien->jenis_kelamin}}</td>
														<td>{{$pasien->alamat}}</td>
														<td>{{$pasien->notelp}}</td>
														<td>
															<a href="/pasien/{{$pasien->id}}/detail" class="btn-primary btn-sm">Detail</a>

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
				      
				      




	