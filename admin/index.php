<?php require_once('Connections/koneksi.php'); ?>
<?php require_once('hak_akses.php'); ?>
<?php $page = "index"; ?>
<?php $sub = "data"; ?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content=""> 
        <meta name="author" content="Dashboard"> 
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina"> 
        <title>DASHBOARD - Desa Tamban Jaya</title>         
        <!-- Favicons -->         
        <link href="img/icon.png" rel="icon"> 
        <link href="img/icon.png" rel="apple-touch-icon"> 
        <!-- Bootstrap core CSS -->         
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <!--external css-->         
        <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet"/> 
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
                    <h3> SELAMAT DATANG DI APLIKASI DESA TAMBAN JAYA</h3> 
                    <div class="row mt"> 
                        <div class="col-lg-12"> 
                        <div class="form-panel">
							<!-- Button Input Belanja -->
							<a href="input/pengumuman.php"><button type="button" class="btn btn-theme03 btn-lg btn-block"><i class="fa fa-plus"></i>Update Pengumuman<i class="fa fa-plus"></i></button></a>
							<!-- End Button Input Belanja -->
							<?php
							mysql_select_db($database_koneksi, $koneksi);
							$tampil="SELECT * FROM informasi";
							$query=mysql_query($tampil,$koneksi) or die (mysql_error());
							$r_i= mysql_fetch_assoc($query);?>
							<br></br>
							<marquee behavior="alternate" direction="right"><h3><font color='red'><strong>NEW INFORMATION</strong></font></h3><?= htmlspecialchars_decode(htmlspecialchars_decode($r_i['teks'])); ?></marquee>
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
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>         
        <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>         
        <script src="lib/jquery.ui.touch-punch.min.js"></script>         
        <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>         
        <script src="lib/jquery.scrollTo.min.js"></script>         
        <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>         
        <!--common script for all pages-->         
        <script src="lib/common-scripts.js"></script>         
        <!--script for this page-->         
    </body>     
</html>
