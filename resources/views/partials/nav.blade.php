<style>
                .button-submit {
						border-radius: 15px;
						text-align: center;
						margin-top: 10px;
						width: 50%;
						height: 60%;
						background-color: #FFFFFF;
						color: #000;
						border: 2px solid #f1f1f1;
						transition: 0.3ms;
                }
                .button-submit:hover {
						background-color: #6495ED;
						color: #FFFFFF;
                }
</style>

<div class="bottom-bar">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="logo">
					<a href="#">
						<a class="navbar-brand" href="#">LokerSKUY.</a>
					</a>
				</div>
			</div>
		<ul>
	<div class="dropdown">
		<button class="dropbtn nav-link active" style="font-size: 20px">Home</button>
			<div class="dropdown-content">
				<a href="/home" class="nav-link">Home</a>
				<a href="/agenda" class="nav-link">Agenda</a>
				<a href="/berita" class="nav-link">Berita</a>
				<a href="/profil" class="nav-link">Profile</a>
				<a href="/kontak" class="nav-link">Kontak</a>
				<a href="/post" class="nav-link">Post</a>
			</div>
		</div>
			<div class="dropdown">
				<button class="dropbtn nav-link active" style="font-size: 20px">Kesiswaan</button>
					<div class="dropdown-content">
						<a href="#" class="nav-link">PPDB</a>
						<a href="#" class="nav-link">OSIS</a>
						<a href="#" class="nav-link">Ekstrakurikuler</a>
						<a href="#" class="nav-link">Prestasi Siswa</a>
				</div>
			</div>
				<div class="dropdown">
					<button class="dropbtn nav-link active" style="font-size: 20px">Paket Keahlian</button>
						<div class="dropdown-content">
						<a href="#" class="nav-link">Kuliner</a>
						<a href="#" class="nav-link">Desain Pemodelan dan Informasi Bangunan</a>
						<a href="#" class="nav-link">Rekayasa Perangkat Lunak</a>
						<a href="#" class="nav-link">Teknik Pemanasan, Tata Udara dan Pendinginan</a>
						<a href="#" class="nav-link">Akuntansi</a>
						<a href="#" class="nav-link">Teknik Konstruksi dan Perumahan</a>
						<a href="#" class="nav-link">Teknik Pengelasan</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn nav-link active" style="font-size: 20px">Layanan</button>
						<div class="dropdown-content">
							<a href="#" class="nav-link">BKK</a>
							<a href="#" class="nav-link">PKL</a>
							<a href="#" class="nav-link">E-Learning</a>
							<a href="#" class="nav-link">Perpustakaan</a>
							<a href="#" class="nav-link">E-Rapor</a>
						</div>
					</div>
				<div class="dropdown">
					<button class="dropbtn nav-link active" style="font-size: 20px">Informasi</button>
						<div class="dropdown-content">	
							<a href="/guru" class="nav-link">Informasi Guru</a>
							<a href="/siswa" class="nav-link">Informasi Siswa</a>
							<a href="/vacancy" class="nav-link">Informasi Lowongan Kerja</a>
						</div>
					</div>
				</ul>
			</div>
		</div>
	</div>



<!-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                                <h5 class="modal-title">Tambah Lowongan Pekerjaan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                </div>
                                                <div class="modal-body">

                                                                <form method="post" action="/vacancy/simpan">
                                                                                {{ csrf_field() }}

                                                                                <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                                <label>Lowongan</label>
                                                                                                                                @if($errors -> has('lowongan'))
                                                                                                                <div class='text-danger'>
                                                                                                                                {{$errors -> first ('lowongan')}}
                                                                                                                </div>
                                                                                                                                @endif
                                                                                                                <input class="form-control" type="text" placeholder="masukkan judul lowongan">
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                                <label>Perusahaan</label>
                                                                                                                                @if($errors -> has('perusahaan'))
                                                                                                                <div class='text-danger'>
                                                                                                                                {{$errors -> first ('perusahaan')}}
                                                                                                                </div>
                                                                                                                                @endif
                                                                                                                <input class="form-control" type="text" placeholder="masukkan lokasi">
                                                                                                </div>
                                                                                                <div class="col-md-6 mt-2">
                                                                                                                <label for="textarea">Keahlian</label>
                                                                                                                                @if($errors -> has('keahlian'))
                                                                                                                <div class='text-danger'>
                                                                                                                                {{$errors -> first ('keahlian')}}
                                                                                                                </div>
                                                                                                                                @endif
                                                                                                                <textarea class="form-control" rows="3" id="textarea"></textarea>
                                                                                                </div>
                                                                                                <div class="col-md-6 mt-2">
                                                                                                                <label>Pendidikan</label>
                                                                                                                                @if($errors -> has('pendidikan'))
                                                                                                                <div class='text-danger'>
                                                                                                                                {{$errors -> first ('pendidikan')}}
                                                                                                                </div>
                                                                                                                                @endif
                                                                                                                <input class="form-control" type="text" placeholder="masukkan perusahaan">
                                                                                                </div>
                                                                                                <div class="col-md-6 mt-2">
                                                                                                                <label for="textarea">Kualifikasi</label>
                                                                                                                                @if($errors -> has('kualifikasi'))
                                                                                                                <div class='text-danger'>
                                                                                                                                {{$errors -> first ('kualifikasi')}}
                                                                                                                </div>
                                                                                                                                @endif
                                                                                                                <textarea class="form-control" rows="3" id="textarea"></textarea>
                                                                                                </div>
                                                                                                <div class="col-md-6" style="margin-top: -40px;">
                                                                                                                <label>Lokasi</label>
                                                                                                                                @if($errors -> has('lokasi'))
                                                                                                                <div class='text-danger'>
                                                                                                                                {{$errors -> first ('lokasi')}}
                                                                                                                </div>
                                                                                                                                @endif
                                                                                                                <input class="form-control" type="text" placeholder="masukkan lokasi">
                                                                                                </div>
                                                                                                <div class="col-md-9">
                                                                                                                <input type="submit" class="btn btn-outline-success" value="simpan">
                                                                                                </div>
                                                                                </div>
                                                                                
                                                                            
                                                </div>
                                </div>
                </div>
</div> -->