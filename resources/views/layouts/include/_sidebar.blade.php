<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						
						<li><a href="/poliklinik" class="active"><i class="lnr lnr-home"></i> <span>POLIKLINIK</span></a></li>
						@if(auth()->user()->role == 'admin')
						<li><a href="/dashboard" class="active"><i class="lnr lnr-dice"></i> <span>PENDAFTARAN</span></a></li>
						<li><a href="/transaksi" class="active"><i class="lnr lnr-dice"></i> <span>REKAM MEDIS</span></a></li>
						<li><a href="/pasien" class="active"><i class="lnr lnr-user"></i> <span>PASIEN</span></a></li>
						<li><a href="/dokter" class="active"><i class="lnr lnr-user"></i> <span>USERS</span></a></li>
						
						@endif

					</ul>
				</nav>
			</div>
		</div>