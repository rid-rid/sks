<?php require_once('admin/Connections/koneksi.php'); ?>
<?php
mysql_select_db($database_koneksi, $koneksi);
$tampil="SELECT * FROM informasi";
$query=mysql_query($tampil,$koneksi) or die (mysql_error());
$r_i= mysql_fetch_assoc($query); 
?>
      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.php" class="font-weight-bold">TAMBAN JAYA</a>
              </div>
            </div>

            <div class="col-9  text-right">       
              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="index.php" class="nav-link">Beranda</a></li>
                  <li><a href="profil.php" class="nav-link">Profil</a></li>
                  <li><a href="login/logout.php" class="nav-link">Keluar</a></li>
                </ul>
              </nav>
            </div>
			
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('images/bg.jpeg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
			<br></br>
              <h1 class="mb-3 text-primary">Selamat Datang <font color=red><?php echo $_SESSION ['nama']; ?></font> Di Aplikasi Pelayanan Desa</h1>
              <p>Aplikasi Ini Akan Memudahkan Anda Untuk Mendapatkan Pelayanan Pembuatan Surat Yang Terdapat Pada Desa Temban Jaya Kec. Tamban Catur Kab. Kapuas</p>
			  <p><marquee behavior="alternate" direction="right"><h3><font color='red'><strong><b>NEW INFORMATION</b></strong></font></h3></p><p><?= htmlspecialchars_decode(htmlspecialchars_decode($r_i['teks'])); ?></marquee></p>
            </div>
          </div>
        </div>
      </div>
    </div>