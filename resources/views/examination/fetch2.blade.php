

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KENSAFE V1.0| BOOKING</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('date/jsDatePick_ltr.min.css') }}" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->


<script type="text/javascript">
	window.onload = function(){
		g_globalObject1 = new JsDatePick({
			useMode:2,
			target:"inputField1",
			dateFormat:"%Y-%m-%d"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		
		g_globalObject1 = new JsDatePick({
			useMode:2,
			target:"inputField2",
			dateFormat:"%Y-%m-%d"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		g_globalObject1 = new JsDatePick({
			useMode:2,
			target:"inputField3",
			dateFormat:"%Y-%m-%d"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		
		g_globalObject1 = new JsDatePick({
			useMode:2,
			target:"inputField4",
			dateFormat:"%Y-%m-%d"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		g_globalObject1 = new JsDatePick({
			useMode:2,
			target:"inputField5",
			dateFormat:"%Y-%m-%d"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		g_globalObject1 = new JsDatePick({
			useMode:2,
			target:"inputField6",
			dateFormat:"%Y-%m-%d"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		};
</script>
<style type="text/css">
<!--
.style70 {
	font-family: Sans Pro', sans-serif}
.style71 {font-family: Sans Pro', sans-serif;
	font-size: 12px;
}
.style178 {font-size: 12px}
.style179 {font-size: 10px; }
.style180 {font-family: Sans Pro', sans-serif}
.style71 {font-family: Sans Pro', sans-serif}
.style181 {font-size: 10; }
-->
</style>

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">

<section class="content">
 <div class="row">
        <div class="col-xs-12">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif

            @if(session('response'))
                <div class="alert alert-success">{{session('response')}}</div>
            @endif
        <div class="box">
           <div class="box-header with-border">
           <h3 class="box-title"></h3>
            </div>
             <div class="box-body">

                 <form  action="{{ url ('/addFile') }}" method="POST" enctype="multipart/form-data">
                      <div class="form-row">
                          <div class="col-md-3">
                              {{ csrf_field() }}
                              <div class="form-group has-feedback{{ $errors->has('pdl_date') ? ' has-error' : '' }}">
                                  <input id="pdl_date" type="date" class="form-control" name="pdl_date" value="{{ old('pdl_date') }}" placeholder="PDL Date" required autofocus>
                                  <span class="glyphicon glyphicon-calender form-control-feedback"></span>
                                  @if ($errors->has('pdl_date'))
                                      <span class="help-block">{{ $errors->first('pdl_date') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-3">
                              {{ csrf_field() }}
                              <div class="form-group has-feedback{{ $errors->has('pdl') ? ' has-error' : '' }}">
                                  <input id="pdl" type="file" class="form-control" name="pdl" value="{{ old('pdl') }}" placeholder="PDL FILE" required autofocus>
                                  <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                                  @if ($errors->has('pdl'))
                                      <span class="help-block">{{ $errors->first('pdl') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-3">
                              {{ csrf_field() }}
                              <div class="form-group has-feedback{{ $errors->has('tdb_date') ? ' has-error' : '' }}">
                                  <input id="tdb_date" type="date" class="form-control" name="tdb_date" value="{{ old('tdb_date') }}" placeholder="TDB Date" autofocus>
                                  <span class="glyphicon glyphicon-calender form-control-feedback"></span>
                                  @if ($errors->has('tdb_date'))
                                      <span class="help-block">{{ $errors->first('tdb_date') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-3">
                              {{ csrf_field() }}
                              <div class="form-group has-feedback{{ $errors->has('tdb') ? ' has-error' : '' }}">
                                  <input id="tdb" type="file" class="form-control" name="tdb" value="{{ old('tdb') }}" placeholder="TDB FILE" autofocus>
                                  <span class="glyphicon glyphicon-calender form-control-feedback"></span>
                                  @if ($errors->has('tdb'))
                                      <span class="help-block">{{ $errors->first('tdb') }}</span>
                                  @endif
                              </div>
                          </div>
                      </div>
                      <div class="form-row">
                          @foreach($students->all() as $students)
                              <div class="col-md-3">
                                  {{ csrf_field() }}
                                  <div class="form-group has-feedback{{ $errors->has('student_id') ? ' has-error' : '' }}">
                                      <input id="student_id" type="hidden" class="form-control" name="student_id" value="{{ $students->id}}"   placeholder="Student Name" required autofocus>

                                      @if ($errors->has('student_id'))
                                          <span class="help-block">{{ $errors->first('student_id') }}</span>
                                      @endif
                                  </div>
                              </div>
                          @endforeach

                      </div>

                     <div class="btn pull-right">

                             {{ csrf_field() }}
                             <button type="submit" class="btn btn-primary btn-small">BOOKING</button>

                     </div>
     </form>
     </div>
        <!-- /.box-body -->
        </div>
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
               </div>
                <!-- /.box-header -->
                <div class="box-body">
                                
     <table class="table table-bordered table-striped" width="100%" border="1" cellspacing="0" bordercolor="#000000">
    <tr>
        <td width="13%" bgcolor="#CCCCCC" class="sep"><div align="center"><strong><span class="style1 style8">PDL DATE</span></strong></div></td>
        <td width="15%" bgcolor="#CCCCCC" class="sep"><div align="center"><strong><span class="style1 style8">PDL DOCUMENT</span></strong></div></td>
        <td width="13%" bgcolor="#CCCCCC" class="sep"><div align="center"><strong><span class="style1 style8">TDB DATE</span></strong></div></td>
        <td width="15%" bgcolor="#CCCCCC" class="sep"><div align="center"><strong><span class="style1 style8">TDB DOCUMENT </span></strong></div></td>
      
    </tr>



         @foreach($filess  as $filess)
    <tr>
      <td><div align="center"><span class="style1 style8">{{$filess->pdl_date}}</span></div></td>
      <td><div align="center"><span class="style1 style8"><a href="{{$filess->pdl}}">{{$filess->pdl}}</a></span></div></td>
      <td><div align="center"><span class="style1 style8">{{$filess->tdb_date}}</span></div></td>
      <td><div align="center"><span class="style1 style8"><a href="{{$filess->tdb}}">{{$filess->tdb}}</a></span></div></td>

    </tr>

        @endforeach




     </table>

       </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  
      <!-- /.col -->
      </div>
      <!-- /.row -->
    
    </section>
    <!-- /.content -->
	<script type="text/javascript" src="{{ asset('/date/jsDatePick.min.1.3.js') }}"></script>
    <script src="{{ asset('/date/datepicker.js') }}" language="javascript"></script>
  
  </body>
  </html>
                   

