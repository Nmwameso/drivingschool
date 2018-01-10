
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KENSAFE V1.0| STATEMENT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    .table1 {
      border-collapse:separate;
      border:solid black 1px;
      border-radius:6px;
      -moz-border-radius:6px;
    }
    </style>
  <style type="text/css">
    .avatar{
      border-radius: 100%;
      max-width: 100px;

    }
    </style>
</head>
<body onLoad="window.print();">
<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="image"><img src="{{ url('img/picture1.png')}}" width="144" height="100" class="avatar" alt=""></h3></i> STUDENT  FEE STATEMENT.
            <small class="pull-right">Date: <?php echo $today = date("F j, Y"); ?></small></h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <hr>
      <div class="row">
        <div class="col-xs-6">
        <table class="table-responsive" width="100%">
          @foreach($students  as $students)
        <tr>
        <th style="width:50%">ADMISSION NO:</th>
        <td style="width:50%">{{$students->admission_no}}</td>
        </tr>
        <tr>
        <th style="width:50%">STUDENT NAME:</th>
        <td style="width:100%">{{$students->studentname}}</td>
        </tr>
        <tr>
        <th style="width:50%">ID NUMBER:</th>
        <td style="width:50%">{{$students->Id_number}}</td>
        </tr>
        <tr>
        <th style="width:50%">PHONE NUMBER:</th>
        <td style="width:50%">{{$students->phone_no}}</td>
        </tr>
        <tr>
        <th style="width:50%"> COURSE NAME:</th>
        <td style="width:50%">{{$students->coursename}}</td>
        </tr>
            @endforeach
   		</table>

        </div>
        <!-- /.col --><!-- /.col --><!-- /.col -->
      </div>

      <!-- /.row -->

      <!-- Table row -->
      <hr>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table1" width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="26%" bgcolor="#CCCCCC"><div align="center"><strong>DATE</strong></div></td>
      <td width="22%" bgcolor="#CCCCCC"><div align="center"><strong>MODE OF PAYMENT</strong></div> </td>
      <td width="19%" bgcolor="#CCCCCC"><div align="center"><strong>PARTICULARS</strong></div></td>
      <td width="33%" height="21" bgcolor="#CCCCCC"><div align="center" class="style47"><strong>AMOUNT (  KSHS)</strong></div></td>
    </tr>

            @foreach($feepayments  as $feepayment)
    <tr>
      <td class="style36"><div align="center" class="style51">
        <div align="justify">{{$feepayment->date_received}}</div>
      </div></td>
      <td class="style36"><div align="center" class="style51">
        <div align="justify">{{$feepayment->mode_payment}}</div>
      </div></td>
      <td class="style36"><strong>FEES</strong></td>
      <td height="30" class="style36"><div align="center" class="style51"><strong>{{ number_format($feepayment->deposit_paid,2)}}</strong></div></td>
    </tr>
            @endforeach


    <tr>
      <td class="style36">&nbsp;</td>
        <td class="style36">&nbsp;</td>
        <td class="style36"><strong>TOTAL</strong></td>
        <td height="30" class="style36"><div align="center" class="style51"><strong>
              {{ number_format($feepayments->sum('deposit_paid'),2)}}
        </strong></div></td>
    </tr>
             

    <tr>
      <td class="style36">&nbsp;</td>
      <td class="style36">&nbsp;</td>
      <td class="style36"><strong>COURSE FEE</strong></td>
      <td height="30" class="style36"><div align="center" class="style51"><strong>
            {{ number_format($students->coursefee,2)}}
      </strong></div></td>
    </tr>
    <tr>
      <td class="style36">&nbsp;</td>
      <td class="style36">&nbsp;</td>
      <td class="style36"><strong>BALANCE</strong></td>
      <td height="30" class="style36"><div align="center" class="style51"><strong>
            {{ number_format( $students->coursefee - $feepayments->sum('deposit_paid'),2)}}
      </strong></div></td>
    </tr>

  </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column --><!-- /.col --><!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">

          
        </div>
      </div>

    </section>
    <!-- /.content -->
    <div class="clearfix"></div>

  </div>
  <!-- /.content-wrapper -->

</body>
</html>

