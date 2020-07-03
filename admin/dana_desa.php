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
						<div class="form-panel">
							<form class="form-horizontal style-form" method="post" action="danadesa.php" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">TAHUN ANGGARAN</label>
									<div class="col-sm-10">
										<label for="thn_pendapatan"></label>
										<select name="thn_pendapatan" id="thn_pendapatan" class="form-control" required>
											<option>-- Pilih TAHUN ANGGARAN --</option>
											<?php
											mysql_connect("localhost", "root", "");
											mysql_select_db("db_tamban_jaya");
											$query = mysql_query("select thn_pendapatan from trans_pendapatan group by thn_pendapatan");
											while ($row = mysql_fetch_array($query)) {
												echo '<option name="thn_pendapatan"  value="' . $row['thn_pendapatan'] . '">' . $row['thn_pendapatan'] . '		</option>';
											}
											?>
										</select>
									</div>
								</div>
								<button type="submit" class="btn btn-theme03"><i class="fa fa-money"></i> BUKA</button>
							</form>
						</div>
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