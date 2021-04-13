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
									<h1 class="panel-title text-center">Poliklinik</h1>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>ID POLIKLINIK</th>
												<th>NAMA POLIKLINIK</th>
                                                <th></th>
												</thead>
											</tr>
										</thead>
										<tbody>
													@foreach($poliklinik as $poliklinik)
													<tr>
														<td>{{$poliklinik->id}}</td>
														<td>{{$poliklinik->nama}}</td>
														<td>
															<a href="/poliklinik/{{$poliklinik->id}}/detail" class="btn-primary btn-sm">Detail</a>

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
				      
				      




	