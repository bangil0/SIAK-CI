<!DOCTYPE html>
<html lang="en">
  <head>
    <style media="screen">
        .custom{
          width:30%;
          margin:0 auto;
          min-width:350px;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Informasi Akuntansi</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/akuntansi.png">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/js/chart-master/Chart.js"></script>

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

      <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <!-- <div class="content-panel">
                        <h4>Ringkasan</h4>
                        <a href="<?php echo base_url(); ?>pelanggan_baru" >tentukan periode</a>
                        <hr> -->

                        <div class="content-panel">
                                <h4 style="display:inline-flex;margin-right:30px">Ringkasan</h4>
                               <a href="<?php echo base_url(); ?>periode" class="btn btn-default btn-sm">tentukan periode</a>
                             <hr>

          <section class="">
              <div class="row">
                  <div class="col-lg-9 main-chart">

                  	<div class="">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="">




                  			</div>

                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="">


                  			</div>

                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="">


                  			</div>

                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="">


                  			</div>

                  		</div>

                  	</div><!-- /row mt -->


                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
                              <table width="140%" >
                                <tr align="left">
                                  <td cellpadding="100"><h3>Aktiva</h3></td>
                                  <td> <h3>8.00</h3></td>
                                </tr>
                              </table>
                      			</div>
                    								<div class="centered" cellspacing="10">
                                      <font size="2" color="black"  >
                                      <table width="100%" height="90" >
                                        <tr align="left" >
                                          <td> Kas di BANK</td>
                                          <td> 8.0 </td>
                                        </tr>


                                        <tr align="left">
                                          <td> Kas di tangan</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td> Pengeluaran Tagihan</td>
                                          <td> 8.0 </td>
                                        </tr>
                                      </table>

	                     </div>
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->



                        <div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn donut-chart">
                      			<div class="white-header">
                              <table width="125%" >
                                <tr align="left">
                                  <td ><h3>Income</h3></td>
                                  <td> <h3>8.00</h3></td>
                                </tr>
                              </table>
                      			</div>
                    								<div class="centered" cellspacing="10">
                                      <font size="2" color="black"  >
                                      <table width="100%" height="110" >
                                        <tr align="left" >
                                          <td > Denda keterlambatan pembayaran</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td>Interest received</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td> Pengeluaran Tagihan - markup</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td> sales</td>
                                          <td> 8.0 </td>
                                        </tr>
                                      </table>

	                     </div>
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->

                        <div class="col-md-4 col-sm-4 mb">
                          <div class="white-panel pn donut-chart">
                            <div class="white-header">
                              <table width="90%" >
                                <tr align="left">
                                  <td cellpadding="100"><h3>Dikurangi Kewajiban</h3></td>
                                  <td> <h3>8.00</h3></td>
                                </tr>
                              </table>
                            </div>
                                    <div class="centered" cellspacing="10">
                                      <font size="2" color="black"  >
                                      <table width="110%"  >
                                        <tr align="left" >
                                          <td> </td>
                                          <td>  </td>
                                        </tr>


                                      </table>

                       </div>
                          </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                        <div class="col-md-4 col-sm-4 mb">
                          <div class="white-panel pn donut-chart">
                            <div class="white-header">
                              <table width="130%" >
                                <tr align="left">
                                  <td> <h3>Ekuitas</h3></td></td>
                                  <td ><h3>8.00</h3></td>
                                </tr>
                              </table>
                            </div>

                                    <div class="centered" cellspacing="10">
                                      <font size="2" color="black"  >
                                      <table width="100%" height="70"  >
                                        <tr align="left" >
                                          <td> Akun tidak terdefinisi</td>
                                          <td>  80 </td>
                                        </tr>

                                        <tr align="left" >
                                          <td> Laba ditahan</td>
                                          <td>  80 </td>
                                        </tr>




                                      </table>

                        </div>
                          </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                        <div class="col-md-4 col-sm-4 mb">
                          <div class="white-panel pn donut-chart">
                            <div class="white-header">
                              <table width="105%" >
                                <tr align="left">
                                  <td cellpadding="100"><h3>Laba Bersih</h3></td>
                                  <td> <h3>8.00</h3></td>
                                </tr>
                              </table>
                            </div>
                                    <div class="centered" cellspacing="10">
                                      <font size="2" color="black"  >
                                      <table width="110%"  >
                                        <tr align="left" >
                                          <td> </td>
                                          <td>  </td>
                                        </tr>


                                      </table>

                        </div>
                          </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->

                        <div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pns donut-chart">
                      			<div class="white-header">
                              <table width="100%" >
                                <tr align="left">
                                  <td cellpadding="100"><h3>Dikurangi Expenses</h3></td>
                                  <td> <h3>8.00</h3></td>
                                </tr>
                              </table>
                      			</div>

                    								<div class="centered">
                                      <font size="2" color="black"  >
                                      <table width="110%" height="400" >
                                        <tr align="left" >
                                          <td> Accounting fees</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td width="80%"> Advertising and promotion</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td> Bank charges</td>
                                          <td> 8.0 </td>
                                        </tr>
                                        <tr align="left" >
                                          <td> Computer equipment</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td> Donations</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td> Electricity</td>
                                          <td> 8.0 </td>
                                        </tr>
                                        <tr align="left" >
                                          <td> Entertainment</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td> Legal fees</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td> Motor vehicle expenses</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td> Pengeluaran Tagihan - tak tertutupi</td>
                                          <td> 8.0 </td>
                                        </tr>
                                        <tr align="left" >
                                          <td> Printing and stationery</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td> Repairs and maintenance</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td> Rent</td>
                                          <td> 8.0 </td>
                                        </tr>

                                        <tr align="left">
                                          <td> Telephone</td>
                                          <td> 8.0 </td>
                                        </tr>

                                      </table>

	                     </div>
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
                                  </div><!-- /row -->






                                </div><!-- /col-lg-9 END SECTION MIDDLE -->


      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->

                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->


                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->

                  </div><!-- /col-lg-3 -->
              </div><! --/row -->


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url(); ?>assets/js/sparkline-chart.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/zabuto_calendar.js"></script>


	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
