<?php require_once('login/hak_akses.php');?>
<?php require_once('head.php');?>
    <div class="site-wrap" id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
<?php require_once('header.php');?>

<!--main content start-->             
    <div class="site-section">
      <div class="container">
		<div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <span class="subtitle-39293">FORM INPUT DATA SURAT</span>
            <h2 class="serif">Keterangan Penghasilan</h2>
          </div>
        </div>
        <!-- START FORM -->
									<form class="form-horizontal style-form" method="post" action="simpan/penghasilan.php" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">NIK Ayah </label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan NIK Ayah" name="nik_ay" id="nik" onkeyup="autofill()" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Nama Ayah</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Nama Ayah" name="nama_ay" id="nama" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">NIK Anak </label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan NIK Anak" name="nik_an" id="nik1" onkeyup="auto()" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Nama Anak</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Nama Anak" name="nama_an" id="nama1" readonly required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Nominal</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Nominal" name="nominal" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Penulisan</label>
											<div class="col-sm-10">
												<input type="text" class="form-control round-form" placeholder="Masukkan Penulisan Nominal" name="penulisan" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">No Surat</label>
											<div class="col-sm-10">
												<?php include "admin/input/romawi-bulan.php";
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
												$nomor = "/400/Ds-TJ/SK-P/".$romawi."/".$tahun;
												// membaca kode  terbesar dari penomoran yang ada didatabase berdasarkan tanggal
												$query = "SELECT max(no_surat) as maxKode FROM penghasilan WHERE month(tanggal)='$bulan'";
												$hasil = @mysql_query($query, $koneksi);
												$data  = @mysql_fetch_array($hasil);
												$no= $data['maxKode'];
												$noUrut= $no + 1;
												
												$kode =  sprintf("%03s", $noUrut);
												$nomorbaru = $kode.$nomor; ?>
												<input type="text" class="form-control round-form" placeholder="Masukkan No Surat" value="<?php echo $nomorbaru ?>" name ="no_surat" readonly required>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-10">
												<input type="hidden" class="form-control round-form" name="input_nama" value="<?php echo $_SESSION ['nama']; ?>" required>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-md-6 mr-auto">
												<button type="submit" class="btn btn-block btn-primary text-white py-3 px-5"><i class="fa fa-save"></i> SIMPAN</button>
											</div>
										</div>
									</form>
						<!-- END FORM -->
        
      </div>
    </div>         
<!-- /MAIN CONTENT --> 
<?php require_once('footer.php');?>

    </div>
<?php require_once('body.php');?>


