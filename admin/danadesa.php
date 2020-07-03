<?php require_once('Connections/koneksi.php'); ?>
<?php require_once('hak_akses.php'); ?>
<?php $page = "dana_desa"; ?>
<?php $sub = "data"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">
	<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<title>DANA DESA - Desa Tamban Jaya</title>
	<!-- Favicons -->
	<link href="img/icon.png" rel="icon">
	<link href="img/icon.png" rel="apple-touch-icon">
	<!-- Bootstrap core CSS -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!--external css-->
	<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
	<link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
	<link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet">
	<!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
	<section id="container">
		<!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
		<!--header start-->
		<?php require_once('halaman/header.php'); ?>
		<!--header end-->
		<!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
		<!--sidebar start-->
		<?php require_once('halaman/sidebar.php'); ?>
		<!--sidebar end-->
		<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper site-min-height">
				<h3>DANA DESA</h3>
				<div class="row mt">
					<div class="col-lg-12">
						<!-- JUSTIFIED BUTTONS -->
						<div class="showback">
							<h4> KELOLA DANA DESA </h4>
							<div class="btn-group btn-group-justified">
								<div class="btn-group">
									<a href="input/pendapatan.php"><button type="button" class="btn btn-theme"><i class="fa fa-money"></i> Pendapatan <i class="fa fa-money"></i></button></a>
								</div>
							</div>
						</div>
						<!--/showback -->
						<!-- Start Content -->
						<div class="row mb">
							<div class="form-panel">
								<div class="adv-table">
									<?php
									mysql_select_db($database_koneksi, $koneksi);
									$thn_pendapatan = $_POST['thn_pendapatan'];
									$tampilrt = "SELECT * FROM v_anggaran WHERE tahun='$thn_pendapatan'";
									$queryrt = mysql_query($tampilrt, $koneksi) or die(mysql_error());
									$rt = mysql_fetch_assoc($queryrt);
									?>
									<table class="table table-striped table-advance table-hover" id="hidden-table-info" width="100%">
										<h4>DATA DANA DESA</h4>
										<h5>TOTAL DANA DESA PADA TAHUN <?= $thn_pendapatan ?> SEBESAR <b><?php echo 'Rp. ' . number_format($rt['total_pendapatan'], 0, ',', '.') . ',-'; ?></b></h5>
										<h5>SISA DANA YANG BELUM DI INPUT SEBESAR <?php echo 'Rp. ' . number_format($rt['sisa_anggaran'], 0, ',', '.') . ',-'; ?> </h5>
										<hr>
										<thead>
											<tr>
												<th width="6%"><i class="fa fa-sort-numeric-asc"></i> No</th>
												<th><i class="fa fa-exclamation-circle"></i> Tahun Pendapatan</th>
												<th><i class="fa fa-group"></i> Nama Pendapatan</th>
												<th><i class=" fa fa-check"></i> Besar Pendapatan</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php
											$tampil = "SELECT trans_pendapatan.id_pendapatan,trans_pendapatan.kd_pendapatan,pendapatan.nama_pendapatan,trans_pendapatan.besar_pendapatan,trans_pendapatan.thn_pendapatan FROM trans_pendapatan INNER JOIN pendapatan ON trans_pendapatan.kd_pendapatan = pendapatan.kd_pendapatan WHERE thn_pendapatan='$thn_pendapatan'";
											$query = mysql_query($tampil, $koneksi) or die(mysql_error());
											$r = mysql_fetch_assoc($query);
											$no = 1;
											do { ?>
												<tr>
													<td><?php echo $no; ?></td>
													<td><?php echo "$r[thn_pendapatan]"; ?></td>
													<td><?php echo "$r[nama_pendapatan]"; ?></td>
													<td><?php echo 'Rp. ' . number_format($r['besar_pendapatan'], 0, ',', '.') . ',-'; ?></td>
													<td>
														<a href="edit/pendapatan.php?edit=<?php echo $r['id_pendapatan']; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
														<a href="proses/hapus/pendapatan.php?del=<?php echo $r['id_pendapatan']; ?>" onClick="return confirm('Apakah Ingin Menghapus Data')"><button class="btn btn-danger btn-xs" onClick="return confirm('Apakah Anda Ingin Menghapus Data??')"><i class="fa fa-trash-o "></i></button></a>
													</td>
												</tr>
											<?php $no++;
											} while ($r = mysql_fetch_assoc($query)); ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- End Content-->
					</div>
				</div>
			</section>
			<!-- /wrapper -->
		</section>
		<!-- /MAIN CONTENT -->
		<!--main content end-->
		<!--footer start-->
		<?php require_once('halaman/footer.php'); ?>
		<!--footer end-->
	</section>
	<!-- js placed at the end of the document so the pages load faster -->
	<script src="lib/jquery/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
	<script src="lib/jquery.scrollTo.min.js"></script>
	<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
	<script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
	<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
	<!--common script for all pages-->
	<script src="lib/common-scripts.js"></script>
	<!--script table-->
	<script type="text/javascript">
		/* Formating function for row details */
		function fnFormatDetails(oTable, nTr) {
			return sOut;
		}

		$(document).ready(function() {
			/*
			 * Insert a 'details' column to the table
			 */
			var nCloneTh = document.createElement('th');
			var nCloneTd = document.createElement('td');
			nCloneTd.className = "left";

			$('#hidden-table-info thead tr').each(function() {
				this.insertBefore(nCloneTh, this.childNodes[0]);
			});

			$('#hidden-table-info tbody tr').each(function() {
				this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
			});

			/*
			 * Initialse DataTables, with no sorting on the 'details' column
			 */
			var oTable = $('#hidden-table-info').dataTable({
				"aoColumnDefs": [{
					"bSortable": false,
					"aTargets": [0]
				}],
				"aaSorting": [
					[1, 'asc']
				]
			});

			/* Add event listener for opening and closing details
			 * Note that the indicator for showing which row is open is not controlled by DataTables,
			 * rather it is done here
			 */
			$('#hidden-table-info tbody td img').live('click', function() {
				var nTr = $(this).parents('tr')[0];
				if (oTable.fnIsOpen(nTr)) {
					/* This row is already open - close it */
					this.src = "lib/advanced-datatable/images/details_open.png";
					oTable.fnClose(nTr);
				} else {
					/* Open this row */
					this.src = "lib/advanced-datatable/images/details_close.png";
					oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
				}
			});
		});
	</script>
</body>

</html>