<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Transaksi Kas</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/akuntansi.png">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css" rel="stylesheet">
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
            <a href="index.html" class="logo"><b>AKUNTANSI</b></a>
            <!--logo end-->

            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login">Logout</a></li>
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
                        <table id="example" class="display nowrap" style="width:100%;e">
  <thead>
    <h1>TRANSAKSI KAS</h1>
      <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th> </th>
          <th></th>
      </tr>
  </thead>
  <hr>
  <tbody>
      <tr>
          <td><?php echo $record[0]['diterima']; ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td style="border-right-width: 1px; padding-right: 20px; text-align: right">
                <div style="font-weight: bold">Tanggal</div>

                <div style="margin-bottom: 10px"><?php echo $record[0]['tanggal']; ?></div>
          </td>

          <td style="padding-left: 20px; width: 1px; white-space: nowrap">
                <div style="font-weight: bold">Akuntansi</div>
                <div>1313 Webfoot Walk<br>
                    Duckburg<br>
                    Calisota</div>
                <div></div>

          </td>
      </tr>

      <tr>
          <th><?php echo $record[0]['status']; ?></th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <th></th>
      </tr>
      <tr>
          <td><div style="font-weight: bold">Deskripsi</div></th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><div style="font-weight: bold">Jumlah</div></th>
      </tr>
      <?php if(!empty($rincian)): ?>
<?php foreach($rincian as $row): ?>
      <tr>
          <td><?php echo $row['deskripsi']; ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><?php echo $row['jumlah']; ?></td>
      </tr>
<?php endforeach; ?>
<?php endif; ?>

      <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Total</td>
      </tr>
      <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>

            <tr>
                <td>Catatan</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo $record[0]['catatan']; ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>


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
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>










    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src=""></script>
    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>

    <!--script for this page-->

    <script>
        //custom select box
        function deleteTransaksi(id) {
          var del = confirm("Yakin ingin menghapus?");
          if(del) {
               return window.location.href = "<?php echo base_url(); ?>proses/delete_transaksi_bank/" + id;
          } else {
              return false;
          }
      }

      $(function(){
          $('select.styled').customSelect();
      });

    $('#example').DataTable( {
      "ordering": false,
      "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
      "drawCallback": function( settings ) {
    $("#example thead").remove(); },
        dom: 'Bfrtip',
        buttons: [
          {
            extend: 'print',
            text: 'Print',
            exportOptions: {
                stripHtml: false
            }
        },
        {
            extend: 'pdf',
            text: 'PDF',
            exportOptions: {
                stripNewlines: false
            }
        },
        {
            extend: 'csv',
            text: 'Excel'
        },
        {
            extend: 'copy',
            text: 'copy'
        }
      ]
    } );


    </script>


  </body>
</html>
