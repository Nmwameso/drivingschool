
<!DOCTYPE html>
<html>
<head>
        <link rel="icon" href="img/favicon.png" type="image/x-icon" />
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" /><meta charset="UTF-8">
        <title>..::KENSAFE V1.0 | RECEIPT ::..</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="{{ asset('css22/bootstrap.min.css" rel="stylesheet" type="text/css')}}" />
        <link href="{{ asset('css22/font-awesome.min.css" rel="stylesheet" type="text/css')}}" />
        <!-- Ionicons -->
        <link href="{{ asset('css22/ionicons.min.css" rel="stylesheet" type="text/css')}}" />
        <!-- Theme style -->
        <link href="{{ asset('css22/AdminLTE.css" rel="stylesheet" type="text/css')}}" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
<!--
.navText {color: #000000}
-->
        </style>
<style type="text/css">
.table1 {
    border-collapse:separate;
    border:solid black 1px;
    border-radius:6px;
    -moz-border-radius:6px;
}
.style18 {font-family: "Courier New", Courier, monospace}
.style23 {font-size: 11px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style24 {
	color: #0000FF;
	font-weight: bold;
}
.style25 {font-size: 11px}
.table11 {    border-collapse:separate;
    border:solid black 1px;
    border-radius:6px;
    -moz-border-radius:6px;
}
.table111 {border-collapse:separate;
    border:solid black 1px;
    border-radius:6px;
    -moz-border-radius:6px;
}
.style14 {font-size: 12px}
-->
</style>

</head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
    <div class="wrapper row-offcanvas row-offcanvas-left"><aside class="right-side">
      <p><div class="row no-print">
        <div class="col-xs-12">
          <button class="btn btn-default" onClick="window.print();"><i class="fa fa-print"></i> Print</button>
        </div>
    </div>
      <section class="content invoice">
    <table class="table1" width="100%" border="0" align="center">
          <tr>
            <td><p><span class="style31"><strong>AWANAD ENTERPRISES LTD </strong><br>
                  <strong>P O BOX 2868 , MOMBASA - KENYA</strong></span></p>
              <p><span class="style31"><strong>MBA - NRB ROAD, MIKINDANI - MOMBASA </strong><br>
                    <strong>Mob No. +254 - (020) 2331187/254 </strong></span></p></td>
            <td width="31%" rowspan="2" bgcolor="#FFFFFF"><h3 align="center" class="style9 style24"><u>RECEIPT </u></h3>
            <p align="center" class="style9">&nbsp;</p></td>
            <td width="35%"><h4 align="center"><img src="{{ asset('img/awanad.png" width="144" height="81')}}"></h4></td>
          </tr>
          <tr>
            <td height="18"><p>&nbsp;</p></td>
            <td>&nbsp;</td>
          </tr>
          
    <td width="34%"><div class="page">
    </table>
		<p>&nbsp;</p>
          <table class="table1" width="100%" border="0" align="center">
              @foreach($students  as $students)
              <tr>
                  <td><div align="right" class="style25">
                          <div align="center"><strong>CUSTOMER : </strong></div>
                      </div></td>
                  <td width="20%" rowspan="6" valign="top"><span class="style1 style13 style18 style25">{{$students->studentname}}</span></td>
                  <td>&nbsp;</td>
                  <td><div align="right" class="style13 style25"><strong>INTAKE DATE  : </strong></div></td>
                  <td><span class="style1 style13 style18 style25">{{$students->start_date}}</span></td>
              </tr>
              <tr>
                  <td width="20%"><div align="right" class="style13 style25"><span class="style25"><span class="style25"><span class="style25"><span class="style25"><span class="style25"><span class="style25"></span></span></span></span></span></span></div></td>
                  <td width="20%"><span class="style25"></span></td>
                  <td width="20%"><div align="right" class="style13 style25"><strong>ID NUMBER  : </strong></div></td>
                  <td width="20%"><span class="style1 style13 style18 style25">{{$students->Id_number}}</span></td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td><span class="style25"></span></td>
                  <td><div align="right" class="style13 style25"><strong>PHONE NUMBER  : </strong></div></td>
                  <td><span class="style1 style13 style18 style25">{{$students->phone_no}}</span></td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td><div align="right"><span class="style12"><span class="style12"><span class="style12"><span class="style13"><span class="style25"><span class="style25"><span class="style25"><span class="style25"><span class="style25"><span class="style25"><span class="style25"></span></span></span></span></span></span></span></span></span></span></span></div></td>
                  <td><div align="right" class="style13 style25"><strong>COURSE NAME : </strong></div></td>
                  <td><span class="style1 style13 style18 style25">{{$students->coursename}}</span></td>
              </tr>
                  @endforeach
          </table>
		<p>&nbsp;</p>

		<p>&nbsp;</p>
		<table class="table1" width="100%" border="0" align="center" cellspacing="0" bordercolor="#000000">
          <tr>
            <td valign="top" bgcolor="#CCCCCC" class="sep"><strong>AMOUNT INVOICED </strong></td>
            <td valign="top" bgcolor="#CCCCCC" class="sep">&nbsp;</td>
            <td valign="top" bgcolor="#CCCCCC" class="sep">&nbsp;</td>
            <td valign="top" bgcolor="#CCCCCC" class="sep">&nbsp;</td>
          </tr>
          <tr>
            <td width="45%" valign="top" bgcolor="#CCCCCC" class="sep"><span class="style25"><strong>DATE </strong></span></td>
            <td width="20%" valign="top" bgcolor="#CCCCCC" class="sep"><span class="style25"><strong>MODE OF PAYMENT </strong></span></td>
            <td width="15%" valign="top" bgcolor="#CCCCCC" class="sep"><span class="style25"><strong>PARTICULARS  </strong></span></td>
            <td width="20%" valign="top" bgcolor="#CCCCCC" class="sep"><span class="style25"><strong>AMOUNT (  KSHS)  </strong></span></td>
          </tr>

              <tr>
                <td><span class="style14 style18 style25"></span></td>
                <td><span class="style14 style18 style25"></span></td>
                <td><span class="style14 style18 style25"></span></td>
                <td><div align="right"><span class="style14 style18 style25"></span></div></td>
              </tr>


          <tr>
            <td><span class="style25"></span></td>
            <td><span class="style25"></span></td>
            <td bgcolor="#CCCCCC" class="sort-highlight"><span class="style25"></span></td>
            <td bgcolor="#CCCCCC" class="sort-highlight"><div align="right"><span class="style25"></span></div></td>
          </tr>
          <tr>
            <td><span class="style25"></span></td>
            <td><span class="style25"></span></td>
            <td><div align="right" class="style25">Exclusive VAT <span class="style14 style18"></span> : </div></td>
            <td><div align="right"><span class="style14 style18 style25"></span></div></td>
          </tr>
          <tr>
            <td><span class="style25"></span></td>
            <td><span class="style25"></span></td>
            <td><div align="right" class="style25">VAT 18% <span class="style14 style18"></span> : </div></td>
            <td><div align="right"><span class="style14 style18 style25"></span></div></td>
          </tr>
          <tr>
            <td><span class="style25"></span></td>
            <td><span class="style25"></span></td>
            <td><div align="right" class="style25">TOTAL <span class="style14 style18"></span> : </div></td>
            <td bgcolor="#CC9900"><div align="right"><span class="style14 style18 style25"></span></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="style25"></span></td>
            <td bgcolor="#CCCCCC" class="sort-highlight"><span class="style25"></span></td>
            <td bgcolor="#CCCCCC" class="sort-highlight"><div align="right"><span class="style25"></span></div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table class="table111" width="100%" border="0" align="center">
          <tr>
            <td><div align="right" class="style23">AMOUNT RECEIVED     : </div></td>
            <td><span class="style14 style18"></span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="20%"><div align="right" class="style23">AMOUNT IN WORDS     : </div></td>
            <td width="20%"><span class="style14 style18"></span></td>
            <td width="20%">&nbsp;</td>
            <td width="20%">&nbsp;</td>
            <td width="20%">&nbsp;</td>
          </tr>
        </table>
        <p>&nbsp;</p>

		<table class="table1" width="100%" border="0" align="center">
          <tr>
            <td colspan="4"><div align="center">
              <p align="center">&nbsp;</p>
              </div></td>
          </tr>
          <tr>
            <td width="20%">PREPARED BY  : </td>
            <td width="35%"><strong><span class="style1 style8 style18 style25"></span></strong></td>
            <td width="23%"><div align="right"><strong>PRINTED ON  :</strong></div></td>
            <td width="22%"><span class="style14"><?php echo date('d-m-Y  H:i:s'); ?></span></td>
          </tr>
        </table>
		<p align="center">&nbsp;</p>
		<p align="center"><em><strong>&copy; </strong></em></p>
		<tr>
		  <p align="center">

                    <!-- /.row -->
                    
                    <!-- Table row --></p>
      <!-- /.right-side --><!-- ./wrapper -->
		  <!-- COMPOSE MESSAGE MODAL -->
		  



</body>
</html>
