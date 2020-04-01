<div class="col-lg-12">
	<?= $this->session->flashdata('notif'); ?>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<div class="card-title">
						<h4>Scan Ticket</h4>
					</div>
				</div>
			</div>
			<div class="row mt-3 mb-3" align="center">
				<div class="col-md-6">
					<div class="panel-heading">
						<div class="navbar-form navbar-right">
							<select class="form-control" id="camera-select"></select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<button title="Decode Image" class="btn btn-default btn-sm" id="decode-img" type="button"
							data-toggle="tooltip"><i class="fa fa-upload"></i></button>
						<button title="Image shoot" class="btn btn-info btn-sm disabled" id="grab-img" type="button"
							data-toggle="tooltip"><i class="fa fa-image"></i></button>
						<button title="Play" class="btn btn-success btn-sm" id="play" type="button"
							data-toggle="tooltip"><i class="fa fa-play"></i></button>
						<button title="Pause" class="btn btn-warning btn-sm" id="pause" type="button"
							data-toggle="tooltip"><i class="fa fa-pause"></i></button>
						<button title="Stop streams" class="btn btn-danger btn-sm" id="stop" type="button"
							data-toggle="tooltip"><i class="fa fa-stop"></i></button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row" align="center">
						<div class="col-md-6">
							<div class="well" style="position: relative;display: inline-block;">
								<canvas width="320" height="240" id="webcodecam-canvas"></canvas>
								<div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
								<div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
								<div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
								<div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="thumbnail" id="result">
								<div class="well" style="overflow: hidden;">
									<img width="320" height="240" id="scanned-img" src="">
								</div>
								<div class="caption">
									<h3>Scanned result</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-title">
				<h4>Transaksi Masuk</h4>
			</div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr style="background-color: #324cdd; color:white;">
							<th class="text-center">#</th>
							<th class="text-center">Nama</th>
							<th class="text-center">Qty</th>
							<th class="text-center">Status</th>
							<th class="text-center">Tanggal</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; 
                        foreach ($transaksi as $t) { ?>
						<tr>
							<th class="text-center"><?= $no++; ?></th>
							<td class="text-center"><?= $t['nama_user']; ?></td>
							<td class="text-center"><?= $t['qty'] ?></td>
							<td class="text-center">
								<button type="button" class="btn btn-sm btn-warning">
									<?= $t['status'] ?>
								</button>
							</td>
							<td class="text-center"><?= date('d M Y',$t['tanggal'] ) ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>

		</div>
	</div>
	<!-- /# card -->
</div>

<script type="text/javascript" src="<?= base_url(); ?>assets/qr/js/data-tables.js"></script>
<script>
	var table = new DataTable("table");
</script>

<script type="text/javascript" src="<?= base_url(); ?>assets/qr/js/filereader.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/qr/js/qrcodelib.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/qr/js/webcodecamjs.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/qr/js/main.js"></script>
