<?php require_once('Connections/koneksi.php'); ?>
<?php require_once('hak_akses.php'); ?>
<?php $page = "kelola_dana"; ?>
<?php $sub = "data"; ?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content=""> 
        <meta name="author" content="Dashboard"> 
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina"> 
        <title>KELOLA DANA DESA - Desa Tamban Jaya</title>         
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
                    <h3>KELOLA DANA DESA</h3> 
                    <div class="row mt"> 
                        <div class="col-lg-12"> 
                            <!-- JUSTIFIED BUTTONS -->						
                            <div class="showback">
							<h4> KELOLA MASTER DATA </h4>
								<div class="btn-group btn-group-justified">
									<div class="btn-group">
										<a href="input/rekening.php"><button type="button" class="btn btn-theme02"><i class="fa fa-bars">REKENING</i></button></a>
									</div>
									<div class="btn-group">
										<a href="input/sub_rekening.php"><button type="button" class="btn btn-theme"><i class="fa fa-align-justify">SUB REKENING</i></button></a>
									</div>
								</div>
							</div>
							<!--/showback -->
							<div class="form-panel">
							<!-- Button Input Belanja -->
							<a href="input/belanja.php"><button type="button" class="btn btn-theme03 btn-lg btn-block"><i class="fa fa-plus"></i>Tambah Data Belanja<i class="fa fa-plus"></i></button></a>
							<!-- End Button Input Belanja -->
							</div>
							 
                            <!-- Start Content -->
                            <div class="row mb">
							<div class="content-panel">
							<div class="adv-table">
								<?php
								mysql_select_db($database_koneksi, $koneksi);
								$tahun_belanja = $_POST['thn_belanja'];
								$tampilrt="SELECT * FROM v_total_belanja WHERE thn_belanja='$tahun_belanja'";
								$queryrt=mysql_query($tampilrt,$koneksi) or die (mysql_error());
								$rt= mysql_fetch_assoc($queryrt);
								?>
								<table class="table table-striped table-advance table-hover" id="hidden-table-info" width="100%">
								<h4>DATA BELANJA DESA</h4>
								<h5>TOTAL BELANJA DANA DESA PADA TAHUN <?= $tahun_belanja ?> SEBESAR <b><?php echo 'Rp. ' .number_format($rt['total_belanja'], 0, ',' , '.') .',-' ; ?></b></h5>
								<hr>
								<thead>
								<tr>
									<th>No</th>
									<th>Nama Bidang</th>
									<th>Nama Rekening</th>
									<th>Nama Belanja / Sub Rekening</th>
									<th>Jenis Belanja</th>
									<th>Anggaran Belanja</th>
									<th>Tahun Anggaran</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								<?php
								mysql_select_db($database_koneksi, $koneksi);
								$tampil="SELECT trans_belanja.id_belanja,rekening.kd_bidang,bidang.nama_bidang,sub_rekening.kd_rekening,rekening.nama_rekening,trans_belanja.kd_sub_rekening,sub_rekening.nama_sub_rekening,trans_belanja.kd_belanja,belanja.nama_belanja,trans_belanja.besar_belanja,trans_belanja.kd_sumber,sumber.singkatan,trans_belanja.thn_belanja
										FROM trans_belanja
										INNER JOIN sub_rekening ON trans_belanja.kd_sub_rekening = sub_rekening.kd_sub_rekening
										INNER JOIN rekening ON sub_rekening.kd_rekening = rekening.kd_rekening
										INNER JOIN bidang ON rekening.kd_bidang = bidang.kd_bidang
										INNER JOIN belanja ON trans_belanja.kd_belanja = belanja.kd_belanja
										INNER JOIN sumber ON trans_belanja.kd_sumber = sumber.kd_sumber WHERE trans_belanja.thn_belanja='$tahun_belanja'
										ORDER BY trans_belanja.thn_belanja AND bidang.nama_bidang ASC ";
								$query=mysql_query($tampil,$koneksi) or die (mysql_error());
								$r= mysql_fetch_assoc($query);
								$no=1;
								do { ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo "$r[nama_bidang]"; ?></td>
									<td><?php echo "$r[nama_rekening]"; ?></td>
									<td><?php echo "$r[nama_sub_rekening]"; ?></td>
									<td><?php echo "$r[nama_belanja]"; ?></td>
									<td><?php echo 'Rp. ' .number_format($r['besar_belanja'], 0, ',' , '.') .',-' ; ?></td>
									<td><?php echo "$r[thn_belanja]"; ?></td>
									<td>
										<a href="proses/hapus/belanja.php?del=<?php echo $r['id_belanja']; ?>" onClick="return confirm('Apakah Ingin Menghapus Data')"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
									</td>
								</tr>
								<?php $no++;}while ($r= mysql_fetch_assoc($query)); ?>
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
        <!--common script for all pages-->         
        <script src="lib/common-scripts.js"></script>         
        <!--script for this page-->         
<script type="text/javascript">

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
          [0, 'asc']
        ]
      });
    });
  </script>
    </body>     
</html>
