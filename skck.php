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
            <h2 class="serif">Pengantar SKCK</h2>
          </div>
        </div>
        <!-- START FORM -->
									<form class="form-horizontal style-form" method="post" action="simpan/skck.php" enctype="multipart/form-data">
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
												$nomor = "/145/Ds-TJ/SK-BB/".$romawi."/".$tahun;
												// membaca kode  terbesar dari penomoran yang ada didatabase berdasarkan tanggal
												$query = "SELECT max(no_surat) as maxKode FROM skck WHERE month(tanggal)='$bulan'";
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


