<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				  <div class="card-header">
				    Form Tambah Data Mahasiswa
				  </div>
				  <div class="card-body">
				  	<!-- <?php if (validation_errors()) : ?>
				  		<div class="alert alert-danger" role="alert">
					  	<?= validation_errors(); ?>
					</div>
				  	<?php endif; ?> -->
				  	
				  	
				  	<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
						    <label for="nama">Nama</label>
						    <input type="text" class="form-control" id="nama" name="nama">
						    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
		  				</div>
		  				<div class="form-group">
						    <label for="nrp">NRP</label>
						    <input type="text" class="form-control" id="nrp" name="nrp">
						    <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
		  				</div>
		  				<div class="form-group">
						    <label for="email">Email</label>
						    <input type="text" class="form-control" id="email" name="email">
						    <small class="form-text text-danger"><?= form_error('email'); ?></small>
		  				</div>
		  				<div class="form-group">
						    <label for="jurusan">Jurusan</label>
						    <div class="form-group">
							    <select class="form-control" id="jurusan" name="jurusan">
							      <option value="Teknik Informatika">Teknik Informatika</option>
							      <option value="Teknik Mesin">Teknik Mesin</option>
							      <option Teknik Elektro>Teknik Elektro</option>
							    </select>
							 </div>
		  				</div>
		  				<a href="#" class="btn btn-primary btn-lg active mb-3" role="button" aria-pressed="true"><input type="file" name="input_gambar"></a>
		  				
		  				<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				  </div>
				</div>

		</div>
	</div>
</div>