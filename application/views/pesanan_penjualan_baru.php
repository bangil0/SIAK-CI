<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Penawaran Penjualan Baru</title>
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

    <section id="container">
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
                            <form name="add_name" id="add_name">
                                <h4 style="display:inline-flex;margin-right:30px">Penawaran Penjualan</h4>
                                <hr>
                                <div class="form-group">
                                    <label>Bagian Atas<span style="font-size: 11px; font-weight: normal; margin-left: 5px">(<a href="">Jadikan default</a>)</span></label>
                                    <div class="controls"><input class="form-control input-lg" style="width: 300px" placeholder="Penawaran" type="text" name="penawaran"></div>
                                </div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label>Tanggal Diterbitkan</label>
                                                    <div class="controls"><input id="cldr" type="text" class="form-control input-sm" style="width: 100px; margin-bottom: 0px; text-align: center" name="tanggal"></div>
                                                </div>
                                            </td>
                                            <td style="padding-left: 10px">
                                                <div class="form-group">
                                                    <label>Nomor Penawaran</label>
                                                    <div class="input-group"><span class="input-group-addon">#</span><input type="text" class="form-control input-sm" style="width: 80px; text-align: center" name="referensi"></div>
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
                                                    <label>Akun bank</label>
                                                    <div class="controls">
                                                        <div>
                                                            <select class="selectpicker" data-live-search="true" name="akun_bank" title="Akun Belum Dipilih" id="akun-bank-select">
                      <?php if(!empty($pelanggan)): ?>
                        <?php foreach($pelanggan as $row): ?>
                        <option value="<?php echo $row['id']; ?>" data-tokens="<?php echo $row['nama']; ?>"><?php echo $row['nama']; ?></option>
                       <?php endforeach; ?>
                   <?php endif; ?>
                   </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="catatan" class="form-control input-sm" style="width: 400px; height: 100px" name="catatan" spellcheck="true"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" class="form-control input-sm" style="width: 500px" name="deskripsi_transaksi">
                                </div>
                                <table id="dynamic_field" class="order-list">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th style="text-align: left"><label>Deskripsi</label></th>
                                            <th style="text-align: center"><label>Kuantitas</label></th>
                                            <th style="text-align: center"><label>Harga satuan</label></th>
                                            <th class="diskon" style="display:none;text-align: center"><label>Diskon</label></th>
                                            <th style="text-align: center"><label>Jumlah</label></th>
                                        </tr>
                                    </thead>
                                    <tbody class="ko_container ui-sortable">
                                        <tr id="row">
                                            <td id="alt_row"></td>
                                            <td style="vertical-align: top">
                                                <textarea class="form-control input-sm autosize" style="height: 48px; width: 300px; margin-bottom: 0px; resize: none; overflow: hidden; overflow-wrap: break-word;" name="deskripsi[]" spellcheck="true"></textarea>
                                            </td>
                                            <td style="vertical-align: top">
                                                <input class="regular form-control input-sm" style="width: 80px; text-align: center; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" id="qty" name="qty[]" type="text">
                                            </td>
                                            <td style="vertical-align: top">
                                                <input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" id="price" name="price[]" type="text">
                                            </td>
                                            <td class="diskon" style="display:none;vertical-align: top;">
                                                <div class="input-group percentage" style="margin-bottom: 0px;">
                                                    <input class="regular form-control input-sm" style="width: 50px; text-align: center; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" placeholder="0" type="text">
                                                    <span class="input-group-addon" style="vertical-align: top; padding-left: 5px; padding-right: 5px;">%</span>
                                                </div>
                                                        <input class="exact regular form-control input-sm" style="width: 80px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px; display: none;" placeholder="0" type="text">
                                            </td>
                                            <td style="vertical-align: top">
                                                <input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" readonly id="linetotal" name="linetotal[]" type="text">
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td id="expand" colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; font-weight: bold" readonly id="grandtotal" name="grandtotal" type="text"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="btn-group" style="margin-top: -45px; margin-left: 3px">
                                    <a class="btn btn-default btn-xs" id="add">Tambah baris</a><button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" style="min-width: 0px"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:;" id="add5">Tambah baris (5×)</a></li>
                                        <li><a href="javascript:;" id="add10">Tambah baris (10×)</a></li>
                                        <li><a href="javascript:;" id="add20">Tambah baris (20×)</a></li>
                                    </ul>
                                </div>

                                <div class="checkbox">
                                    <label><input name="diskon_checkbox" id="diskon_checkbox" type="checkbox">Diskon</label>
                                    <div class="form-group" id="diskon_container" style="display: none; margin-left: 20px; margin-top: 8px;">
                                        <select style="width: 200px; display: none;" class="selectpicker" data-live-search="true" name="jenis_diskon" id="jenis_diskon">
                                            <option value="Percentage" data-tokens="Persentase">Persentase</option>
                                            <option value="ExactAmount" data-tokens="Exact amount">Exact amount</option></select>
                                    </div>
                                </div>
                                <div class="form-group"><label>Catatan</label><textarea name="catatan" class="form-control input-sm" style="width: 400px; height: 100px" name="catatan" spellcheck="true"></textarea></div>
                                <div class="btn-group"><input id="btnCreate" class="btn btn-primary" style="font-weight: bold" value="Buat" type="button"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><input id="btnCreateAndAddAnother" class="btn btn-link" value="Buat &amp; Tambahkan Baru" type="button"></li>
                                    </ul>
                                </div>
                            </form>

                        </div>
                        <!-- /content-panel -->
                    </div>
                    <!-- /col-md-12 -->
                </div>
                <!-- /row -->

            </section>
            <! --/wrapper -->
        </section>
        <!-- /MAIN CONTENT -->

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

    <script>
        var diskon = "none";
        var percentage = "table";
        var exact = "none";

        $("#jenis_diskon").selectpicker({
            style: "btn-default btn-sm"
        });

        $('#jenis_diskon').change(function(){
            if($(this).val() == "Percentage") {
                $('.percentage').show();
                percentage = "table";
                exact = "none";
                $('.exact').hide();
            } else {
                $('.percentage').hide();
                $('.exact').show();
                percentage = "none";
                exact = "table";
            };
        });

        $('#diskon_checkbox').change(function() {
            if(this.checked) {
                $('#diskon_container').show();
                $('.diskon').show();
                diskon = "block";
                $('#expand').attr('colspan',3);
            } else {
                $('#diskon_container').hide();
                $('.diskon').hide();
                $('#expand').attr('colspan',2);
                diskon = "none";
            }
        });

    </script>
    <script>
        //untuk mengirim data ke database
        $('#btnCreate').click(function() {
            $.ajax({
                url: '<?php echo base_url(); ?>proses/reimburse_baru_save/insert',
                method: 'POST',
                data: $('#add_name').serialize(),
                success: function(data) {
                    alert(data);
                    $('#add_name')[0].reset();
                    window.history.back();
                },
                error: function(data) {
                    alert('Data Tidak Lengkap');
                }
            });
        });

    </script>

    <script>
        var counter = 1;
        $(document).ready(function() {

            $("#add*").on("click", function() {
                counter++;

                var newRow = $("<tr id='row" + counter + "'>");
                var cols = "";
                cols += '<td id="alt_row' + counter + '"></td><td style="vertical-align: top"><textarea class="form-control input-sm autosize" style="height: 48px; width: 300px; margin-bottom: 0px; resize: none; overflow: hidden; overflow-wrap: break-word;" name="deskripsi[]" id="deskripsi_rincian' + counter + '" spellcheck="true"></textarea></td><td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 80px; text-align: center; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" id="qty' + counter + '" name="qty[]" type="text"></td><td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" id="price' + counter + '" name="price[]" type="text"></td> <td class="diskon" style="display:'+diskon+';vertical-align: top;"><div class="input-group percentage" style="display:'+percentage+';margin-bottom: 0px;"><input class="regular form-control input-sm" style="width: 50px; text-align: center; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" placeholder="0" type="text"><span class="input-group-addon" style="vertical-align: top; padding-left: 5px; padding-right: 5px;">%</span></div><input class="exact regular form-control input-sm" style="width: 80px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px; display: '+exact+';" placeholder="0" type="text"></td><td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" readonly id="linetotal' + counter + '" name="linetotal[]" type="text"></td><td style="padding-left:10px"><button type="button" name="remove" id="delete' + counter + '" class="deleteRow btn btn-danger btn_remove">X</button></td>';
                newRow.append(cols);

                $("table.order-list").append(newRow);
                $('#row' + counter + ' select').selectpicker('refresh');
            });


        });

    </script>

    <!--script for this page-->
    <script type="text/javascript">
        $("table.order-list").on("change", 'input[id^="price"], input[id^="qty"]', function(event) {
            calculateRow($(this).closest("tr"));
            calculateGrandTotal();
        });

        $("table.order-list").on("click", "button.deleteRow", function(event) {
            $(this).closest("tr").remove();
            calculateGrandTotal();
            counter--;
        });

        function calculateRow(row) {
            var price = +row.find('input[id^="price"]').val();
            var qty = +row.find('input[id^="qty"]').val();
            row.find('input[id^="linetotal"]').val((price * qty).toFixed(2));
        }

        function calculateGrandTotal() {
            var grandTotal = 0;
            $("table.order-list").find('input[id^="linetotal"]').each(function() {
                grandTotal += +$(this).val();
            });
            $("#grandtotal").val(grandTotal.toFixed(2));
        }
    </script>
    <script>
        $(function() {
            $('select.styled').customSelect();
        });
        $('#example').DataTable();

    </script>
