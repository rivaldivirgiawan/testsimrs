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
									<h1 class="panel-title text-center">DOKTER</h1>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>ID</th>
												<th>ROLE</th>
												<th>NAMA</th>
												<th>E-MAIL</th>
                                                <th></th>
											</tr>
										</thead>
										<tbody>
													@foreach($users as $users)
													<tr>
														<td>{{$users->id}}</td>
														<td>{{$users->role}}</td>
														<td>{{$users->name}}</td>
														<td>{{$users->email}}</td>
														<td>
															<a href="" class="btn-primary btn-sm">Detail</a>

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
				      
				      




	