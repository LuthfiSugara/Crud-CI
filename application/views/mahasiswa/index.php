<div class="container">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row-mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Data Mahasiwa</strong> Berhasil <?= $this->session->flashdata('flash'); ?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
		</div>
	<?php endif; ?>
	

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
		</div>
	</div>

	<div class="row-mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group mb-3 mt-3">
				  <input type="text" class="form-control" placeholder="Cari Data Mahasiswa....." name="keyword">
				  <div class="input-group-append">
				    <button class="btn btn-outline-primary" type="sumbit" id="button-addon2">Cari</button>
				  </div>
				</div>
			</form>
		</div>
	</div>

	<div class="row-mt-3">
		<div class="col-md-6">
			<h1>Daftar Mahasiswa</h1>
			<?php if (empty($mahasiswa)) : ?>
				<div class="alert alert-danger" role="alert">
				  Data mahasiswa tidak ditemukan
				</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach ($mahasiswa as $key => $value) : ?>
			  		<li class="list-group-item">
			  			<img src="uploads/<?= $value['gambar'];?>" width="50" height="50">
			  			<?= $value['nama']; ?>
			  			<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $value['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
			  			<a href="<?= base_url(); ?>mahasiswa/detail/<?= $value['id']; ?>" class="badge badge-primary float-right" ">detail</a>
			  			<a href="<?= base_url(); ?>mahasiswa/ubah/<?= $value['id']; ?>" class="badge badge-success float-right" ">ubah</a>
			  			</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>