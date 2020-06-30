<?php require_once('../Connections/koneksi.php'); ?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content=""> 
        <meta name="author" content="Dashboard"> 
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina"> 
        <title>DETAIL DATA PENDUDUK - Desa Tamban Jaya</title>         
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
		<script src="../lib/chart-master/Chart.js"></script>
		<style>
		.image-upload > input
		{
			display:none;
		}
		</style>
		
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
            <header class="header black-bg"> 
                <div class="sidebar-toggle-box"> 
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>                     
                </div>                 
                <!--logo start-->                 
                <a href="../index.php" class="logo"><b>TAMBAN<span>JAYA</span></b></a> 
                <!--logo end-->                                  
                <div class="top-menu"> 
                    <ul class="nav pull-right top-menu"> 
                        <li>
                            <a class="logout" href="../logout.php">Logout</a>
                        </li>                         
                    </ul>                     
                </div>                 
            </header>             
            <!--header end-->             
            <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->             
            <!--sidebar start-->             
            <aside> 
                <div id="sidebar" class="nav-collapse "> 
                    <!-- sidebar menu start-->                     
                    <ul class="sidebar-menu" id="nav-accordion"> 
                        <p class="centered"><a href="#">
                                <img src="../img/admin.png" class="img-circle" width="80">
                            </a></p> 
                        <h5 class="centered">Administrator Desa</h5> 
                        <li class="mt"> 
                            <a href="../index.php">  <i class="fa fa-desktop"></i>  <span>DASHBOARD</span>  </a> 
                        </li>
						<li class="mt"> 
                            <a href="../user.php">  <i class="fa fa-user"></i>  <span>USER</span>  </a> 
                        </li>
						<li class="mt"> 
                            <a class="active" href="../penduduk.php">  <i class="fa fa-users"></i>  <span>PENDUDUK</span>  </a> 
                        </li>
						<li class="mt"> 
                            <a href="../dana_desa.php">  <i class="fa fa-money"></i>  <span>DANA DESA</span>  </a> 
                        </li>
                        <li class="sub-menu"> 
                            <a href="javascript:;">  <i class="fa fa-inbox"></i>  <span>DATA SURAT</span>  </a> 
                            <ul class="sub"> 
                                <li>
                                    <a href="../usaha.php">Surat Keterangan Usaha</a>
                                </li>                                 
                                <li>
                                    <a href="../skck.php">Surat Pengantar SKCK</a>
                                </li>                                 
                                <li>
                                    <a href="../ktps.php">Surat Ket KTP Sementara</a>
                                </li>                                 
                                <li>
                                    <a href="../penghasilan.php">Surat Ket Penghasilan</a>
                                </li>
								<li>
                                    <a href="../imunisasi.php">Surat Imunisasi</a>
                                </li>
                            </ul>                             
                        </li>
						<li class="mt"> 
                            <a href="../kelola_dana.php">  <i class="fa fa-archive"></i>  <span>KELOLA DANA DESA</span>  </a> 
                        </li>                       
                    </ul>                     
                    <!-- sidebar menu end-->                     
                </div>                 
            </aside>             
            <!--sidebar end-->             
            <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->             
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
			<!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover" width="100%">
			  <?php
				mysql_select_db($database_koneksi, $koneksi);
				$tampil="SELECT * FROM penduduk WHERE nik=$_GET[nik]";
				$query=mysql_query($tampil,$koneksi) or die (mysql_error());
				$r= mysql_fetch_assoc($query);
				do { ?>
                <thead>
                  <tr>
                    <th width="30%"><i></i> NIK </th>
                    <th width="70%"><i class="fa fa-angle-double-right"></i> <?php echo "$r[nik]"; ?></th>
                  </tr>
				</thead>
				<thead>
                  <tr>
                    <th width="30%"><i></i> NAMA</th>
                    <th width="70%"><i class="fa fa-angle-double-right"></i> <?php echo "$r[nama]"; ?></th>
                  </tr>
				</thead>
				<thead>
                  <tr>
                    <th width="30%"><i></i> TEMPAT, TANGGAL LAHIR</th>
                    <th width="70%"><i class="fa fa-angle-double-right"></i> <?php echo "$r[tempat], $r[tgl]"; ?></th>
                  </tr>
				</thead>
				<thead>
                  <tr>
                    <th width="30%"><i></i> JENIS KELAMIN</th>
                    <th width="70%"><i class="fa fa-angle-double-right"></i> <?php echo "$r[jenkel]"; ?></th>
                  </tr>
				</thead>
				<thead>
                  <tr>
                    <th width="30%"><i></i> AGAMA</th>
                    <th width="70%"><i class="fa fa-angle-double-right"></i> <?php echo "$r[agama]"; ?></th>
                  </tr>
				</thead>
				<thead>
                  <tr>
                    <th width="30%"><i></i> STATUS NIKAH</th>
                    <th width="70%"><i class="fa fa-angle-double-right"></i> <?php echo "$r[stts]"; ?></th>
                  </tr>
				</thead>
				<thead>
                  <tr>
                    <th width="30%"><i></i> PEKERJAAN</th>
                    <th width="70%"><i class="fa fa-angle-double-right"></i> <?php echo "$r[pekerjaan]"; ?></th>
                  </tr>
				</thead>
				<thead>
                  <tr>
                    <th width="30%"><i></i> ALAMAT LENGKAP</th>
                    <th width="70%"><i class="fa fa-angle-double-right"></i> <?php echo "$r[alamat] RT.$r[rt]/RW.$r[rw] Desa $r[desa] Kec $r[kec] "; ?></th>
                  </tr>
				</thead>
				<thead>
                  <tr>
                    <td width="30%" valign="middle">FOTO</td>
                    <th width="70%" ><?php echo "<img src='../img/penduduk/$r[foto]' width='300'>";?></th>
                  </tr>
				</thead>
				<?php }while ($r= mysql_fetch_assoc($query)); ?>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->             
            <!--footer start-->             
            <footer class="site-footer"> 
                <div class="text-center"> 
                    <p> 
           Copyrights <strong>2020</strong> &copy;. Desa Tamban Jaya
 </p> 
                    <div class="credits"> 
                        Kuala Kapuas - Kalimatan Tengah
                    </div>                     
                    <a href="#" class="go-top">  <i class="fa fa-angle-up"></i>  </a> 
                </div>                 
            </footer>             
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
        <!--script for this page-->
		<script src="lib/sparkline-chart.js"></script>	
    </body>     
</html>
