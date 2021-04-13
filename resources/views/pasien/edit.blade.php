@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
								<form action="/dashboard/addrm" method="POST">
							        	{{csrf_field()}}
							        	<div class="form-group">
										    <label for="exampleFormControlSelect1">Pilih Poliklinik</label>
										    <select name="poliklinik_id" class="form-control" id="exampleFormControlSelect1">
										    	@foreach($data_poliklinik as $data_poliklinik )
										      <option value="{{$data_poliklinik->id}}">{{$data_poliklinik->nama}}</option>
										      @endforeach
										    </select>
										  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">ID</label>
									    <input name="pasien_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$pasien->id}}">		
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Nama</label>
									    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$pasien->nama}}">		
									  </div>
									 <div class="form-group">
									    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
									    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
									      <option value="L" @if($pasien->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
									      <option value="P" @if($pasien->jenis_kelamin == 'P') selected @endif>Perempuan</option>
									    </select>
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Tanggal Lahir/Umur</label>
									    <input name="tgl_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$pasien->tgl_lahir}}">		
									  </div>
									  <div class="form-group">
									    <label for="exampleFormControlTextarea1">Alamat</label>
									    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pasien->alamat}}</textarea>
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">No Telpon</label>
									    <input name="notelp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telpon" value="{{$pasien->notelp}}">	
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Keluhan</label>
									    <input name="keluhan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keluhan">	
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Pemeriksaan</label>
									    <input name="pemeriksaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pemeriksaan">
									   <div class="form-group">
									    <label for="exampleInputEmail1">Alergi Obat</label>
									    <input name="alergiobat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alergi Obat">	
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Kesimpulan</label>
									    <input name="kesimpulan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kesimpulan">	
									  </div>	
									  </div>
									  <div class="form-group">

									  <button type="submit" class="btn btn-warning">Submit</button>
									</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@stop
@section('content1')


				<h1>Edit data pasien</h1>
				@if(session('sukses'))
				<div class="alert alert-dark" role="alert">
				  {{session('sukses')}}
				</div>
				@endif
				<div class="row">
					<div class="col-lg-12">
					<form action="/pasien/{{$pasien->id}}/update" method="POST">
				        	{{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$pasien->nama}}">		
						  </div>

						 <div class="form-group">
						    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
						    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
						      <option value="L" @if($pasien->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
						      <option value="P" @if($pasien->jenis_kelamin == 'P') selected @endif>Perempuan</option>
						    </select>
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Alamat</label>
						    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pasien->alamat}}</textarea>
						  </div>
	

						<div class="form-group">
						    <label for="exampleInputEmail1">No Telpon</label>
						    <input name="notelp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telpon" value="{{$pasien->notelp}}">	
						  </div>

						
						  <button type="submit" class="btn btn-warning">UPDATE</button>
						</form>
						</div>
@endsection						

				      
				      


				        




