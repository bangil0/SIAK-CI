<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Transaksi Bank</title>
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
   <form name="add_name" id="add_name">
   <table>
     <h4 style="display:inline-flex;margin-right:30px">Penerimaan</h4>
                              <hr>
      <tbody>
         <tr>
            <td>
               <div class="form-group">
                  <label>Tanggal</label>
                  <div class="controls"><input id="cldr" type="text" class="form-control input-sm" style="width: 100px; margin-bottom: 0px; text-align: center" name="tanggal"></div>
               </div>
            </td>
            <td style="padding-left: 10px">
               <div class="form-group">
                  <label>Referensi</label>
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
                      <?php if(!empty($record)): ?>
                        <?php foreach($record as $row): ?>
                        <option value="<?php echo $row['id']; ?>" data-tokens="<?php echo $row['nama']; ?>"><?php echo $row['nama']; ?></option>
                       <?php endforeach; ?>
                   <?php endif; ?>
                   </select>
                   </div>
                </div>
               </div>
            </td>
            <td style="padding-left: 10px">
               <div class="form-group">
                  <label>Status</label>
                  <div class="controls">
                     <select name="status" class="selectpicker" data-live-search="true" id="status">
                        <option value="sesuai">Transaksi sesuai</option>
                        <option value="tertunda">Tertunda</option>
                     </select>
                  </div>
               </div>
            </td>
            <td style="padding-left: 10px;" id="sesuai">
               <div style="padding-left: 10px" class="form-group">
                  <label>Tanggal</label>
                  <div class="controls"><input name="tanggal_buat" id="cldr1" type="text" placeholder="tanggal" class="form-control input-sm" style="width: 100px; margin-bottom: 0px; text-align: center"></div>
               </div>
            </td>
         </tr>
      </tbody>
   </table>
   <div class="form-group">
      <label>Diterima dari</label>
      <div class="controls"><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="tt-hint" type="text" autocomplete="off" spellcheck="off" disabled="" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input name="diterima_dari" type="text" class="form-control input-sm tt-query" style="width: 300px; position: relative; vertical-align: top; background-color: rgb(255, 255, 255);" data-bind="value: Payer, typeahead: 'contact-autocomplete?FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b'" autocomplete="off" spellcheck="false" dir="auto"><span style="position: absolute; left: -9999px; visibility: hidden; white-space: nowrap; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></span><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span></span></div>
   </div>
   <div class="form-group"><label>Deskripsi</label><input type="text" class="form-control input-sm" style="width: 500px" name="deskripsi_transaksi"></div>
   <table id="dynamic_field" class="order-list">
      <thead>
         <tr>
            <th></th>
            <th style="text-align: left;" class="akun_extend" colspan="3"><label>Akun</label></th>
            <th style="text-align: left"><label>Deskripsi</label></th>
            <th style="text-align: center"><label>Kuantitas</label></th>
            <th style="text-align: center"><label>Harga satuan</label></th>
            <th style="text-align: center"><label>Jumlah</label></th>
         </tr>
      </thead>
      <tbody class="ko_container ui-sortable">
         <tr id="row">
         <td></td>
         <td id="akun_row" colspan="3" style="text-align: left;"><div class="controls">
                     <select name="akun[]" data-style="btn-default btn-lg" data-width="350px" class="selectpicker akun" data-size="7" multiple data-max-options="1" data-live-search="true" onchange="getAkun(this)" title="Akun Belum Dipilih" id="status">
                       <optgroup label="Income">
                        <option value="Interest Received">Interest Received</option>
                        <option value="Sales">Sales</option>
                       </optgroup>
                       <optgroup label="Expenses">
                        <option value="Accounting Fees">Accounting Fees</option>
                        <option value="Adversting and Promotion">Adversting and Promotion</option>
                        <option value="Bank Charges">Bank Charges</option>
                        <option value="Computer Equipment">Computer Equipment</option>
                        <option value="Donations">Donations</option>
                        <option value="Electricity">Electricity</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Legal Fees">Legal Fees</option>
                        <option value="Motor Vehicle Expenses">Motor Vehicle Expenses</option>
                        <option value="Printing and Stationery">Printing and Stationery</option>
                        <option value="Rent">Rent</option>
                        <option value="Repairs and maintenance">Repairs and maintenance</option>
                        <option value="Telephone">Telephone</option>
                       </optgroup>
                       <optgroup label="Aktiva">
                        <option value="Pengeluaran Tagihan">Pengeluaran Tagihan</option>
                        <option value="Piutang Dagang">Piutang Dagang</option>
                       </optgroup>
                       <optgroup label="Ekuitas">
                        <option value="Laba Ditahan">Laba Ditahan</option>
                       </optgroup>
                     </select>
                  </div>
         </td>
         <td id="pelanggan_row" style="vertical-align: top;display:none">
         <div class="controls">
                     <select name="pelanggan[]" data-style="btn-default btn-lg" class="selectpicker" data-size="7" multiple data-width="150px" data-max-options="1" data-live-search="true" title="Pelanggan" id="status">
                        <option value="Interest Received">Interest Received</option>
                     </select>
                  </div>
         </td>
         <td style="vertical-align: top">
            <textarea class="form-control input-sm autosize" style="height: 48px; width: 300px; margin-bottom: 0px; resize: none; overflow: hidden; overflow-wrap: break-word;" name="deskripsi[]" spellcheck="true"></textarea>
         </td>
         <td style="vertical-align: top">
             <input class="regular form-control input-sm" style="width: 80px; text-align: center; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" id="qty" name="qty[]" type="text">
         </td>
         <td style="vertical-align: top">
             <input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" id="price" name="price[]" type="text">
         </td>
         <td style="vertical-align: top">
             <input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" readonly id="linetotal" name="linetotal[]" type="text">
         </td>
         </tr>
      </tbody>
      <tbody><tr><td colspan="3"></td><td></td><td></td><td></td><td></td><td><input class="form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; font-weight: bold" readonly id="grandtotal" name="grandtotal" type="text"></td></tr></tbody>
   </table>

   <div class="btn-group" style="margin-top: -45px; margin-left: 3px">
      <a class="btn btn-default btn-xs" id="add">Tambah baris</a><button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" style="min-width: 0px"><span class="caret"></span></button>
      <ul class="dropdown-menu">
         <li><a href="javascript:;" id="add5">Tambah baris (5×)</a></li>
         <li><a href="javascript:;" id="add10">Tambah baris (10×)</a></li>
         <li><a href="javascript:;" id="add20">Tambah baris (20×)</a></li>
      </ul>
   </div>
   <div class="form-group"><label>Catatan</label><textarea name="catatan" class="form-control input-sm" style="width: 400px; height: 100px" name="catatan" spellcheck="true"></textarea></div>
    <input type="hidden" name="jenis" value="penerimaan">
    <div class="btn-group"><input id="btnCreate" class="btn btn-primary" style="font-weight: bold" value="Buat" type="button"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><input id="btnCreateAndAddAnother" class="btn btn-link" value="Buat &amp; Tambahkan Baru" type="button"></li>
            </ul>
        </div>
                      </form>

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

    <script>
    function getAkun(sel){
        var ids = $(sel).closest("tr").attr('id');
          if(sel.value == "Pengeluaran Tagihan" || sel.value == "Piutang Dagang" ) {
             $('#pelanggan_'+ids).show();
             $('#akun_'+ids+' .akun').css('width', '200px');
             $('#akun_'+ids+'').attr('colspan', '2');
          } else {
            $('#akun_'+ids+' .akun').css('width', '350px');
            $('#akun_'+ids+'').attr('colspan', '3');
            $('#pelanggan_'+ids).hide();
          }
       }
    </script>

    <script>
    //untuk mengirim data ke database
      $('#btnCreate').click(function(){
           $.ajax({
                url: '<?php echo base_url(); ?>proses/transaksi_bank_penerimaan_save/insert',
                method: 'POST',
                data: $('#add_name').serialize(),
                success:function(data)
                {
                     alert(data);
                     $('#add_name')[0].reset();
                }
           });
      });
    </script>

    <script>
     $(document).ready(function(){
          var counter = 1;

        $("#add").on("click", function () {
            counter++;

            var newRow = $("<tr id='row"+counter+"'>");
            var cols = "";
            cols += '<td></td>';
            cols += '<td id="akun_row'+counter+'" colspan="3" style="text-align: left;"><div class="controls"> <select name="akun[]" data-style="btn-default btn-lg" data-width="350px" class="selectpicker akun" data-size="7" multiple data-max-options="1" data-live-search="true" onchange="getAkun(this)" title="Akun Belum Dipilih" id="status'+counter+'"> <optgroup label="Income"> <option value="Interest Received">Interest Received</option> <option value="Sales">Sales</option> </optgroup> <optgroup label="Expenses"> <option value="Accounting Fees">Accounting Fees</option> <option value="Adversting and Promotion">Adversting and Promotion</option> <option value="Bank Charges">Bank Charges</option> <option value="Computer Equipment">Computer Equipment</option> <option value="Donations">Donations</option> <option value="Electricity">Electricity</option> <option value="Entertainment">Entertainment</option> <option value="Legal Fees">Legal Fees</option> <option value="Motor Vehicle Expenses">Motor Vehicle Expenses</option> <option value="Printing and Stationery">Printing and Stationery</option> <option value="Rent">Rent</option> <option value="Repairs and maintenance">Repairs and maintenance</option> <option value="Telephone">Telephone</option> </optgroup> <optgroup label="Aktiva"> <option value="Pengeluaran Tagihan">Pengeluaran Tagihan</option> <option value="Piutang Dagang">Piutang Dagang</option> </optgroup> <optgroup label="Ekuitas"> <option value="Laba Ditahan">Laba Ditahan</option> </optgroup> </select> </div></td>';
            cols += '<td id="pelanggan_row'+counter+'" style="vertical-align: top;display:none"><div class="controls"><select name="pelanggan" data-style="btn-default btn-lg" class="selectpicker" data-size="7" multiple data-width="150px" data-max-options="1" data-live-search="true" title="Pelanggan" id="pelanggan'+counter+'"><option value="sesuai">Interest Received</option></select></div></td>';
            cols += '<td style="vertical-align: top"><textarea name="deskripsi[]" class="form-control input-sm autosize" style="height: 48px; width: 300px; margin-bottom: 0px; resize: none; overflow: hidden; overflow-wrap: break-word;" id="description'+ counter +'" spellcheck="true"></textarea></td>';
            cols += '<td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 80px; text-align: center; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" name="qty[]" id="qty' + counter + '" type="text"></td>';
            cols += '<td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" name="price[]" id="price' + counter + '" type="text"></td>';
            cols += '<td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" name="linetotal[]" value="0" readonly id="linetotal' + counter + '" type="text"></td>';
            cols += '<td style="padding-left:10px"><button type="button" name="remove" id="delete'+counter+'" class="deleteRow btn btn-danger btn_remove">X</button></td>';
            newRow.append(cols);

            $("table.order-list").append(newRow);
            $('#row'+counter+' select').selectpicker('refresh');
        });

         $("#add5").on("click", function () {
            for(j=0; j<5; j++) {
            counter++;

            var newRow = $("<tr id='row"+counter+"'>");
            var cols = "";
            cols += '<td></td>';
            cols += '<td id="akun_row'+counter+'" colspan="3" style="text-align: left;"><div class="controls"> <select name="akun[]" data-style="btn-default btn-lg" data-width="350px" class="selectpicker akun" data-size="7" multiple data-max-options="1" data-live-search="true" onchange="getAkun(this)" title="Akun Belum Dipilih" id="status'+counter+'"> <optgroup label="Income"> <option value="Interest Received">Interest Received</option> <option value="Sales">Sales</option> </optgroup> <optgroup label="Expenses"> <option value="Accounting Fees">Accounting Fees</option> <option value="Adversting and Promotion">Adversting and Promotion</option> <option value="Bank Charges">Bank Charges</option> <option value="Computer Equipment">Computer Equipment</option> <option value="Donations">Donations</option> <option value="Electricity">Electricity</option> <option value="Entertainment">Entertainment</option> <option value="Legal Fees">Legal Fees</option> <option value="Motor Vehicle Expenses">Motor Vehicle Expenses</option> <option value="Printing and Stationery">Printing and Stationery</option> <option value="Rent">Rent</option> <option value="Repairs and maintenance">Repairs and maintenance</option> <option value="Telephone">Telephone</option> </optgroup> <optgroup label="Aktiva"> <option value="Pengeluaran Tagihan">Pengeluaran Tagihan</option> <option value="Piutang Dagang">Piutang Dagang</option> </optgroup> <optgroup label="Ekuitas"> <option value="Laba Ditahan">Laba Ditahan</option> </optgroup> </select> </div></td>';
            cols += '<td id="pelanggan_row'+counter+'" style="vertical-align: top;display:none"><div class="controls"><select name="pelanggan" data-style="btn-default btn-lg" class="selectpicker" data-size="7" multiple data-width="150px" data-max-options="1" data-live-search="true" title="Pelanggan" id="pelanggan'+counter+'"><option value="sesuai">Interest Received</option></select></div></td>';
            cols += '<td style="vertical-align: top"><textarea name="deskripsi[]" class="form-control input-sm autosize" style="height: 48px; width: 300px; margin-bottom: 0px; resize: none; overflow: hidden; overflow-wrap: break-word;" id="description'+ counter +'" spellcheck="true"></textarea></td>';
            cols += '<td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 80px; text-align: center; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" name="qty[]" id="qty' + counter + '" type="text"></td>';
            cols += '<td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" name="price[]" id="price' + counter + '" type="text"></td>';
            cols += '<td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" name="linetotal[]" value="0" readonly id="linetotal' + counter + '" type="text"></td>';
            cols += '<td style="padding-left:10px"><button type="button" name="remove" id="delete'+counter+'" class="deleteRow btn btn-danger btn_remove">X</button></td>';
            newRow.append(cols);

            $("table.order-list").append(newRow);
            $('#row'+counter+' select').selectpicker('refresh');
            }
        });

         $("#add10").on("click", function () {
            for(j=0; j<10; j++) {
            counter++;

             var newRow = $("<tr id='row"+counter+"'>");
            var cols = "";
            cols += '<td></td>';
            cols += '<td id="akun_row'+counter+'" colspan="3" style="text-align: left;"><div class="controls"> <select name="akun[]" data-style="btn-default btn-lg" data-width="350px" class="selectpicker akun" data-size="7" multiple data-max-options="1" data-live-search="true" onchange="getAkun(this)" title="Akun Belum Dipilih" id="status'+counter+'"> <optgroup label="Income"> <option value="Interest Received">Interest Received</option> <option value="Sales">Sales</option> </optgroup> <optgroup label="Expenses"> <option value="Accounting Fees">Accounting Fees</option> <option value="Adversting and Promotion">Adversting and Promotion</option> <option value="Bank Charges">Bank Charges</option> <option value="Computer Equipment">Computer Equipment</option> <option value="Donations">Donations</option> <option value="Electricity">Electricity</option> <option value="Entertainment">Entertainment</option> <option value="Legal Fees">Legal Fees</option> <option value="Motor Vehicle Expenses">Motor Vehicle Expenses</option> <option value="Printing and Stationery">Printing and Stationery</option> <option value="Rent">Rent</option> <option value="Repairs and maintenance">Repairs and maintenance</option> <option value="Telephone">Telephone</option> </optgroup> <optgroup label="Aktiva"> <option value="Pengeluaran Tagihan">Pengeluaran Tagihan</option> <option value="Piutang Dagang">Piutang Dagang</option> </optgroup> <optgroup label="Ekuitas"> <option value="Laba Ditahan">Laba Ditahan</option> </optgroup> </select> </div></td>';
            cols += '<td id="pelanggan_row'+counter+'" style="vertical-align: top;display:none"><div class="controls"><select name="pelanggan" data-style="btn-default btn-lg" class="selectpicker" data-size="7" multiple data-width="150px" data-max-options="1" data-live-search="true" title="Pelanggan" id="pelanggan'+counter+'"><option value="sesuai">Interest Received</option></select></div></td>';
            cols += '<td style="vertical-align: top"><textarea name="deskripsi[]" class="form-control input-sm autosize" style="height: 48px; width: 300px; margin-bottom: 0px; resize: none; overflow: hidden; overflow-wrap: break-word;" id="description'+ counter +'" spellcheck="true"></textarea></td>';
            cols += '<td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 80px; text-align: center; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" name="qty[]" id="qty' + counter + '" type="text"></td>';
            cols += '<td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" name="price[]" id="price' + counter + '" type="text"></td>';
            cols += '<td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" name="linetotal[]" value="0" readonly id="linetotal' + counter + '" type="text"></td>';
            cols += '<td style="padding-left:10px"><button type="button" name="remove" id="delete'+counter+'" class="deleteRow btn btn-danger btn_remove">X</button></td>';
            newRow.append(cols);

            $("table.order-list").append(newRow);
            $('#row'+counter+' select').selectpicker('refresh');
            }
        });

         $("#add20").on("click", function () {
            for(j=0; j<20; j++) {
            counter++;

            var newRow = $("<tr id='row"+counter+"'>");
            var cols = "";
            cols += '<td></td>';
            cols += '<td id="akun_row'+counter+'" colspan="3" style="text-align: left;"><div class="controls"> <select name="akun[]" data-style="btn-default btn-lg" data-width="350px" class="selectpicker akun" data-size="7" multiple data-max-options="1" data-live-search="true" onchange="getAkun(this)" title="Akun Belum Dipilih" id="status'+counter+'"> <optgroup label="Income"> <option value="Interest Received">Interest Received</option> <option value="Sales">Sales</option> </optgroup> <optgroup label="Expenses"> <option value="Accounting Fees">Accounting Fees</option> <option value="Adversting and Promotion">Adversting and Promotion</option> <option value="Bank Charges">Bank Charges</option> <option value="Computer Equipment">Computer Equipment</option> <option value="Donations">Donations</option> <option value="Electricity">Electricity</option> <option value="Entertainment">Entertainment</option> <option value="Legal Fees">Legal Fees</option> <option value="Motor Vehicle Expenses">Motor Vehicle Expenses</option> <option value="Printing and Stationery">Printing and Stationery</option> <option value="Rent">Rent</option> <option value="Repairs and maintenance">Repairs and maintenance</option> <option value="Telephone">Telephone</option> </optgroup> <optgroup label="Aktiva"> <option value="Pengeluaran Tagihan">Pengeluaran Tagihan</option> <option value="Piutang Dagang">Piutang Dagang</option> </optgroup> <optgroup label="Ekuitas"> <option value="Laba Ditahan">Laba Ditahan</option> </optgroup> </select> </div></td>';
            cols += '<td id="pelanggan_row'+counter+'" style="vertical-align: top;display:none"><div class="controls"><select name="pelanggan" data-style="btn-default btn-lg" class="selectpicker" data-size="7" multiple data-width="150px" data-max-options="1" data-live-search="true" title="Pelanggan" id="pelanggan'+counter+'"><option value="sesuai">Interest Received</option></select></div></td>';
            cols += '<td style="vertical-align: top"><textarea name="deskripsi[]" class="form-control input-sm autosize" style="height: 48px; width: 300px; margin-bottom: 0px; resize: none; overflow: hidden; overflow-wrap: break-word;" id="description'+ counter +'" spellcheck="true"></textarea></td>';
            cols += '<td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 80px; text-align: center; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" name="qty[]" id="qty' + counter + '" type="text"></td>';
            cols += '<td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" name="price[]" id="price' + counter + '" type="text"></td>';
            cols += '<td style="vertical-align: top"><input class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px; height: 48px; padding-bottom: 24px;" name="linetotal[]" value="0" readonly id="linetotal' + counter + '" type="text"></td>';
            cols += '<td style="padding-left:10px"><button type="button" name="remove" id="delete'+counter+'" class="deleteRow btn btn-danger btn_remove">X</button></td>';
            newRow.append(cols);

            $("table.order-list").append(newRow);
            $('#row'+counter+' select').selectpicker('refresh');
            }
        });
     });
 </script>

    <!--script for this page-->
    <script type="text/javascript">
    $("table.order-list").on("change", 'input[id^="price"], input[id^="qty"]', function (event) {
        calculateRow($(this).closest("tr"));
        calculateGrandTotal();
    });

    $("table.order-list").on("click", "button.deleteRow", function (event) {
        $(this).closest("tr").remove();
        calculateGrandTotal();
    });

    function calculateRow(row) {
        var price = +row.find('input[id^="price"]').val();
        var qty = +row.find('input[id^="qty"]').val();
        row.find('input[id^="linetotal"]').val((price * qty).toFixed(2));
    }

    function calculateGrandTotal() {
        var grandTotal = 0;
        $("table.order-list").find('input[id^="linetotal"]').each(function () {
            grandTotal += +$(this).val();
        });
        $("#grandtotal").val(grandTotal.toFixed(2));
    }


    $.fn.datepicker.dates['en'].daysMin = ["S","M","T","W","T","F","S"];$.fn.datepicker.dates['en'].months = ["January","February","March","April","May","June","July","August","September","October","November","December"];$.fn.datepicker.dates['en'].monthsShort = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];$.fn.datepicker.dates['en'].today = "Hari ini";
    </script>
      <script>
      $("#cldr1").datepicker({ todayBtn: 'linked', todayHighlight: true, keyboardNavigation: false, assumeNearbyYear: true, autoclose: true, format: 'dd-mm-yyyy' });
      $("#cldr").datepicker({ todayBtn: 'linked', todayHighlight: true, keyboardNavigation: false, assumeNearbyYear: true, autoclose: true, format: 'dd-mm-yyyy'}).datepicker("setDate", new Date());
      $(function(){
          $('select.styled').customSelect();
      });
      $('#example').DataTable();

      $('#status').change(function(){
      var status = $('#status').val();
      if(status == 'sesuai') {
          $('#sesuai').show();
      } else {
          $('#sesuai').hide();
      }
  });

  </script>
