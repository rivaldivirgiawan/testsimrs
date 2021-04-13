@extends('layouts.master')

@section('content')

	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7">

						<h1 class="text-center">PENDAFTARAN REKAM MEDIS</h1>
						<br>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						  PENDAFTARAN REKAM MEDIS
						</button>

						<h2>Pendaftaran Pasien Baru</h2>
						<form action="/dashboard/addpasien" method="POST">
				        	{{csrf_field()}}
				        	  <div class="form-group">
							  </div>
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
				        <h1 class="modal-title text-center" id="exampleModalLabel">PILIH PASIEN</h1>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      		<form class="form-inline my-2 my-lg-0" method="GET" action="/pasien">
				              <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Cari Pasien" aria-label="cari">
						      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
						     </form>
						     <div class="panel">
								<div class="panel-heading text-center">
									<h3 class="panel-title">DAFTAR PASIEN</h3>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>ID PASIEN</th>
												<th>NAMA</th>
												<th>JENIS KELAMIN</th>
												<th>NO TELPON</th>
												<th>TGL LAHIR / UMUR</th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_pasien as $pasien)
											<tr>
												<td>{{$pasien->id}}</td>
												<td>{{$pasien->nama}}</td>
												<td>{{$pasien->jenis_kelamin}}</td>
												<td>{{$pasien->notelp}}</td>
												<td>{{$pasien->tgl_lahir}}</td>
												<td>
													<a href="/pasien/{{$pasien->id}}/edit" class="btn-warning btn-sm">Pilih</a>
												</td>
												<td>
													<a href="/pasien/{{$pasien->id}}/detail" class="btn-primary btn-sm">Detail</a>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
					    </div>
					  </div>
					</div>


@stop