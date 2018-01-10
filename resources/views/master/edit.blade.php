

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KENSAFE V1.0| EDIT STUDENT RECORDS</title>
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

                 <form class="form-horizontal" method="POST" action="{{ url('/editStudent', array($students->id)) }}" >
                      <div class="form-row">
                          <div class="col-md-4">
                              {{ csrf_field() }}
                              <div class="form-group has-feedback{{ $errors->has('studentname') ? ' has-error' : '' }}">
                                  <input id="studentname" type="text" class="form-control" name="studentname" value="{{ $students->studentname }}" placeholder="studentname" required autofocus>
                                  <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                                  @if ($errors->has('studentname'))
                                      <span class="help-block">{{ $errors->first('studentname') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="col-md-4">
                              {{ csrf_field() }}
                              <div class="form-group has-feedback{{ $errors->has('Id_number') ? ' has-error' : '' }}">
                                  <input id="Id_number" type="text" class="form-control" name="Id_number" value="{{ $students->Id_number }}" placeholder="Id_number" required autofocus>
                                  <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                                  @if ($errors->has('Id_number'))
                                      <span class="help-block">{{ $errors->first('Id_number') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="col-md-4">
                              {{ csrf_field() }}
                              <div class="form-group has-feedback{{ $errors->has('phone_no') ? ' has-error' : '' }}">
                                  <input id="phone_no" type="text" class="form-control" name="phone_no" value="{{ $students->phone_no }}" placeholder="phone_no" required autofocus>
                                  <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                                  @if ($errors->has('phone_no'))
                                      <span class="help-block">{{ $errors->first('phone_no') }}</span>
                                  @endif
                              </div>
                          </div>
                      </div>
                      <div class="form-row">

                      </div>
                      <div class="form-row">
                          <div class="col-md-4">
                              {{ csrf_field() }}
                              <div class="form-group has-feedback{{ $errors->has('coursename') ? ' has-error' : '' }}">
                                  <select id="course_ID" type="course_ID" class="form-control" name="course_ID" required>
                                      <option value="{{ $course->ID}}">{{ $course->coursename}}</option>
                                      @if(count($courses) > 0)
                                          @foreach($course->all() as $course)
                                              <option value="{{ $course->ID}}">{{$course->coursename}}</option>
                                          @endforeach

                                      @endif
                                  </select>
                                  @if ($errors->has('course_ID'))
                                      <span class="help-block">{{ $errors->first('course_ID') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="col-md-4">
                              {{ csrf_field() }}
                              <div class="form-group has-feedback{{ $errors->has('area') ? ' has-error' : '' }}">
                                  <input id="area" type="text" class="form-control" name="area" value="{{ $students->area }}" placeholder="area" required autofocus>
                                  <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                                  @if ($errors->has('area'))
                                      <span class="help-block">{{ $errors->first('area') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="col-md-4">
                              {{ csrf_field() }}
                              <div class="form-group has-feedback{{ $errors->has('location') ? ' has-error' : '' }}">
                                  <input id="location" type="text" class="form-control" name="location" value="{{ $students->location }}" placeholder="Location" required autofocus>
                                  <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                                  @if ($errors->has('location'))
                                      <span class="help-block">{{ $errors->first('location') }}</span>
                                  @endif
                              </div>
                          </div>
                      </div>
                     <div class="btn pull-right">

                             {{ csrf_field() }}
                             <button type="submit" class="btn btn-primary btn-small">Update Student</button>

                     </div>
     </form>
     </div>
        <!-- /.box-body -->
        </div>
          <!-- /.box -->
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
                   

