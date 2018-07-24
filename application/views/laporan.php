<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/akuntansi.png">
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo base_url(); ?>" class="logo"><b>AKUNTANSI</b></a>
            <!--logo end-->

            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->

      <?php include 'static/aside.php'; ?>
      <!--sidebar end-->

      <!-- **********************************
      MAIN CONTENT
      ************************************************************************************************************************
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                        <table id="example" class="table table-bordered table-striped">
                              <h4 style="display:inline-flex;margin-right:30px">Laporan Pemasukan</h4>
                             <a href="<?php echo base_url(); ?>laporan_baru" class="btn btn-default btn-sm">Laporan pemasukan Baru</a>
                            <hr>
                              <thead>
                              <tr>
                                  <th>Dari</th>
                                  <th>Sampai</th>
                                  <th>Jenis Laporan</th>
                                  <th>Metode Akuntansi</th>
                                  <th>Kode Pelacakan</th>
                                  <th>Deskripsi</th>
                                  <th>Total</th>
                                  <td>Action</td>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                function rupiah($angka){
                                   $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                                    return $hasil_rupiah;
                                  }
                                 ?>

                                <?php if(!empty($laporan)): ?>
  								              <?php foreach($laporan as $laporan_item): ?>
                                    <tr>
                                        <td> <?php echo $laporan_item['waktuMulai']; ?></td>
                                        <td><?php echo $laporan_item['waktuAkhir']; ?></td>
                                        <td> <button type="button" name="button" class="btn btn-success btn-sm"><?php echo $laporan_item['jenisLaporan']; ?></button>
                                        </td>
                                        <td> <?php echo $laporan_item['metodeAkuntansi']; ?></td>
                                        <td> <?php echo $laporan_item['kodePelacakan']; ?></td>
                                        <td> <?php echo $laporan_item['deskripsi']; ?></td>

                                        <td> <?php echo rupiah($laporan_item['totalLaporan'])?></td>

                                        <td>
                                          <a href="laporan_lihat/<?php echo $laporan_item['id']; ?>" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                                          <!-- <a href="laporan_ubah/<?php echo $laporan_item['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a> -->
                                          <button class="btn btn-danger btn-xs" id="btnDelete" onclick="delateLaporan(<?php echo $laporan_item['id']; ?>)" value="Hapus" type="button">
                                            <i class="fa fa-trash-o "></i></button>
                                      </td>
                                    </tr>
                                  <?php endforeach; ?>
                                  <?php endif; ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
    <!--script for this page-->

      <script>
          //custom select box
          function delateLaporan(id) {
            var del = confirm("Yakin ingin menghapus?");
            if(del) {
                 return window.location.href = "<?php echo base_url(); ?>laporan_hapus/" + id;
            } else {
                return false;
            }
        }

        $(function(){
            $('select.styled').customSelect();
        });
        $('#example').DataTable();
      </script>
