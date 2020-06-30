<?php require_once('hak_akses.php'); ?>
<?php $page = "penduduk"; ?>
<?php $sub = "data"; ?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content=""> 
        <meta name="author" content="Dashboard"> 
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina"> 
        <title>INPUT DATA PENDUDUK - Desa Tamban Jaya</title>         
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
		<!-- Date & Upload -->	  
		<link rel="stylesheet" type="text/css" href="../lib/bootstrap-fileupload/bootstrap-fileupload.css" />
		<link rel="stylesheet" type="text/css" href="../lib/bootstrap-datepicker/css/datepicker.css" />
		<link rel="stylesheet" type="text/css" href="../lib/bootstrap-daterangepicker/daterangepicker.css" />
		<link rel="stylesheet" type="text/css" href="../lib/bootstrap-timepicker/compiled/timepicker.css" />
		<link rel="stylesheet" type="text/css" href="../lib/bootstrap-datetimepicker/datertimepicker.css" />
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
                    <h3><b>INPUT DATA PENDUDUK DESA TAMBAN JAYA</b></h3> 
                    <div class="row mt"> 
                        <div class="col-lg-12">  
						<!-- START FORM -->
							<div class="row mt">
								<div class="col-lg-12">
									<div class="form-panel">
									<form class="form-horizontal style-form" method="post" action="../proses/simpan/penduduk.php" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">NIK</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan NIK" name="nik" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Nama</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Nama" name="nama" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Tempat</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Tempat Lahir" name="tempat" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
											<div class="col-md-3 col-xs-11">
												<div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
													<input type="text" name="tgl" id="tgl" readonly="" value="2020-01-01" size="16" class="form-control">
													<span class="input-group-btn add-on">
														<button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
													</span>
												</div>
												<span class="help-block">Select date</span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
											<div class="col-sm-10">
												<div class="radio">
													<label><input type="radio" name="jenkel" id="jenkel" value="Laki-laki" checked>Laki-laki</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="jenkel" id="jenkel" value="Perempuan">Perempuan</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Agama</label>
											<div class="col-sm-10">
												<label for="agama"></label>
												<select name="agama" id="agama">
													<option value="Islam">Islam</option>
													<option value="Kristen">Kristen</option>
													<option value="Hindu">Hindu</option>
													<option value="Budha">Budha</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Status Perkawinan</label>
											<div class="col-sm-10">
												<label for="stts"></label>
												<select name="stts" id="stts">
													<option value="Belum Menikah">Belum Menikah</option>
													<option value="Sudah Menikah">Sudah Menikah</option>
													<option value="Hindu">Cerai Hidup</option>
													<option value="Budha">Cerai Mati</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Pekerjaan</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Jenis Pekerjaan" name="pekerjaan" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Alamat</label>
											<div class="col-sm-10">
												<textarea class="form-control" name="alamat" id="alamat" cols="45" rows="5" placeholder="Masukkan Alamat" name="alamat" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">RT</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan RT" name="rt" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">RW</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan RW" name="rw" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Desa</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Nama Desa" value="Tamban Jaya" name="desa" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Kecamatan</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Nama Kecamatan" value="Tamban Catur" name="kec" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Foto</label>
											<div class="col-sm-10">
												<div class="image-upload">
													<label for="file-input"><img src="../img/upload.png" width="60" height="60"/></label>
													<input id="file-input" type="file" name="photo" required="required"/>
												</div>
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
        <!-- date & upload -->
		<script src="../lib/jquery-ui-1.9.2.custom.min.js"></script>
		<script type="text/javascript" src="../lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
		<script type="text/javascript" src="../lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="../lib/bootstrap-daterangepicker/date.js"></script>
		<script type="text/javascript" src="../lib/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script type="text/javascript" src="../lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript" src="../lib/bootstrap-daterangepicker/moment.min.js"></script>
		<script type="text/javascript" src="../lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<script src="../lib/advanced-form-components.js"></script>
		
    </body>     
</html>
