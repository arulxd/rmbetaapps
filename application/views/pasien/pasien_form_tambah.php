<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<strong>Tambah Data Pasien</strong>
		</div>
		<div class="card-body card-block">
			<?php echo form_open('pasien/simpan'); ?>
			<form action="" method="post" class="form-horizontal">

				<div class="row form-group">
					<div class="col col-md-2"><label for="varchar" class=" form-control-label">No Rekam medis</label>
					</div>
					<div class="col col-md-3"><input type="text" id="norm" name="norm" placeholder="No Rekam medis"
							class="form-control">
					</div>
				</div>
				<div class="row form-group">
					<div class="col col-md-2"><label for="varchar" class=" form-control-label">Nama Pasien</label></div>
					<div class="col col-md-4"><input type="text" id="nama_pasien" name="nama_pasien"
							placeholder="Nama Pasien" class="form-control" required="">
					</div>
				</div>

				<div class="row form-group">
					<div class="col col-md-2"><label for="varchar" class=" form-control-label">Alamat</label></div>
					<div class="col-12 col-md-4">
						<textarea type="text" id="alamat" rows="3" name="alamat" placeholder="Alamat Tempat Tinggal"
							class="form-control" required=""></textarea>
					</div>
				</div>

				<div class="row form-group">
					<div class="col col-md-2"><label for="varchar" class=" form-control-label">Jenis Kelamin</label>
					</div>
					<div class="col col-md-4"><input type="text" id="jenis_kelamin" name="jenis_kelamin"
							placeholder="Jenis Kelamin" class="form-control" required="">
					</div>
				</div>

				<div class="row form-group">
					<div class="col col-md-2"><label for="varchar" class=" form-control-label">Nama Bapak</label></div>
					<div class="col col-md-4"><input type="text" id="nama_bapak" name="nama_bapak"
							placeholder="Nama Bapak" class="form-control" required="">
					</div>
				</div>

				<div class="row form-group">
					<div class="col col-md-2"><label for="date" class=" form-control-label">Tanggal Input</label></div>
					<div class="col col-md-4"><input type="date" id="tanggal" name="tanggal" placeholder=""
							class="form-control">
					</div>
				</div>

				<div class="card-footer">
					<button type="submit" class="btn btn-danger"><i class="fa fa-dot-circle-o"></i> Simpan </button>
					<a href="<?php echo site_url('index.php') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i>
						Kembali</a>
				</div>
			</form>
			<?php echo form_close(); ?>
		</div>
