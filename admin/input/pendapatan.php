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
        <title>INPUT DANA DESA - Desa Tamban Jaya</title>         
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
<?php require_once('header.php'); ?>             
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
                    <h3><b>INPUT PENDAPATAN DANA DESA</b></h3> 
                    <div class="row mt"> 
                        <div class="col-lg-12"> 
                        <!-- START FORM -->
							<div class="row mt">
								<div class="col-lg-12">
									<div class="form-panel">
									<form class="form-horizontal style-form" name="formDanaDesa" id="formDanaDesa" method="post" action="../proses/simpan/pendapatan.php" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Tahun Anggaran</label>
											<div class="col-sm-10">
												<label for="thn_pendapatan"></label>
												<select name="thn_pendapatan" id="thn_pendapatan" multiple class="form-control" required>
													<option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option>
													<option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option>
													<option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option>
													<option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option>
													<option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option>
													<option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option>
													<option value="2038">2038</option><option value="2039">2039</option>
													<option value="2040">2040</option><option value="2041">2041</option>
													<option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option>
													<option value="2045">2045</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Kode Pendapatan</label>
											<div class="col-sm-10">
												<label for="kd_pendapatan"></label>
												<select name="kd_pendapatan" id="kd_pendapatan" class="form-control" onchange='changeValueKODEPENDAPATAN(this.value)' required>
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
												<input type="text" class="form-control round-form" placeholder="Jumlah Besar Anggaran"name="besar_pendapatan" required>
											</div>
										</div>
										<button type="submit" class="btn btn-theme03"><i class="fa fa-save"></i> SIMPAN</button>
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
		  <!--custom checkbox & radio-->
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="lib/form-component.js"></script>
    <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
    </body>     
</html>
<script type="text/javascript"> 
<?php echo $jsArrayy; ?>
function changeValueKODEPENDAPATAN(x){
	document.getElementById('nama').value = prdKODEPENDAPATAN[x].nama;
};
</script>
