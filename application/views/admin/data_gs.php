<?= $this->session->flashdata('notif'); ?>
<div class="card col-12">

	<h3 class="mt-3 card-tittle">Data Guest Star</h3>

	<div class="row">
		<div class="col-12">

			<p class="text-muted">Data guest star merupakan data penampil pada saat festival.</p>
			<div class="mb-3">
				<form class="" action="index.html" method="post">
					<div class="form-group row">
						<div class="col-sm-5">
							<select class="form-control" name="genre" id="genre">
								<option value="">Semua Guest Star</option>
								<option value="aktif">Aktif</option>
								<option value="selesai">Selesai</option>
							</select>
						</div>
						<div class="col-sm-3">
							<input type="submit" value="Show" class="btn btn-lg btn-primary">
						</div>
					</div>
				</form>
			</div>
			<div class="row">
				<!-- CAROUSEL -->
				<!-- <div class="card-body">
                                <div class="bootstrap-carousel">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        </ol>
                                        <div class="carousel-inner" style="height:400px">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="<?= base_url('assets/') ?>images/gs/denny.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="<?= base_url('assets/') ?>images/gs/denny.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="<?= base_url('assets/') ?>images/gs/denny.jpg" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="<?= base_url('assets/') ?>images/gs/denny.jpg" alt="Fourt slide">
                                            </div>
                                        </div><a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators"
                                            data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div> -->
				<!-- END CAROUSEL -->



				<?php foreach ($guest as $g): ?>
				<div class="col-md-5 col-lg-3">
					<div class="card" style="height: 500px;">
						<img src="<?php echo base_url('/assets/images/gs/'.$g->gambar) ?>" height="180px" />
						<div class="card-body">
							<h6 class="card-title text-center"><b><?php echo $g->nama_guest ?></b></h6>

							<p class="card-text text-center">Status : <a href="#" class=" text-primary"><?= $g->status_gs ?></a></p>
							<p class="card-text text-left"><?php echo $g->nama_event ?></p>
							<p class="card-text text-left"><?php echo $g->tanggal ?></p>
							<a href="" class="btn btn-sm btn-block btn-light text-center" data-toggle="modal"
								data-target="#ubah_data<?= $g->id_guest; ?>"><i
									class="fa fa-fw fa-info-circle"></i><b> Info </b> </a>
							<a href="" class="btn btn-sm btn-block btn-danger text-center" data-toggle="modal" data-target="#hapus_data">Hapus</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>



			</div>
		</div>
	</div>
</div>
<button class="btn btn-block btn-info sweet-success" data-toggle="modal" data-target="#tambah_data"><i
		class="fa fa-fw fa-plus-circle"></i> Guest Star</button>
<!-- MODAL TAMBAH GS -->
<div id="tambah_data" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
	aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-fw fa-star"></i> Tambah Data Guest
					Star</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open("index.php/admin/guest_star/tambah", array('enctype'=>'multipart/form-data')); ?>
				<h5 class="mb-3 text-danger">* Penambahan data ini akan ditampilkan sesuai dengan jumlah data di halaman
					web</h5>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Full Name <b
								class="text-danger">*</b></label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nama_guest">
						</div>
					</div>
					<input type="hidden" name="status_gs" value="aktif">
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Event <b
							class="text-danger">*</b></label>
					<div class="col-sm-10">
						<select class="form-control" name="id_event">
							<option value="">---PILIH---</option>
							<?php foreach ($event as $e) { ?>
								<option value="<?= $e->id_event ?>"><?= $e->nama_event; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Genre <b
							class="text-danger">*</b></label>
					<div class="col-sm-10">
						<select class="form-control" name="genre" id="genre">
							<option value="">---PILIH---</option>
							<option value="jazz">JAZZ</option>
							<option value="orchestra">ORCHESTRA</option>
							<option value="dangdut">DANGDUT</option>
							<option value="pop">POP</option>
							<option value="indie">INDIE</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Gambar <b
							class="text-danger">*</b></label>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="gambar">
					</div>
				</div>
				<div class="form-group row">
					<label for="exampleFormControlTextarea1" class="col-sm-2">Deskripsi <b
							class="text-warning">*</b></label>
					<div class="col-sm-10">
						<textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1"
							rows="3"></textarea>
					</div>
				</div>
				<input type="submit" class="btn btn-danger btn-block" name="submit" value="SIMPAN">


				<?php echo form_close(); ?>

			</div>
		</div>
	</div>
</div>
<!-- END MODAL -->

<!-- MODAL UBAH GS -->
<?php foreach ($guest as $g) { ?>
	<div id="ubah_data<?= $g->id_guest; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
		aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-fw fa-star"></i>Data Guest
						Star</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="" action="<?php echo base_url(); ?>index.php/admin/guest_star/ubah/" method="post">
					<h5 class="mb-3 text-danger">* Data ini akan ditampilkan sesuai dengan data di halaman
						web</h5>
						<div class="form-group row">
							<div class="col-sm-10">
								<img src="<?php echo base_url('/assets/images/gs/'.$g->gambar) ?>" height="200" width="250" class="ml-5"/>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-2 col-form-label">Full Name <b
									class="text-danger">*</b></label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama_guest" value="<?= $g->nama_guest; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-2 col-form-label">Status<b
									class="text-danger">*</b></label>
						<div class="col-sm-10">
							<select class="form-control" name="id_event">
									<option value="<?= $g->status_gs ?>"><?= $g->status_gs; ?></option>
									<option value="aktif">Aktif</option>
									<option value="selesai">Selesai</option>
							</select>
						</div>
						</div>
						<input type="hidden" name="status_gs" value="aktif">
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Event <b
								class="text-danger">*</b></label>
						<div class="col-sm-10">
							<select class="form-control" name="id_event">
								<?php foreach ($event as $e) { ?>
									<option value="<?= $e->id_event ?>"><?= $e->nama_event; ?></option>
									<option value="<?= $e->id_event ?>"><?= $e->nama_event; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Genre <b
								class="text-danger">*</b></label>
						<div class="col-sm-10">
							<select class="form-control" name="genre" id="genre">
								<option value="<?= $g->genre?>"><?= $g->genre; ?></option>
								<option value="jazz">JAZZ</option>
								<option value="orchestra">ORCHESTRA</option>
								<option value="dangdut">DANGDUT</option>
								<option value="pop">POP</option>
								<option value="indie">INDIE</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleFormControlTextarea1" class="col-sm-2">Deskripsi <b
								class="text-warning">*</b></label>
						<div class="col-sm-10">
							<textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1"
								rows="3" value="<?= $g->deskripsi; ?>"></textarea>
						</div>
					</div>
					<input type="submit" class="btn btn-danger btn-block" name="submit" value="SIMPAN">
					</form>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<!-- END MODAL -->

<!-- MODAL HAPUS -->
<div class="modal fade" id="hapus_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Hapus Guest Star</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<b>*Anda yakin akan menghapus Guest Star ini ?</b>
			</div>
			<div class="modal-footer">

				<a href="<?= base_url('admin/guest_star/delete'); ?>/<?= $g->id_guest ?>" class="btn btn-danger">Hapus</a>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL HAPUS -->
