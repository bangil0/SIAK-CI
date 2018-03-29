<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

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
                        <table id="example" class="table table-bordered table-striped">
                              <h4 style="display:inline-flex;margin-right:30px">Pelanggan</h4>
                             <a href="<?php echo base_url(); ?>pelanggan_baru" class="btn btn-default btn-sm">Pelanggan Baru</a>
                             <hr>
                                     <div class="form-group">
                                        <label>Metode Akuntansi</label>
                                        <div class="controls">
                                           <div class="select2-container" id="s2id_autogen1">
                                              <a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">Berbasis kas</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                                              <div class="select2-drop select2-display-none select2-with-searchbox">
                                                 <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>
                                                 <ul class="select2-results" role="listbox" id="select2-results-2">   </ul>
                                              </div>
                                           </div>
                                           <select data-bind="value: AccountingBasis, select2" tabindex="-1" title="" style="display: none;">
                                              <option value="Accrual">Berbasis akrual</option>
                                              <option value="Cash">Berbasis kas</option>
                                           </select>
                                        </div>
                                     </div>
                                     <div class="checkbox"><label><input type="checkbox" data-bind="checked: Enabled">Tampilkan saldo untuk periode</label></div>
                                     <table data-bind="visible: Enabled">
                                        <tbody>
                                           <tr>
                                              <td>
                                                 <div class="form-group">
                                                    <label>Dari</label>
                                                    <div class="controls"><input type="text" class="form-control input-sm" style="width: 100px; margin-bottom: 0px; text-align: center" data-bind="datePicker: StartDate"></div>
                                                 </div>
                                              </td>
                                              <td style="padding-left: 5px">
                                                 <div class="form-group">
                                                    <label>Sampai dengan</label>
                                                    <div class="controls">
                                                       <div style="float: left">
                                                          <div class="select2-container" id="s2id_autogen3">
                                                             <a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">Hari ini</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4">
                                                             <div class="select2-drop select2-display-none select2-with-searchbox">
                                                                <div class="select2-search">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">   </div>
                                                                <ul class="select2-results" role="listbox" id="select2-results-4">   </ul>
                                                             </div>
                                                          </div>
                                                          <select data-bind="value: EndDateType, select2" tabindex="-1" title="" style="display: none;">
                                                             <option value="Today">Hari ini</option>
                                                             <option value="Custom">Buatan sendiri</option>
                                                          </select>
                                                       </div>
                                                       <div style="float: left; margin-left: 5px; display: none;" data-bind="visible: EndDateType() == 'Custom'"><input type="text" class="form-control input-sm" style="width: 100px; margin-bottom: 0px; text-align: center" data-bind="datePicker: EndDate"></div>
                                                       <div style="clear: both"></div>
                                                    </div>

                                                 </div>
                                              </td>
                                           </tr>

                                        </tbody>
                                     </table>
                                     <div></div>
                                     <div img src="resources/ajax-loader.gif" id="ajaxIndicator" style="display: none; margin-right: 10px"><input type="button" id="btnUpdate" class="btn btn-primary" style="font-weight: bold" value="Perbarui"></div>
                                  </div>

                               </div>              </div><!-- /row -->

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

        $(function(){
            $('select.styled').customSelect();
        });
        $('#example').DataTable();
