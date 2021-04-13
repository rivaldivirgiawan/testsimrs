
@extends('layouts.master')

@section('content')

	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-5">
						<h1>Pendaftaran Pasien Poliklinik {{$poliklinik->nama}}</h1>

						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						  Cari Pasien Lama
						</button>

						<h2>Pendaftaran Pasien Baru</h2>
						<form action="/dashboard/{{$poliklinik->id}}/addpasien" action="/pasien/create" method="POST">
				        	{{csrf_field()}}
							  <div class="form-group has->error">
							    <label for="exampleInputEmail1">Nama</label>
							    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">		
							  </div>
							  <div class="form-group">
							    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
							    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
							      <option value="L">Laki-laki</option>
							      <option value="P">Perempuan</option>
							    </select>
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Tanggal Lahir/Umur</label>
							    <input name="tgl_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir/Umur">	
							  </div>
							  <div class="form-group">
							    <label for="exampleFormControlTextarea1">Alamat</label>
							    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">No Telpon</label>
							    <input name="notelp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telpon">	
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Keluhan</label>
							    <input name="keluhan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keluhan">	
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Pemeriksaan</label>
							    <input name="pemeriksaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pemeriksaan">	
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Alergi Obat</label>
							    <input name="alergiobat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alergi Obat">	
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Kesimpulan</label>
							    <input name="kesimpulan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kesimpulan">	
							  </div>
							

							  <button type="submit" class="btn btn-primary">Submit</button>
						</form>


					</div>
				</div>
			</div>
		</div>
	</div>
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Cari Pasien Lama</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      		<form class="form-inline my-2 my-lg-0" method="GET" action="/pasien">
				              <input name="cari" class="form-control mr-sm-2" type="search" placeholder="cari pasien" aria-label="cari">
						      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
						     </form>
						     <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Table Inside No Padding</h3>
								</div>
								<div class="panel-body no-padding">
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											@foreach($poliklinik->pasien as $pasien)
											<tr>
												<td>{{$pasien->id}}</td>
												<td>{{$pasien->nama}}</td>
												<td>{{$pasien->jenis_kelamin}}</td>
												<td>{{$pasien->notelp}}</td>
												<td>{{$pasien->tgl_lahir}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						     <div class="modal-footer">
					        <button type="button" class="btn btn-primary">Save changes</button>
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>


@stop