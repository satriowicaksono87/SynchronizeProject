<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Profil</title>
	<link href="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet"
		type="text/css">
	<link href="<?= base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/profil.css">
	
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="col-md-12 user">
					<div class="row">
						<div class="col-md-12 image">
							<img src="<?= base_url(); ?>assets/img/user.png" width="100" height="100" alt="">
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12 text-center mb-2">
							<h2><?= $_SESSION['nama_user'] ?></h2>
							<span><?= $_SESSION['email'] ?></span>
						</div>
					</div>
					<div class="row mt-2 mb-4">
						<div class="col-md-12">
							<a class="btn btn-success home" href="<?= base_url('home/home') ?>">Back to Home</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<h3 class="mt-3">History Transaksi</h3>
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Qty</th>
							<th> Date</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if(count($transaksi) > 0) { 
							foreach ($transaksi as $trs ) {?>
						<tr>
							<td><?= $_SESSION['nama_user']; ?></td>
							<td><?= $trs['qty']; ?></td>
							<td><?= date('d M Y', $trs['tanggal']) ?></td>
							<td><?= $trs['status']; ?></td>
						</tr>

						<?php }} else { ?>
						<tr>
							<td class="text-center pt-3" colspan="4">
								<div style="margin-bottom: -7px !important;" class="alert alert-danger" role="alert">
									Belum ada data pembelian!
								</div>
							</td>
						</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.js"
	type="text/javascript"></script>
<script>
	var table = new DataTable("table");

</script>

</html>
