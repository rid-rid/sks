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
        <title>EDIT DATA SUB REKENING - Desa Tamban Jaya</title>         
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
                    <h3><b>EDIT DATA SUB REKENING</b></h3> 
                    <div class="row mt"> 
                        <div class="col-lg-12">
						<?php
						//koneksi_database
						$host="localhost";
						$user="root";
						$pass="";
						$db="db_tamban_jaya";
						$koneksi=@mysql_connect($host,$user,$pass);
						if(!$koneksi){
							echo "Gagal koneksi=".mysql_error();
							exit();
							}
						//memilih database
						$milih=@mysql_select_db($db,$koneksi);
						if(!$milih){
						  exit("Gagal memlih database:".mysql_error());
						}
						$edit = $_GET['edit'];
						$tampil="SELECT * FROM sub_rekening WHERE kd_sub_rekening='$edit'";
						$query=mysql_query($tampil,$koneksi) or die (mysql_error());
						$r= mysql_fetch_array($query);
						?>							
                        <!-- START FORM -->
							<div class="row mt">
								<div class="col-lg-12">
									<div class="form-panel">
									<form class="form-horizontal style-form" method="post" action="../proses/edit/sub_rekening.php" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Kode Sub Rekening </label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" name="kd_sub_rekening" id="kd_sub_rekening" value="<?php echo "$r[kd_sub_rekening]"; ?>" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Nama Sub Rekening</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Nama Sub Rekening" name="nama_sub_rekening" id="nama_sub_rekening" value="<?php echo "$r[nama_sub_rekening]"; ?>"  required>
											</div>
										</div>
										<button name="EDIT" type="submit" class="btn btn-theme03"><i class="fa fa-edit"></i> EDIT</button>
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
