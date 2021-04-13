
@extends('layouts.master')

@section('content')

	<div class="main">
	<div class="main-content">
				<div class="container-fluid">
					
						<div>
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->

								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading text-center">Informasi Pasien</h4>
										<ul class="list-unstyled list-justify">
											<li>ID Pasien <span> {{$pasien->id}}</span></li>
											<li>Nama <span>{{$pasien->nama}}</span></li>
											<li>Jenis Kelamin <span>{{$pasien->jenis_kelamin}}</span></li>
											<li>Tanggal Lahir <span>{{$pasien->tgl_lahir}}</span></li>
											<li>Alamat <span>{{$pasien->alamat}}</span></li>
											<li>No Telpon <span>{{$pasien->notelp}}</span></li>										
										</ul>
									</div>
									<div class="profile-info">
										
									</div>
									<div class="profile-info">

									</div>
									<div class="text-center"><a href="/pasien/{{$pasien->id}}/edit" class="btn btn-primary">Daftar Rekam Medis</a>
									<a href="/pasien/{{$pasien->id}}/delete" class="btn btn-danger" onclick="return confirm('Apapkah Anda Yakin?')">Hapus</a>
									</div>
									
									</div>		
							<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">REKAM MEDIS</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>ID PENDAFTARAN</th>
												<th>KELUHAN</th>
												<th>PEMERIKSAAN</th>
												<th>DIAGNOSA</th>
												<th>POLIKLINIK</th>
												<th>TGL DAFTAR</th>
											</tr>
										</thead>
										<tbody>
										@foreach($pasien->transaksi as $transaksi)
											<tr>
												<td>{{$transaksi->id}}</td>
												<td>{{$transaksi->keluhan}}</td>
												<td>{{$transaksi->pemeriksaan}}</td>
												<td>{{$transaksi->kesimpulan}}</td>
												<td>{{$transaksi->poliklinik->nama}}</td>
												<td>{{$transaksi->created_at}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
							</div>	
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
	</div>



@stop