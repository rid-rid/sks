<?php require_once('Connections/koneksi.php'); ?>
<?php require_once('hak_akses.php'); ?>
<?php $page = "usaha"; ?>
<?php $sub = "data_surat"; ?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content=""> 
        <meta name="author" content="Dashboard"> 
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina"> 
        <title>SURAT KET USAHA - Desa Tamban Jaya</title>         
        <!-- Favicons -->         
        <link href="img/icon.png" rel="icon"> 
        <link href="img/icon.png" rel="apple-touch-icon"> 
        <!-- Bootstrap core CSS -->         
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <!--external css-->         
        <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
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
                    <h3><b>DESA TAMBAN JAYA </b></h3> 
                    <div class="row mt"> 
                        <div class="col-lg-12"> 
                            <!-- Start Content -->
                            <div class="row mb">
							<div class="content-panel">
							<div class="adv-table">
								<table class="table table-striped table-advance table-hover" id="hidden-table-info" width="100%">
								<h4></i> DATA PENGAJUAN PEMBUATAN SURAT KETERANGAN USAHA</h4>
								<a href="input/usaha.php"><button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-plus"></i>Tambah Data Surat<i class="fa fa-plus"></i></button></a>
								<hr>
								<thead>
								<tr>
									<th width="6%"><i class="fa fa-sort-numeric-asc"></i> No</th>
									<th><i class="fa fa-leaf"></i> Tanggal Input</th>
									<th><i class="fa fa-exclamation-circle"></i> NIK</th>
									<th><i class="fa fa-group"></i> Nama</th>
									<th><i class=" fa fa-check"></i> Jenis Kelamin</th>
									<th><i class=" fa fa-star-half-o"></i> Alamat Lengkap</th>
									<th><i class=" fa fa-info"></i> Nama Usaha</th>
									<th><i class=" fa fa-key"></i> No. Surat</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								<?php
								mysql_select_db($database_koneksi, $koneksi);
								$tampil="SELECT * FROM t_usaha ORDER BY tanggal ASC";
								$query=mysql_query($tampil,$koneksi) or die (mysql_error());
								$r= mysql_fetch_assoc($query);
								$no=1;
								do { ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo "$r[tanggal]"; ?></td>
									<td><?php echo "$r[nik]"; ?></td>
									<td><?php echo "$r[nama]"; ?></td>
									<td><?php echo "$r[jenkel]"; ?></td>
									<td><?php echo "$r[alamat] RT.$r[rt]/RW.$r[rw] "; ?></td>
									<td><?php echo "$r[usaha]"; ?></td>
									<td><?php echo "$r[no_surat]"; ?></td>
									<td>
										<a href="cetak/surat_usaha.php?cetak=<?php echo $r['id']; ?>" target='_blank'><button class="btn btn-success btn-xs"><i class="fa fa-print"></i></button></a>
										<a href="edit/usaha.php?edit=<?php echo $r['nik']; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
										<a href="proses/hapus/usaha.php?del=<?php echo $r['id']; ?>"onClick="return confirm('Apakah Ingin Menghapus Data')"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
									</td>
								</tr>
								<?php $no++;}while ($r= mysql_fetch_assoc($query)); ?>
								</tbody>
								</table>
							</div>
							</div>
							</div>
							<!-- End Content-->
							<!-- Start Range Laporan -->
							<div class="form-panel">
							<form target='_blank' action="cetak/laporan/usaha.php" method="POST" class="form-inline" role="form">
								<div class="form-group">
								  <input type="date" class="form-control" id="exampleInputEmail2" placeholder="Enter From Date" name="from">
								</div>
								<div class="form-group">
								  <input type="date" class="form-control" id="exampleInputPassword2" placeholder="Enter To Date" name="to">
								</div>
							<button type="submit" class="btn btn-theme04">Cetak Laporan Sesuai Range Tanggal Yang Dipilih</button>
							</form>
							</div>
							<!-- End Range Laporan -->
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
