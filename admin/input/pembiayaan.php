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
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">
    <!-- Autocomplete -->
    <link href="../lib/autocomplete/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="../lib/autocomplete/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="../lib/autocomplete/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function() {
            var data = "autocomplete_thn_anggaran.php";
            $("#thn_anggaran").autocomplete({
                source: data
            });
        });
    </script>
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
                <h3><b>INPUT PEMBIAYAAN DANA DESA</b></h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <!-- START FORM -->
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                    <form class="form-horizontal style-form" method="post" action="../proses/simpan/pembiayaan.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Tahun Anggaran</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control round-form" placeholder="Masukkan Tahun Anggaran" name="thn_anggaran" id="thn_anggaran" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">SILPA Tahun Sebelumnya</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control round-form" placeholder="Masukkan Nominal Silpa Tahun Sebelumnya" name="silpa" required>
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
</body>

</html>