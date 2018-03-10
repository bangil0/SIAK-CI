<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rekening Bank</title>
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
            <a href="index.html" class="logo"><b>AKUNTANSI</b></a>
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
   <h4 style="display:inline-flex;margin-right:30px">Akun BANK</h4>
                              <hr>
    <tbody>
                <tr>
                    <td style="vertical-align: top; padding-right: 5px">
                        <div class="form-group"><label>Nama</label><input id="nama" value="<?php echo $record->nama; ?>" class="form-control input-sm" style="width: 300px" type="text"></div>
                    </td>
                    <td style="vertical-align: top; padding-right: 5px">
                        <div class="form-group"><label>Kode</label><input id="kode" class="form-control input-sm" style="width: 100px" placeholder="Opsional" type="text" value="<?php echo $record->kode; ?>"></div>
                    </td>
                    <td style="vertical-align: top">
                        <div class="form-group"><label>Pagu kredit</label><input id="pagu" class="form-control input-sm" style="width: 100px" placeholder="Opsional" type="text" value="<?php echo $record->kredit; ?>"></div>
                    </td>
                </tr>
            </tbody>
</table>
<div class="checkbox"><label><input style="margin-top: 3px" data-bind="checked: HasStartingBalance" type="checkbox">Saldo awal</label>
    <div class="form-group" data-bind="visible: HasStartingBalance" style="display: none;"><span style="padding: 5px; border: 1px solid #ccc; background-color: #ffffdb; font-size: 12px; color: #555; line-height: 150%; border-radius: 3px">Anda akan dapat menentukan saldo awal setelah menentukan <b> Tanggal mulai</b> didalam <b>Pengaturan</b> tab</span></div>
</div>
<div class="checkbox"><label><input value="true" data-bind="checked: Inactive" type="checkbox">Non-aktif</label></div>
<div></div><br/>
        <input id="btnUpdate" class="btn btn-success" style="font-weight: bold" onclick="perbarui()" value="Perbarui" type="button">&nbsp;&nbsp;<input id="btnDelete" onclick="deleteRek()" class="btn btn-danger" style="font-weight: bold" value="Hapus" type="button">
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
      function deleteRek() {
        var del = confirm("Yakin ingin menghapus?");
        if(del) {
            return window.location.href = "<?php echo base_url(); ?>proses/delete_rekening/<?php echo $this->uri->segment(2); ?>";
        } else {
            return false;
        }
    }
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });


    function perbarui() {
    $("#btnUpdate").val("Mengupdate..");
    var a = $("#nama").val(),
        n = $("#kode").val(),
        e = $("#pagu").val(),
        x = <?php echo $this->uri->segment(2); ?>;

        $.ajax({
            url: "<?php echo base_url(); ?>proses/update_rekening_bank/update",
            type: "POST",
            data: "nama=" + a + "&kode=" + n + "&pagu=" + e + "&id=" + x,
            success: function(a) {
                if(a == 'success') {
                setTimeout(function() { window.location.href = '<?php echo base_url(); ?>rekening_bank?t=<?php echo rand(1,2) ?>'; }, 1200);
                } else {
                alert(a);
                location.reload();
                }
            }
        })
}
  </script>


