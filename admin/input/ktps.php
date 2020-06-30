<?php require_once('hak_akses.php'); ?>
<?php $page = "ktps"; ?>
<?php $sub = "data_surat"; ?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content=""> 
        <meta name="author" content="Dashboard"> 
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina"> 
        <title>INPUT KTP SEMENTARA - Desa Tamban Jaya</title>         
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
                    <h3><b>INPUT DATA PENGAJUAN SURAT KTP SEMENTARA</b></h3> 
                    <div class="row mt"> 
                        <div class="col-lg-12"> 
						<!-- START FORM -->
							<div class="row mt">
								<div class="col-lg-12">
									<div class="form-panel">
									<form class="form-horizontal style-form" method="post" action="../proses/simpan/ktps.php" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">NIK</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan NIK" name="nik" id="nik" onkeyup="autofill()" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Nama</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Nama" name="nama" id="nama" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Tempat</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Tempat Lahir" name="tempat" id="tempat" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Tanggal Lahir" name="tgl" id="tgl" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Jenis Kelamin Lahir" name="jenkel" id="jenkel" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Agama</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Agama" name="agama" id="agama" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Status Perkawinan</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Status Perkawinan" name="stts" id="stts" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Pekerjaan</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Jenis Pekerjaan" name="pekerjaan" id="pekerjaan" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Alamat</label>
											<div class="col-sm-10">
												<textarea class="form-control" name="alamat" id="alamat" cols="45" rows="5" placeholder="Masukkan Alamat" name="alamat" id="alamat" readonly required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">RT</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan RT" name="rt" id="rt" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">RW</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan RW" name="rw" id="rw" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Keperluan KTP</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Keperluan KTP Sementara" name="keperluan" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">No Surat</label>
											<div class="col-sm-10">
												<?php include "romawi-bulan.php";
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
												$bulan = date('n');
												$romawi = getRomawi($bulan);
												$tahun = date ('Y');
												$nomor = "/471/Ds-TJ/SK-P/".$romawi."/".$tahun;
												// membaca kode  terbesar dari penomoran yang ada didatabase berdasarkan tanggal
												$query = "SELECT max(no_surat) as maxKode FROM ktps WHERE month(tanggal)='$bulan'";
												$hasil = @mysql_query($query, $koneksi);
												$data  = @mysql_fetch_array($hasil);
												$no= $data['maxKode'];
												$noUrut= $no + 1;
												
												$kode =  sprintf("%03s", $noUrut);
												$nomorbaru = $kode.$nomor; ?>
												<input type="text" class="form-control round-form" placeholder="Masukkan No Surat" value="<?php echo $nomorbaru ?>" name ="no_surat" readonly required>
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
        <!--script autofill-->
		<script type="text/javascript">
			function autofill(){
				var nik = $("#nik").val();
				$.ajax({
				url : 'autofill.php',
				data : "nik="+nik ,
				}).success(function (data) {
					var json = data,
					obj = JSON.parse(json);
					$("#nama").val(obj.nama);
					$("#tempat").val(obj.tempat);
					$("#tgl").val(obj.tgl);
					$("#jenkel").val(obj.jenkel);
					$("#agama").val(obj.agama);
					$("#stts").val(obj.stts);
					$("#pekerjaan").val(obj.pekerjaan);
					$("#alamat").val(obj.alamat);
					$("#rt").val(obj.rt);
					$("#rw").val(obj.rw);
				});				
			}
		</script         
    </body>     
</html>
