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

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                        <table id="example" class="table table-bordered table-striped">
                              <h4 style="display:inline-flex;margin-right:30px">Laporan pengeluaran</h4>
                             <a href="<?php echo base_url(); ?>laporan_pengeluaran_baru" class="btn btn-default btn-sm">Laporan pengeluaran Baru</a>
                            <hr>
                              <thead>
                              <tr>
                                  <th>Dari</th>
                                  <th>Sampai</th>
                                  <th>Metode Akuntansi</th>
                                  <th>Kode Pelacakan</th>
                                  <th>Deskripsi</th>
                                  <th>Action<th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php if(!empty($inventory_list)): ?>
  								              <?php foreach($inventory_list as $inventory_item): ?>
                                    <tr>
                                        <td> <?php echo $inventory_item['kode_barang']; ?></td>
                                        <td ><?php echo $inventory_item['jenis_barang']; ?></td>
                                        <td> <?php echo $inventory_item['nama_satuan']; ?></td>
                                        <td> <?php echo $inventory_item['harga_beli']; ?></td>
                                        <td> <?php echo $inventory_item['harga_jual']; ?></td>
                                        <td>
                                          <a href="inventory_lihat/<?php echo $inventory_item['kode_barang'];; ?>" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                                          <a href="inventory_ubah/<?php echo $inventory_item['kode_barang']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                          <button class="btn btn-danger btn-xs" id="btnDelete" onclick="deleteInventory(<?php echo $inventory_item['kode_barang']; ?>)" value="Hapus" type="button"><i class="fa fa-trash-o "></i></button>                                        </td>
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
