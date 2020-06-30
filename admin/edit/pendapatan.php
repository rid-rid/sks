<?php require_once('../Connections/koneksi.php'); ?>
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
        <title>EDIT DANA DESA - Desa Tamban Jaya</title>         
        <!-- Favicons -->         
        <link href="../img/icon.png" rel="icon"> 
        <link href="../img/icon.png" rel="apple-touch-icon"> 
        <!-- Bootstrap core CSS -->         
        <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <!--external css-->         
        <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet"/> 
        <!-- Custom styles for this template -->         
        <link href="../css/style.css" rel="stylesheet"> 
        <link href="../css/style-responsive.css" rel="stylesheet"> 
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
<?php require_once('../halaman/header.php'); ?>          
            <!--header end-->             
            <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->             
            <!--sidebar start-->             
<?php require_once('sidebar.php'); ?>           
            <!--sidebar end-->             
            <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->             
            <!--main content start-->             
            <section id="main-content"> 
                <section class="wrapper site-min-height"> 
                    <h3><b>EDIT PENDAPATAN DANA DESA</b></h3> 
                    <div class="row mt"> 
                        <div class="col-lg-12">
						<?php
						mysql_select_db($database_koneksi, $koneksi);
						$edit = $_GET['edit'];
						$tampil="SELECT * FROM trans_pendapatan WHERE id_pendapatan='$edit'";
						$query=mysql_query($tampil,$koneksi) or die (mysql_error());
						$r= mysql_fetch_array($query);
						?>
                        <!-- START FORM -->
							<div class="row mt">
								<div class="col-lg-12">
									<div class="form-panel">
									<form class="form-horizontal style-form" name="formDanaDesa" id="formDanaDesa" method="post" action="../proses/edit/pendapatan.php" enctype="multipart/form-data">
										<input type="hidden" class="form-control round-form" value="<?= $r['id_pendapatan'];?>" name="id_pendapatan" required>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Tahun Anggaran</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" value="<?= $r['thn_pendapatan'];?>" name="thn_pendapatan" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Kode Pendapatan</label>
											<div class="col-sm-10">
												<label for="kd_pendapatan"></label>
												<select name="kd_pendapatan" id="kd_pendapatan" onchange='changeValueKODEPENDAPATAN(this.value)' required>
													<option>-- Pilih Kode Pendapatan --</option>
													<?php 
													mysql_connect("localhost","root","");
													mysql_select_db("db_tamban_jaya");
													$query=mysql_query("select * from pendapatan order by kd_pendapatan asc"); 
													$result = mysql_query("select * from pendapatan");  
													$jsArrayy = "var prdKODEPENDAPATAN = new Array();\n";
													while ($row = mysql_fetch_array($result)) {  
													echo '<option name="kd_pendapatan"  value="' . $row['kd_pendapatan'] . '">' . $row['kd_pendapatan'] . '		</option>';
													$jsArrayy .= "prdKODEPENDAPATAN['" . $row['kd_pendapatan'] . "'] = {nama:'" . addslashes($row['nama_pendapatan']) . "'};\n";
													}
													?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Nama Pendapatan</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Nama Pendapatan" id="nama" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Besar Anggaran</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" value="<?= $r['besar_pendapatan'];?>" name="besar_pendapatan" required>
											</div>
										</div>
										<button type="submit" name="EDIT" class="btn btn-theme03"><i class="fa fa-save"></i> EDIT</button>
									</form>
									</div>
								</div>
							</div>
						<!-- END FORM -->
                        </div>                         
                    </div>                     
                </section>                 
                <!-- /wrapper -->                 
            </section>             
            <!-- /MAIN CONTENT -->             
            <!--main content end-->             
            <!--footer start-->             
<?php require_once('../halaman/footer.php'); ?>             
            <!--footer end-->             
        </section>         
        <!-- js placed at the end of the document so the pages load faster -->         
        <script src="../lib/jquery/jquery.min.js"></script>         
        <script src="../lib/bootstrap/js/bootstrap.min.js"></script>         
        <script src="../lib/jquery-ui-1.9.2.custom.min.js"></script>         
        <script src="../lib/jquery.ui.touch-punch.min.js"></script>         
        <script class="include" type="text/javascript" src="../lib/jquery.dcjqaccordion.2.7.js"></script>         
        <script src="../lib/jquery.scrollTo.min.js"></script>         
        <script src="../lib/jquery.nicescroll.js" type="text/javascript"></script>         
        <!--common script for all pages-->         
        <script src="../lib/common-scripts.js"></script>
    </body>     
</html>
<script type="text/javascript"> 
<?php echo $jsArrayy; ?>
function changeValueKODEPENDAPATAN(x){
	document.getElementById('nama').value = prdKODEPENDAPATAN[x].nama;
};
</script>
