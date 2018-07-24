<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inventory Baru</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/akuntansi.png">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link href="<?php echo base_url(); ?>assets/datetime/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/select/css/bootstrap-select.min.css" rel="stylesheet">
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
          <h4>Inventory</h4>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <?php echo validation_errors(); ?>
         <?php echo form_open('inventory_baru'); ?>
         <table>
            <tbody>
               <tr>
                  <td>
                     <div class="form-group">
                        <label>Harga Beli</label>
                        <div class="controls">
                          <input type="text" name="harga_beli" placeholder="optional" class="form-control input-sm">
                        </div>
                     </div>
                  </td>
                  <td style="padding-left: 10px">
                     <div class="form-group">
                        <label>Harga jual</label>
                        <div class="input-group">
                          <input type="text" name="harga_jual" placeholder="optional" class="form-control input-sm">
                     </div>
                  </td>
               </tr>
            </tbody>
         </table>
         <table>
            <tbody>
               <tr>
                  <td>
                     <div class="form-group">
                        <label>Kode jenis barang</label>
                        <div class="controls">
                          <input type="text" name="kode_barang" placeholder="optional" class="form-control input-sm">
                      </div>
                     </div>
                  </td>
                  <td style="padding-left: 10px">
                     <div class="form-group">
                        <label>Jenis barang</label>
                        <div class="controls">
                          <input type="text" name="jenis_barang" value="" class="form-control input-sm">
                        </div>
                     </div>
                  </td>
                  <td style="padding-left: 10px;" id="sesuai">
                     <div style="padding-left: 10px" class="form-group">
                        <label>Nama satuan</label>
                        <div class="controls">
                          <input type="text" name="nama_satuan" placeholder="optional" class="form-control input-sm">
                     </div>
                  </td>
               </tr>
            </tbody>
         </table>

         <div class="form-group">
            <label>Deskripsi</label>
            <div class="controls">
              <textarea name="deskripsi" class="form-control input-sm" style="width: 400px; height: 80px" spellcheck="true"></textarea>
            </div>
        </div>

         <div class="form-group">
            <label>Custom Income account</label>
            <div class="controls">
              <select class="form-control input-sm" name="custom_income">
                <option value="">-- none --</option>
                <option value="Pendapatan Bunga Bank">1 - Pendapatan Bunga Bank</option>
                <option value="B. Operasional Penjualan">2 - B. Operasional Penjualan </option>
                <option value="Penjualan Bostik">3 - Penjualan Bostik </option>
                <option value="B. Ekspedisi/Pengiriman">4 - B. Ekspedisi/Pengiriman </option>
                <option value="Dikson Pembelian">5 - Dikson Pembelian </option>
                <option value="Potongan Penjualan">6 - Potongan Penjualan</option>
                <option value="B KB KB">B KB KB </option>
                <option value="B. Administrasi Bank">B. Administrasi Bank</option>
                <option value="B. Alat Tulis Kantor">B. Alat Tulis Kantor</option>
                <option value="B. Gaji Karyawan ">B. Gaji Karyawan </option>
                <option value="B. Iklan dan Promosi ">B. Iklan dan Promosi </option>
                <option value="B. Kendaraan ">B. Kendaraan </option>
                <option value="B. Legal administratif ">B. Legal administratif </option>
                <option value="B. Listrik ">B. Listrik </option>
                <option value="B. Pembelian Aset ">B. Pembelian Aset </option>
                <option value="B. Penyusutan Aktiva Tetap">B. Penyusutan Aktiva Tetap</option>
                <option value="B. Perbaikan dan Pemeliharaan">B. Perbaikan dan Pemeliharaan</option>
                <option value="B. Perlengkapan kantor">B. Perlengkapan kantor </option>
                <option value="B. Rumah Tangga">B. Rumah Tangga</option>
                <option value="B. telepon dan Internet">B. telepon dan Internet</option>
                <option value="beban Lain - lain ">beban Lain - lain </option>
                <option value="Pendapatakn Lain - lain ">Pendapatakn Lain - lain </option>
              </select>
            </div>
          </div>

          <div class="form-group">
             <label>Custom expense account</label>
             <div class="controls">
               <select class="form-control input-sm">
                 <option value="">-- none --</option>
                 <option value="Pendapatan Bunga Bank">1 - Pendapatan Bunga Bank</option>
                 <option value="B. Operasional Penjualan">2 - B. Operasional Penjualan </option>
                 <option value="Penjualan Bostik">3 - Penjualan Bostik </option>
                 <option value="B. Ekspedisi/Pengiriman">4 - B. Ekspedisi/Pengiriman </option>
                 <option value="Dikson Pembelian">5 - Dikson Pembelian </option>
                 <option value="Potongan Penjualan">6 - Potongan Penjualan</option>
                 <option value="B KB KB">B KB KB </option>
                 <option value="B. Administrasi Bank">B. Administrasi Bank</option>
                 <option value="B. Alat Tulis Kantor">B. Alat Tulis Kantor</option>
                 <option value="B. Gaji Karyawan ">B. Gaji Karyawan </option>
                 <option value="B. Iklan dan Promosi ">B. Iklan dan Promosi </option>
                 <option value="B. Kendaraan ">B. Kendaraan </option>
                 <option value="B. Legal administratif ">B. Legal administratif </option>
                 <option value="B. Listrik ">B. Listrik </option>
                 <option value="B. Pembelian Aset ">B. Pembelian Aset </option>
                 <option value="B. Penyusutan Aktiva Tetap">B. Penyusutan Aktiva Tetap</option>
                 <option value="B. Perbaikan dan Pemeliharaan">B. Perbaikan dan Pemeliharaan</option>
                 <option value="B. Perlengkapan kantor">B. Perlengkapan kantor </option>
                 <option value="B. Rumah Tangga">B. Rumah Tangga</option>
                 <option value="B. telepon dan Internet">B. telepon dan Internet</option>
                 <option value="beban Lain - lain ">beban Lain - lain </option>
                 <option value="Pendapatakn Lain - lain ">Pendapatakn Lain - lain </option>
               </select>
             </div>
           </div>

           <div class="form-group">
              <label>Kode Pajak</label>
              <div class="controls">
                <select class="form-control input-sm" name="kode_pajak">
                  <option value="">-- none --</option>
                  <option value="PPN 10%">PPN 10%</option>
                </select>
              </div>
            </div>

            <div class="form-group">
               <label>Kode Pelacakan</label>
               <div class="controls">
                 <select class="form-control input-sm" name="kode_pelacakan">
                   <option value="">-- none --</option>
                   <option value="ALFA">ALFA</option>
                   <option value="Denny">Denny</option>
                   <option value="Denny">Denny</option>
                   <option value="Gunarto">Gunarto</option>
                   <option value="INDU">INDU</option>
                   <option value="Kantor">Kantor</option>
                   <option value="KONS">KONS</option>
                   <option value="NCF">NCF</option>
                   <option value="PSFK">PSFK</option>
                   <option value="PTRN">PTRN</option>
                   <option value="Resha">Resha</option>
                 </select>
               </div>
             </div>

             <div class="form-group">
                <label>Warna</label>
                <div class="controls">
                  <input type="text" name="warna" class="form-control input-sm">
                </div>
              </div>

              <div class="form-group">
                 <label>kategori</label>
                 <div class="controls">
                   <select class="form-control input-sm" name="kategori">
                     <option value="">-- none --</option>
                     <option value="Konstruksi">Konstruksi </option>
                     <option value="Industri">Industri </option>
                   </select>
                 </div>
               </div>

          <div class="btn-group">
            <input type="submit" name="submit" class="btn btn-primary">

          </div>
        <?php echo form_close(); ?>

            </div>
          </div>
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
    <script src="<?php echo base_url(); ?>assets/select/js/bootstrap-select.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datetime/js/bootstrap-datepicker.min.js"></script>
    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
