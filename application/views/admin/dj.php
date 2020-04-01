<?= $this->session->flashdata('notif'); ?>
<div class="card col-12">

	<div class="row">
		<div class="col-12">

			<div class="card-title">
				<h4 class="mt-4 card-tittle">Data DJ Synchronize</h4>
			</div>
			<p class="text-muted mt-1">Data DJ menampilkan DJ yang kami miliki</p>
			<br>
			<div class="row">
				<?php foreach ($dj as $d): ?>
				<div class="col-md-5 col-lg-4">
					<div class="card">
						<img src="<?php echo base_url('/assets/images/dj/'.$d->video) ?>" height="350"/>

						<div class="card-body">
							<h6 class="card-title text-center"><b><?php echo $d->nama_dj ?></b></h6>
							<p class="card-text">Nickname : <?php echo $d->nickname ?></p>
							<p class="card-text">Genre : <?php echo $d->genre ?></p>
							<p class="card-text">Date of Birth : <?php echo $d->birth ?></p>
							<p class="card-text">City : <?php echo $d->kota ?></p>
							<p class="card-text">Social Media : <?php echo $d->sosmed ?></p>
							<a href="" class="btn btn-sm btn-block btn-light text-center" data-toggle="modal" data-target="#info<?= $d->id_dj ?>"><i class="fa fa-fw fa-info-circle"></i><b> Info </b> </a>
							<a href="" class="btn btn-sm btn-block btn-danger text-center" data-toggle="modal"
								data-target="#hapus_data<?= $d->id_dj ?>">Hapus</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>



			</div>
		</div>
	</div>
</div>
<button class="btn btn-block btn-info sweet-success" data-toggle="modal" data-target="#tambah_data"><i
		class="fa fa-fw fa-plus-circle"></i> DJ Baru</button>
<!-- MODAL TAMBAH GS -->
<div id="tambah_data" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
	aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-fw fa-star"></i> Tambah DJ Baru</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open("index.php/admin/dj/tambah", array('enctype'=>'multipart/form-data')); ?>
				<h5 class="mb-3 text-danger">* Penambahan data ini akan ditampilkan sesuai dengan jumlah data di halaman web
				</h5>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label"> DJ Name <b class="text-danger">*</b></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama_dj">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label"> Nickname <b class="text-danger">*</b></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nickname">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Date of Birth <b class="text-danger">*</b></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="birth" placeholder="City , dd month yyyy">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Genre <b class="text-danger">*</b></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="genre">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Foto <b class="text-danger">*</b></label>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="video">
					</div>
				</div>
				<div class="form-group row">
					<label for="exampleFormControlTextarea1" class="col-sm-2">Kota <b class="text-warning">*</b></label>
					<div class="col-sm-10">
						<textarea name="kota" class="form-control" id="exampleFormControlTextarea1" rows="3"
							placeholder="city"></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Social Media <b class="text-danger">*</b></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sosmed">
					</div>
				</div>

				<input type="submit" class="btn btn-danger btn-block" name="submit" value="SIMPAN">


				<?php echo form_close(); ?>

			</div>
		</div>
	</div>
</div>
<!-- END MODAL -->

<!-- MODAL HAPUS -->
<?php foreach($dj as $d) { ?>
<div class="modal fade" id="hapus_data<?= $d->id_dj ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Hapus Data DJ</h5>
				<input type="hidden" name="id_dj">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<b>*Anda yakin akan menghapus DJ ini ?</b>
			</div>
			<div class="modal-footer">

				<a href="<?= base_url('index.php/admin/dj/delete'); ?>/<?= $d->id_dj ?>" class="btn btn-danger">Hapus</a>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- END MODAL HAPUS -->

<!-- MODAL INFO -->
<?php foreach($dj as $d) { ?>
<div class="modal fade" id="info<?= $d->id_dj ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Detail</h5>
				<input type="hidden" name="id_dj">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4 pl-4">
							<img src="<?php echo base_url('/assets/images/dj/'.$d->video) ?>" height="250px" width="150" />
					</div>
					<div class="col-lg-8 mt-2">
						<h4><b class="text-center"><?= $d->nama_dj; ?></b></h4><br>
						<h6><b class="text-info">Nickname : </b><?= $d->nickname; ?></h6>
						<h6><b class="text-info">Genre : </b><?= $d->genre; ?></h6>
						<h6><b class="text-info">Date of Birth : </b><?= $d->birth; ?></h6>
						<h6><b class="text-info">City : </b><?= $d->kota; ?></h6>
						<h6><b class="text-info">Social Media : </b><?= $d->sosmed; ?></h6>
					</div>
				</div>


			</div>
			<div class="modal-footer">

				<a href="#" class="btn btn-danger">Hapus</a>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- END MODAL HAPUS -->
