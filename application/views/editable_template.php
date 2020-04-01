<?php 
	foreach ($konten as $main ) {
		$id_event = $main['id_event'];
		$logo = $main['logo_event'];
		$about = $main['about_event'];
		$venue = $main['venue'];
		$location = $main['location_venue'];
		$tanggal = $main['tanggal'];
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- Favicons -->
	<link href="<?= base_url(); ?>assets/img/default.png" type="image/png" rel="icon">
	<link href="<?= base_url(); ?>assets/img/default.png" type="image/png" rel="apple-touch-icon">
	<title>Syncronize</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
		rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="<?= base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="<?= base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/lib/venobox/venobox.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
	<!--==========================
    Header
  	============================-->
	<header id="header">
		<div class="container">

			<div id="logo" class="pull-left">
				<a href="#intro" class="scrollto">
					<img src="<?= base_url(); ?>assets/img/logo/logo sync white.png" alt="" title="">
				</a>
			</div>

			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li><a href="#intro">Home</a></li>
					<li class="about"><a href="#about">About</a></li>
					<li><a href="#lineup">Line Up</a></li>
					<li><a href="#schedule">Schedule</a></li>
					<li><a href="#venue">Venue</a></li>
					<li><a href="#history">History</a></li>
					<li><a href="#supporters">Sponsors</a></li>
					<li><a href="#footer">Contact</a></li>
					<li>
						<a data-toggle="dropdown">
							<i class="fa fa-user"></i>
						</a>
						
						<ul class="profil">
							<li>
								<a href="<?= base_url('log/logout') ?>">
									<i class="feather icon-log-out"></i> Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header End -->

	<!--==========================
    Intro Section
  	============================-->
	<section id="intro">
		<div class="intro-container wow fadeIn">
			<img class="pb-0 event-img" src="<?= base_url(); ?>assets/img/logo/<?= $logo; ?>" alt="" title="">
			<p class="mb-4 pb-0">21 Februari 2019, Graha Cakrawala Universitas Negeri Malang</p>
			<a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
			<a href="#about" class="about-btn scrollto">About The Event</a>
			<button type="button" class="btn btn-outline-danger mt-2" data-toggle="modal" data-target="#editMain">
				Edit Konten
			</button>
		</div>

		<!-- Modal Edit Konten -->
		<div id="editMain" class="modal fade">
			<div class="modal-dialog " role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 style="color: navy !important;" class="modal-title">Edit Main Konten</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" action="<?= base_url('user/editable_home/editKonten')?>"
							enctype="multipart/form-data">
							<div>
								<input class="form-control mb-3" placeholder="Nama Event" name="nama_event" type="text"
									required>
							</div>
							<div>
								<textarea class="form-control mb-3" placeholder="Deskripsi Event" name="deskripsi_event"
									rows="3" required></textarea>
							</div>
							<div>
								<label class="text-dark">Waktu Event</label>
								<input class="form-control mb-3" type="date" name="tanggal">
							</div>
							<div class="form-group">
								<label class="text-dark">Logo Event</label>
								<input name="fotopost" type="file" class="form-control-file mb-3">
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-success btn-block">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->
	</section>

	<main id="main">
		<!--==========================
		About Section
		============================-->
		<section id="about">
			<div class="container wow fadeInUp">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-5 pl-4">
						<h2>About The Event</h2>
						<p><?= $about; ?></p>
					</div>
					<div class="col-lg-3 pl-4">
						<h3>Where</h3>
						<p><?= $venue; ?></p>
					</div>
					<div class="col-lg-3 pl-4">
						<h3>When</h3>
						<p><?= $tanggal; ?></p>
					</div>
				</div>
			</div>
		</section>

		<!--==========================
		Line Up Section
		============================-->
		<section id="lineup" class="wow fadeInUp">
			<div class="container">
				<div class="section-header">
					<h2>line up</h2>
					<p>Here are some of our line up</p>
				</div>

				<div class="row">
					<?php foreach ($guest as $gs) : ?>
					<div class="col-lg-4 col-md-6">
						<div class="guest">
							<a href="<?= base_url(); ?>home/lineup/<?= $gs['id_guest'] ?>">
								<img src="<?= base_url(); ?>assets/img/default.png" alt="Speaker 1"
									class="img-fluid-guest">
							</a>
							<div class="details">
								<h3><a href="<?= base_url('home/lineup'); ?>"><?= $gs['nama_guest']; ?></a></h3>
								<p><?= $gs['genre']; ?></p>
								<div class="social">
									<a href=""><i class="fa fa-twitter"></i></a>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-google-plus"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<!--==========================
		Schedule Section
		============================-->
		<section id="schedule" class="section-with-bg">
			<div class="container wow fadeInUp">
				<div class="section-header">
					<h2>Event Schedule</h2>
					<p>Here is our event schedule</p>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-5">
						<table class="table text-center" style="margin-bottom: 0 !important;">
							<thead>
								<tr>
									<th>Hari</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($jadwal as $j ) : ?>
								<tr>
									<td>Day <?= $j['hari']; ?></td>
									<td>
										<a data-toggle="modal" type="button"
											data-target="#editJadwal<?= $j['id_jadwal']; ?>">
											<i class="fa fa-pencil"></i>
										</a>
										<a href="<?= base_url(); ?>user/editable_home/hapusJadwal/<?= $j['id_jadwal'] ?>"
											onclick="return confirm('Anda yakin ingin menghapus data?')">
											<i class="fa fa-trash"></i>
										</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<div class="row justify-content-center">
							<div class="detail-content col-lg-12 mt-2">
								<a href="<?= base_url(); ?>user/editable_home/tambahJadwal" class="btn btn-outline-danger"
									style="width: 100%;">
									Tambah Hari
								</a>
							</div>
						</div>

						<!-- Modal Edit -->
						<?php foreach ($jadwal as $j) : ?>
						<div id="editJadwal<?= $j['id_jadwal']; ?>" class="modal fade">
							<div class="modal-dialog " role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 style="color: navy !important;" class="modal-title">Edit Hari</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form method="POST"
											action="<?= base_url();?>user/editable_home/editJadwal/<?= $j['id_jadwal']; ?>">
											<div class="form-group">
												<input type="text" class="form-control" name="Hari"
													value="Day <?= $j['hari'] ?>" placeholder="Hari">
											</div>
											<div class="text-center">
												<button type="submit" class="btn btn-success btn-block">Save</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
						<!-- End Modal -->
					</div>

					<div class="col-lg-9">
						<?php foreach ($jadwal as $j ) : ?>
						<table class="table" style="margin-bottom: 0 !important;">
							<h4 class="text-center mt-3 pt-3 mb-4" style="border-top:2px dotted grey;">Day
								<?= $j['hari'] ?></h4>
							<thead>
								<tr>
									<th>Waktu</th>
									<th>Kegiatan</th>
									<th>Deskripsi</th>
									<th>Gambar</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($detail_jadwal as $dj ) {
								if ($j['id_jadwal'] == $dj['id_jadwal']) { ?>
								<tr>
									<td><?= $dj['waktu'] ?></td>
									<td><?= $dj['kegiatan'] ?></td>
									<td><?= $dj['deskripsi_kegiatan'] ?></td>
									<td>
										<?php if ($dj['gambar']) { ?>
										<img height="50" style="border-radius: 30px;"
											src="<?= base_url(); ?>assets/img/<?= $dj['gambar'] ?>">
										<?php } else { ?>
										No Image
										<?php } ?>
									</td>
									<td>
										<a data-toggle="modal" type="button"
											data-target="#editDetailJadwal<?= $dj['id_detail_jadwal']; ?>">
											<i class="fa fa-pencil"></i>
										</a>
										<a href="<?= base_url(); ?>user/editable_home/hapusDetailJadwal/<?= $dj['id_detail_jadwal'] ?>"
											onclick="return confirm('Anda yakin ingin menghapus data?')">
											<i class="fa fa-trash"></i>
										</a>
									</td>
								</tr>
								<?php }} ?>
							</tbody>
						</table>
						<div class="row justify-content-center">
							<div class="detail-content col-lg-12 mt-2">
								<button class="btn btn-outline-danger float-right" type="button" data-toggle="modal"
									data-target="#tambahDetailJadwal<?= $j['id_jadwal'] ?>">
									<i class="fa fa-plus"></i>
								</button>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<!-- Modal Edit -->
				<?php foreach ($detail_jadwal as $dj) : ?>
				<div id="editDetailJadwal<?= $dj['id_detail_jadwal']; ?>" class="modal fade">
					<div class="modal-dialog " role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 style="color: navy !important;" class="modal-title">Edit FAQ</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST"
									action="<?= base_url();?>user/editable_home/editDetailJadwal/<?= $dj['id_jadwal']; ?>">
									<div class="form-group">
										<input type="text" class="form-control" name="waktu"
											value="<?= $dj['waktu']; ?>">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="kegiatan"
											value="<?= $dj['kegiatan']; ?>">
									</div>
									<div class="form-group">
										<textarea type="text" class="form-control"
											name="deskripsi_kegiatan"><?= $dj['deskripsi_kegiatan']; ?></textarea>
									</div>
									<div class="form-group">
										<label class="text-dark">Gambar</label>
										<input name="fotopost" type="file" class="form-control-file">
										<span class="text-danger mt-2">Before: <?= $dj['gambar']; ?></span>
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-success btn-block">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				<!-- End Modal -->
				<!-- Tambah Schedule -->
				<?php foreach ($jadwal as $j) : ?>
				<div id="tambahDetailJadwal<?= $j['id_jadwal'] ?>" class="modal fade">
					<div class="modal-dialog " role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 style="color: navy !important;" class="modal-title">Tambah Day <?= $j['hari'] ?>
								</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST"
									action="<?= base_url('user/editable_home/tambahDetailJadwal/'. $j['id_jadwal'] )?>">
									<div class="form-group">
										<input type="text" class="form-control" name="waktu" placeholder="Waktu">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="kegiatan" placeholder="Kegiatan">
									</div>
									<div class="form-group">
										<textarea type="text" class="form-control" name="deskripsi_kegiatan"
											placeholder="Deskripsi"></textarea>
									</div>
									<div class="form-group">
										<label class="text-dark">Gambar</label>
										<input name="fotopost" type="file" class="form-control-file mb-3">
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-success btn-block">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				<!-- End Modal -->

				<h3 class="mt-5 text-center">Preview</h3>

				<ul class="nav nav-tabs mt-4" role="tablist">
					<?php foreach ($jadwal as $j) : ?>
					<li class="nav-item">

						<a class="nav-link" href="#day-<?= $j['id_jadwal'] ?>" role="tab" data-toggle="tab"
							aria-selected="true">Day <?= $j['hari'] ?></a>
					</li>
					<?php endforeach; ?>
				</ul>

				<div class="tab-content row justify-content-center">
					<?php foreach ($jadwal as $j ) : ?>
					<div role="tabpanel" class="col-lg-9 tab-pane fade" id="day-<?= $j['id_jadwal'] ?>">
						<?php foreach ($detail_jadwal as $dj ) {
						if ($j['id_jadwal'] == $dj['id_jadwal']) {
							if ($dj['gambar'] == null) { ?>
						<div class="row schedule-item">
							<div class="col-md-2 mt-3"><time><?= $dj['waktu']; ?></time></div>
							<div class="col-md-10">
								<h4><?= $dj['kegiatan']; ?></h4>
								<p><?= $dj['deskripsi_kegiatan']; ?></p>
							</div>
						</div>
						<?php } else { ?>
						<div class="row schedule-item">
							<div class="col-md-2 mt-3"><time><?= $dj['waktu']; ?></time></div>
							<div class="col-md-10">
								<div class="guest">
									<img class="" src="<?= base_url(); ?>assets/img/<?= $dj['gambar'] ?>">
								</div>
								<h4><?= $dj['kegiatan']; ?></h4>
								<p><?= $dj['deskripsi_kegiatan']; ?></p>
							</div>
						</div>
						<?php } } }	 ?>
					</div>
					<?php endforeach; ?>
				</div>

			</div>

		</section>

		<!--==========================
		Venue Section
		============================-->
		<section id="venue" class="wow fadeInUp">
			<div class="container-fluid">
				<div class="section-header">
					<h2>Event Venue</h2>
					<p>Event venue location info and gallery</p>
				</div>
				<div class="row no-gutters">
					<div class="col-lg-6 venue-map">
						<iframe src="<?= $location; ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-lg-6 venue-info">
						<div class="row justify-content-center">
							<div class="col-11 col-lg-8">
								<h3><?= $venue; ?></h3>
								<p>Gedung Graha Cakrawala Universitas Negeri Malang</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mb-3">
					<button type="button" class="btn btn-outline-danger float-right mt-3" data-toggle="modal"
						data-target="#editVenue">
						Edit Konten
					</button>
				</div>

				<!-- Modal Edit -->
				<div id="editVenue" class="modal fade">
					<div class="modal-dialog " role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 style="color: navy !important;" class="modal-title">Edit Main Konten</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" action="<?= base_url();?>user/editable_home/editVenue/<?= $id_event; ?>">
									<div>
										<small class="text-danger">*Isi dengan venue event</small>
										<input class="form-control mb-3" placeholder="Venue" name="venue" type="text"
											required>
									</div>
									<div>
										<small class="text-danger">*Isi dengan iFrame dari google maps untuk maps
											venue</small>
										<textarea class="form-control mb-3" placeholder="Maps Venue"
											name="location_venue" rows="3" required></textarea>
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-success btn-block">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- End Modal -->
			</div>
		</section>

		<!--==========================
		Buy Ticket Section
		============================-->
		<section id="buy-tickets" class="section-with-bg wow fadeInUp">
			<div class="container">
				<div class="section-header">
					<h2>Buy Tickets</h2>
					<p>Buy the ticket and join the festival.</p>
				</div>
				<div class="row">
					<?php foreach ($tiket as $tkt ) : 
					if ($tkt < 2) { ?>
					<div class="col-lg-12 mt-3">
						<div class="tiket">
							<?= $tkt['kelas']; ?> <br>
							<?= $tkt['harga']; ?> <br>
							<button type="button" class="btn btn-outline-primary mt-2" data-toggle="modal"
								data-target="#buy-ticket-modal<?= $tkt['id_tiket'] ?>">
								Beli
							</button>
						</div>
					</div>
					<?php } else { ?>
					<div class="col-lg-6 mt-3">
						<div class="tiket">
							<?= $tkt['kelas']; ?> <br>
							<?= $tkt['harga']; ?> <br>
							<button type="button" class="btn btn-outline-primary mt-2" data-toggle="modal"
								data-target="#buy-ticket-modal<?= $tkt['id_tiket'] ?>">
								Beli
							</button>
						</div>
					</div>
					<?php } endforeach; ?>
				</div>
			</div>
			<?php foreach ($tiket as $tkt) : ?>

			<!-- Modal Order Form -->
			<div id="buy-ticket-modal<?= $tkt['id_tiket'] ?>" class="modal fade">
				<div class="modal-dialog " role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 style="color: navy !important;" class="modal-title">Buy Tickets</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="<?= base_url('home/add_item/'.$tkt['id_tiket']) ?>">
								<div>
									<small class="mb-2 text-danger">*Maksimal pembelian 5 tiket</small>
									<input class="form-control mb-3" placeholder="Masukan Jumlah Tiket" type="number"
										min="1" max="5" name="qty" required>
								</div>
								<div class="text-center">
									<button type="submit" class="btn">Buy Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			<?php endforeach; ?>
		</section>

		<!--==========================
		Gallery Section
		============================-->



		<section id="history" class="wow fadeInUp">

			<div class="container">
				<div class="section-header">
					<h2>History</h2>
					<p>Check our gallery from the recent events</p>
				</div>
			</div>

			<div class="owl-carousel gallery-carousel">
				
				<a href="<?= base_url(); ?>assets/img/default.png" class="venobox" data-gall="gallery-carousel"><img height="200" width="250" src="<?= base_url(); ?>assets/img/default.png" alt=""></a>
				<a href="<?= base_url(); ?>assets/images/gs/ardhito1.jpg" class="venobox" data-gall="gallery-carousel"><img height="200" width="250" src="<?= base_url(); ?>assets/images/gs/ardhito1.jpg" alt=""></a>
				<a href="<?= base_url(); ?>assets/images/gs/denny1.jpg" class="venobox" data-gall="gallery-carousel"><img height="200" width="250" src="<?= base_url(); ?>assets/images/gs/denny1.jpg" alt=""></a>
				<a href="<?= base_url(); ?>assets/images/gs/feby1.jpg" class="venobox" data-gall="gallery-carousel"><img height="200" width="250" src="<?= base_url(); ?>assets/images/gs/feby1.jpg" alt=""></a>
				<a href="<?= base_url(); ?>assets/img/default.png" class="venobox" data-gall="gallery-carousel"><img height="200" width="250" src="<?= base_url(); ?>assets/img/default.png" alt=""></a>
				<a href="<?= base_url(); ?>assets/images/gs/ompmr1.jpg" class="venobox" data-gall="gallery-carousel"><img height="200" width="250" src="<?= base_url(); ?>assets/images/gs/ompmr1.jpg" alt=""></a>
			</div>
			<div class="detail-content mt-3">
				<a href="<?= base_url('user/gallery') ?>" class="detail">See More</a>
			</div>

		</section>

		<!--==========================
      Sponsors Section
    ============================-->
		<section id="supporters" class="section-with-bg wow fadeInUp">

			<div class="container">
				<div class="section-header">
					<h2>Sponsors</h2>
				</div>
				<div class="row no-gutters supporters-wrap clearfix">
					<?php foreach ($sponsor as $s ) : ?>
					<div class="col-lg-3 col-md-4 col-xs-6">
						<div class="supporter-logo">
							<img src="<?= base_url(); ?>assets/img/<?= $s['logo_sponsor'] ?>" class="img-fluid-sponsor"
								alt="">
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="detail-content">
					<button type="button" class="btn btn-outline-danger mt-3" data-toggle="modal"
						data-target="#editSponsor">
						Edit Sponsor
					</button>
				</div>

				<!-- Modal Edit -->
				<div id="editSponsor" class="modal fade">
					<div class="modal-dialog " role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 style="color: navy !important;" class="modal-title">Edit Sponsor</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" action="<?= base_url('home/editSponsor')?>">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nama Sponsor">
									</div>
									<div class="form-group">
										<label class="text-dark">Logo Sponsor</label>
										<input type="file" name="logo_sponsor" class="form-control-file">
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-success btn-block">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- End Modal -->
			</div>

		</section>

		<!--==========================
		F.A.Q Section
		============================-->
		<section id="faq" class="wow fadeInUp">
			<div class="container">
				<div class="section-header">
					<h2>F.A.Q </h2>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-9">
						<table class="table" style="margin-bottom: 0 !important;">
							<thead>
								<tr>
									<th>Pertanyaan</th>
									<th>Jawaban</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($faq as $f ) : ?>
								<tr>
									<td><?= $f['pertanyaan']; ?></td>
									<td><?= $f['jawaban']; ?></td>
									<td>
										<a data-toggle="modal" type="button" data-target="#editFaq<?= $f['id_faq']; ?>">
											<i class="fa fa-pencil"></i>
										</a>
										<a href="<?= base_url(); ?>penjual/barang/hapusBarang/<?= $f['id_faq'] ?>"
											onclick="return confirm('Anda yakin ingin menghapus data barang?')">
											<i class="fa fa-trash"></i>
										</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row justify-content-center mb-3">
					<div class="detail-content col-lg-9">
						<button class="btn btn-outline-danger float-right" type="button" data-toggle="modal"
							data-target="#tambahFaq">
							<i class="fa fa-plus"></i>
						</button>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-9">
						<h3 class="mt-3 text-center">Preview</h3>
						<?php foreach ($faq as $f ) : ?>

						<ul id="faq-list">
							<li>
								<a data-toggle="collapse" class="collapsed" href="#faq<?= $f['id_faq']; ?>">
									<?= $f['pertanyaan'] ?>
									<i class="fa fa-minus-circle"></i></a>
								<div id="faq<?= $f['id_faq']; ?>" class="collapse" data-parent="#faq-list">
									<p>
										<?= $f['jawaban']; ?>
									</p>
								</div>
							</li>
						</ul>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- Modal Edit -->
				<?php foreach ($faq as $f) : ?>
				<div id="editFaq<?= $f['id_faq']; ?>" class="modal fade">
					<div class="modal-dialog " role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 style="color: navy !important;" class="modal-title">Edit FAQ</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST"
									action="<?= base_url();?>user/editable_home/editFaq/<?= $f['id_faq']; ?>">
									<div class="form-group">
										<input type="text" class="form-control" name="pertanyaan"
											value="<?= $f['pertanyaan'] ?>" placeholder="Pertanyaan">
									</div>
									<div class="form-group">
										<textarea type="text" class="form-control" name="jawaban"
											placeholder="Jawaban"><?= $f['jawaban'] ?></textarea>
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-success btn-block">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				<!-- End Modal -->
				<!-- Tambah FAQ -->
				<div id="tambahFaq" class="modal fade">
					<div class="modal-dialog " role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 style="color: navy !important;" class="modal-title">Tambah FAQ</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" action="<?= base_url('user/editable_home/tambahFaq')?>">
									<div class="form-group">
										<input type="text" class="form-control" name="pertanyaan"
											placeholder="Pertanyaan">
									</div>
									<div class="form-group">
										<textarea type="text" class="form-control" name="jawaban"
											placeholder="Jawaban"></textarea>
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-success btn-block">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- End Modal -->
			</div>

		</section>

		<!--==========================
    Footer
  ============================-->
		<footer id="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">

						<div class="col-lg-5 col-md-6 footer-info">
							<img src="<?= base_url(); ?>assets/img/logo/logo sync white.png" alt="" title="">
							<p> <i>Deskripsi Event.</i></p>
							<div class="social-links mt-3">
								<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
								<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 footer-links">
							<h4>Useful Links</h4>
							<ul>
								<li><i class="fa fa-angle-right"></i> <a href="#home">Home</a></li>
								<li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
								<li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
								<li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
							</ul>
						</div>

						<div class="col-lg-4 col-md-6 footer-contact">
							<h4>Contact Us</h4>
							<p>
								Perumahan Austinville Blok D2 <br> Dieng Atas, Malang - Jawa Timur
								<br><br>
								<strong>Daniel Agustinus :</strong> +62 878-5669-2424 <br>
								<strong>Anita Linda :</strong> +62 813-3385-8993 <br>
								<strong>Fahmi Rizky :</strong> +62 813-8288-7747 <br>
								<strong>Yopi :</strong> +62 821-3693-6984 <br>
							</p>



						</div>

					</div>
				</div>
			</div>

			<div class="container">
				<div class="copyright">
					&copy; Copyright <strong>Syncronize</strong>. All Rights Reserved
				</div>
				<div class="credits">
					<!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
				</div>
			</div>
		</footer><!-- #footer -->

		<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JavaScript Libraries -->
		<script src="<?= base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/jquery/jquery-migrate.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/superfish/hoverIntent.js"></script>
		<script src="<?= base_url(); ?>assets/lib/superfish/superfish.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/venobox/venobox.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>

		<!-- Contact Form JavaScript File -->
		<script src="<?= base_url(); ?>assets/contactform/contactform.js"></script>

		<!-- Template Main Javascript File -->
		<script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>

</html>
