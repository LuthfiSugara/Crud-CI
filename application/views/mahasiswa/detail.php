<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Detail data mahasiswa
			  </div>
			  <div class="card-body">
			  	<img src="../../uploads/<?= $mahasiswa['gambar']; ?>" width="100" height="100" class="rounded float-right" alt="...">
			    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6>
			    <p class="card-text"><?= $mahasiswa['nrp']; ?></p>
			    <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
			    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
			  </div>
			</div>
		</div>
	</div>
</div>