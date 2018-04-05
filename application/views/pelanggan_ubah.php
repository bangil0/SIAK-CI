<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pelanggan</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/akuntansi.png">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.css">
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
        <table>

                              <h4 style="display:inline-flex;margin-right:30px">Pelanggan Baru</h4>
                              <hr>
            <tbody>
                <tr>
                    <td style="vertical-align: top; padding-right: 5px">
                        <div class="form-group"><label>Nama</label><input id="nama" class="form-control input-sm" style="width: 300px" value="<?php echo $record->nama; ?>" type="text"></div>
                    </td>
                    <td style="vertical-align: top; padding-right: 5px">
                        <div class="form-group"><label>Kode</label><input value="<?php echo $record->kode; ?>" id="kode" class="form-control input-sm" style="width: 100px" placeholder="Opsional" type="text"></div>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top">
                        <div class="form-group"><label>Tanda Pengenal Bisnis</label><input id="tanda_pengenal" class="form-control input-sm" value="<?php echo $record->tanda_pengenal_bisnis; ?>" style="width: 160px" type="text"><span class="help-block">NPWP</span></div>
                    </td>
                </tr>
                <tr>
                   <td style="vertical-align: top">
                    <div class="form-group"><label>Alamat Penagihan</label>
                        <textarea class="form-control input-sm" id="alamat" style="width: 300px; height: 100px"><?php echo $record->alamat_penagihan; ?>"</textarea>
                    </div>
                    </td>
                </tr>
                 <tr>
                    <td style="vertical-align: top">
                        <div class="form-group"><label>Alamat Surel</label><input id="email" class="form-control input-sm" style="width: 300px" value="<?php echo $record->alamat_surel; ?>"type="email"></div>
                    </td>
                </tr>
                <tr>
                   <td style="vertical-align: top">
                    <div class="form-group"><label>Telepon</label><input id="telepon" class="form-control input-sm" style="width: 200px" value="<?php echo $record->telepon; ?>"type="text"></div>
                    </td>
                </tr>
                <tr>
                   <td style="vertical-align: top">
                    <div class="form-group"><label>Faksimili</label><input value="<?php echo $record->faksimili; ?>"class="form-control input-sm" style="width: 200px" id="fax" type="text"></div>
                    </td>
                </tr>
                <tr>
                   <td style="vertical-align: top">
                    <div class="form-group"><label>Nomor Ponsel</label><input class="form-control input-sm" value="<?php echo $record->ponsel; ?>" style="width: 200px" id="hp" type="text"></div>
                    </td>
                </tr>
                <tr>
                <td style="vertical-align: top">
                    <div class="form-group"><label>Informasi tambahan</label>
                        <textarea class="form-control input-sm" style="width: 300px; height: 100px" id="info" spellcheck="true"><?php echo $record->informasi_tambahan; ?></textarea></div>
                </td>
                </tr>
                <tr>
                     <td style="vertical-align: top; padding-right: 5px">
                        <div class="form-group"><label>Pagu Kredit</label><input value="<?php echo $record->pagu_kredit; ?>" id="pagu" class="form-control input-sm" style="width: 100px" placeholder="Opsional" type="text"></div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="checkbox"><label><input style="margin-top: 3px" type="checkbox">Saldo awal</label>
        <div class="form-group" style="display: none;"><span style="padding: 5px; border: 1px solid #ccc; background-color: #ffffdb; font-size: 12px; color: #555; line-height: 150%; border-radius: 3px">Anda akan dapat menentukan saldo awal setelah menentukan <b> Tanggal mulai</b> didalam <b>Pengaturan</b> tab</span></div>
        </div>
        <div></div><br/>
                          <div class="btn-group"><input class="btn btn-success" style="font-weight: bold" value="Edit" id="insert" onclick="submit();" type="button">
                           </div>
                           <div class="btn-group"><input class="btn btn-danger" style="font-weight: bold" value="Hapus" id="insert" onclick="submit();" type="button">
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
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>

    <!--script for this page-->

  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      $('#example').DataTable();
  </script>
  </body>
</html>


