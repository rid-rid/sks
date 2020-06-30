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
        <title>EDIT DATA PENDUDUK - Desa Tamban Jaya</title>         
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
                    <h3><b>EDIT DATA PENDUDUK DESA TAMBAN JAYA</b></h3> 
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
						$tampil="SELECT * FROM penduduk WHERE nik='$edit'";
						$query=mysql_query($tampil,$koneksi) or die (mysql_error());
						$r= mysql_fetch_array($query);
						?>						
						<!-- START FORM -->
							<div class="row mt">
								<div class="col-lg-12">
									<div class="form-panel">
									<form class="form-horizontal style-form" method="post" action="../proses/edit/penduduk.php" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">NIK</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan NIK" name="nik" value="<?php echo "$r[nik]"; ?>" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Nama</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Nama" name="nama" value="<?php echo "$r[nama]"; ?>" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Tempat</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Tempat Lahir" name="tempat" value="<?php echo "$r[tempat]"; ?>" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
											<div class="col-md-3 col-xs-11">
												<div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
													<input type="text" name="tgl" id="tgl" readonly="" value="<?php echo "$r[tgl]"; ?>" size="16" class="form-control">
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
												<?php
												if($r['jenkel'] == "Laki-Laki"){
												  echo "<div class='radio'><label><input type='radio' name='jenkel' value='Laki-Laki' checked='checked'> Laki-laki</label></div>";
												  echo "<div class='radio'><label><input type='radio' name='jenkel' value='Perempuan'> Perempuan</label></div>";
												}else{
												  echo "<div class='radio'><label><input type='radio' name='jenkel' value='Laki-Laki'> Laki-laki</label></div>";
												  echo "<div class='radio'><label><input type='radio' name='jenkel' value='Perempuan' checked='checked'> Perempuan</label></div>";
												}
												?>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Agama</label>
											<div class="col-sm-10">
												<label for="agama"></label>
												<select name="agama" id="agama">
													<option value="Islam" <?php if (!(strcmp("Islam", htmlentities($r['agama'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Islam</option>
													<option value="Kristen" <?php if (!(strcmp("Kristen", htmlentities($r['agama'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Kristen</option>
													<option value="Hindu" <?php if (!(strcmp("Hindu", htmlentities($r['agama'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Hindu</option>
													<option value="Budha" <?php if (!(strcmp("Budha", htmlentities($r['agama'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Budha</option>
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
												<input type="text" class="form-control round-form" placeholder="Masukkan Jenis Pekerjaan" name="pekerjaan" value="<?php echo "$r[pekerjaan]"; ?>" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Alamat</label>
											<div class="col-sm-10">
												<textarea class="form-control" name="alamat" value="ok" id="alamat" cols="45" rows="5" placeholder="Masukkan Alamat" name="alamat" required><?php echo $r['alamat']; ?></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">RT</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan RT" name="rt" value="<?php echo "$r[rt]"; ?>" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">RW</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan RW" name="rw" value="<?php echo "$r[rw]"; ?>" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Desa</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Nama Desa" value="<?php echo "$r[desa]"; ?>" name="desa" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Kecamatan</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Nama Kecamatan" value="<?php echo "$r[kec]"; ?>" name="kec" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Foto</label>
											<div class="col-sm-10">
												<div class="image-upload">
													<label for="file-input"> <img src="../img/penduduk/<?php echo $r['foto']; ?>" width="100" width="100"></label>
													<input id="file-input" type="file" name="photo" equired="required"/>
												</div>
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
