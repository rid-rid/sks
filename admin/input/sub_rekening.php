<?php require_once('../Connections/koneksi.php'); ?>
<?php require_once('hak_akses.php'); ?>
<?php $page = "kelola_dana"; ?>
<?php $sub = "data"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>MASTER SUB REKENING - Desa Tamban Jaya</title>
  <!-- Favicons -->
  <link href="../img/icon.png" rel="icon">
  <link href="../img/icon.png" rel="apple-touch-icon">
  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="../lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="../lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="../lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">
  <!-- Css and JS Autocomplete -->
  <link href="../lib/autocomplete/jquery-ui.css" rel="stylesheet">
  <script type="text/javascript" src="../lib/autocomplete/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="../lib/autocomplete/jquery-ui.js"></script>
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
  <script type="text/javascript">
    $(function() {
      var data = "autocomplete_rekening.php";
      $("#nama_rekening").autocomplete({
        source: data
      });
    });
  </script>
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
        <h4><b> MASTER DATA SUB REKENING </b></h4>
        <div class="row mt">
          <div class="col-lg-12">
            <!-- START FORM -->
            <div class="row mb">
              <div class="form-panel">
                <form class="form-horizontal style-form" method="post" action="../proses/simpan/sub_rekening.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label" for="nama_rekening">Nama Rekening </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Masukkan Nama Rekening" name="nama_rekening" id="nama_rekening" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Kode Sub Rekening </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Masukkan Kode Sub Rekening Sesuai Kode Bidang" name="kd_sub_rekening" id="kd_sub_rekening" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama Sub Rekening</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Masukkan Nama Sub Rekening" name="nama_sub_rekening" id="nama__sub_rekening" required>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-theme03"><i class="fa fa-save"></i> SIMPAN</button>
                </form>
              </div>
            </div>
            <!-- END FORM -->
            <!-- Start Content -->
            <div class="row mb">
              <div class="form-panel">
                <div class="adv-table">
                  <table class="table table-striped table-advance table-hover" id="hidden-table-info" width="100%">
                    <hr>
                    <thead>
                      <tr>
                        <th width="6%"><i class="fa fa-sort-numeric-asc"></i> No</th>
                        <th><i class="fa fa-exclamation-circle"></i> Kode Sub Rekening</th>
                        <th><i class="fa fa-group"></i> Nama Sub Rekening</th>
                        <th><i class=" fa fa-check"></i> Kode Rekening</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      mysql_select_db($database_koneksi, $koneksi);
                      $tampil = "SELECT * FROM sub_rekening ORDER BY kd_rekening ASC";
                      $query = mysql_query($tampil, $koneksi) or die(mysql_error());
                      $r = mysql_fetch_assoc($query);
                      $no = 1;
                      do { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo "$r[kd_sub_rekening]"; ?></td>
                          <td><?php echo "$r[nama_sub_rekening]"; ?></td>
                          <td><?php echo "$r[kd_rekening]"; ?></td>
                          <td>
                            <a href="../edit/sub_rekening.php?edit=<?php echo $r['kd_sub_rekening']; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                            <a href="../proses/hapus/sub_rekening.php?del=<?php echo $r['kd_sub_rekening']; ?>" onClick="return confirm('Apakah Ingin Menghapus Data')"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                          </td>
                        </tr>
                      <?php $no++;
                      } while ($r = mysql_fetch_assoc($query)); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- End Content-->
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
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="../lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../lib/jquery.scrollTo.min.js"></script>
  <script src="../lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="../lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="../lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="../lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.className = "left";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>