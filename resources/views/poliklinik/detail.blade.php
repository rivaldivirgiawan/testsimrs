
@extends('layouts.master')

@section('content')

	<div class="main">
	    <div class="main-content">
				<div class="container-fluid">
					
						<div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
									Tambah Dokter
								  </button>
                                <div>
                                    <br>
                                </div>
                                <!-- BASIC TABLE -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">DAFTAR DOKTER</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>											
                                                    <th>ID Dokter</th>
                                                    <th>Nama</th>
                                                    <th>Spesialis</th>		
                                                </tr>
                                            </thead>
                                            <tbody>
												<thead>
												@foreach ($poliklinik->dokter as $dokter)
                                                <tr>
                                                    <td>{{$dokter->id}}</td>
                                                    <td>{{$dokter->nama}}</td>
                                                    <td>{{$dokter->spesialis}}</td>
                                                </tr>
												@endforeach
											</thead>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END BASIC TABLE -->
                            </div>

							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">REKAM MEDIS POLIKLINIK {{$poliklinik->nama}}</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-hover">
										<thead>
											<tr>
												<th>ID RM</th>
                                                <th>NAMA PASIEN</th>
												<th>KELUHAN</th>
												<th>PEMERIKSAAN</th>
												<th>DIAGNOSA</th>
												<th>TGL DAFTAR</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
										@foreach($poliklinik->transaksi as $transaksi)
											<tr>
												<td>{{$transaksi->id}}</td>
                                                <td>{{$transaksi->pasien->nama}}</td>
												<td>{{$transaksi->keluhan}}</td>
												<td>{{$transaksi->pemeriksaan}}</td>
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
							</div>	
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<form action="/poliklinik/adddokter" method="POST">
					{{csrf_field()}}
					  <div class="form-group">
					  </div>
					  <div class="form-group has->error">
						<label for="exampleInputEmail1">Nama</label>
						<input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">		
					  </div>
					  <div class="form-group has->error">
						<label for="exampleInputEmail1">E-mail</label>
						<input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">		
					  </div>
					  <div class="form-group has->error">
						<label for="exampleInputEmail1">Spesialis</label>
						<input name="spesialis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Spesialis">		
					  </div>
					  <div class="form-group">
						<label for="exampleFormControlSelect1">Pilih Poliklinik</label>
						<select name="poliklinik_id" class="form-control" id="exampleFormControlSelect1">
						  <option value="{{$poliklinik->id}}">{{$poliklinik->nama}}</option>
						</select>
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		  </div>
		</div>
	  </div>



@stop