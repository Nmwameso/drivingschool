@extends('admin_template')

@section('content')
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
                <div class="box-header">
                    <h3 class="box-title">ATTACHMENT LETTER</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <td bgcolor="#999999">STUDENT NAME</td>
                            <td bgcolor="#999999">ID NUMBER</td>
                            <td bgcolor="#999999">COURSE NAME</td>
                            <td bgcolor="#999999">ADMISSION NO</td>
                            <td bgcolor="#999999">INTAKE DATE</td>
                            <td bgcolor="#999999">R.LETTER</td>

                        </tr>

                        </thead>

                        <tbody>
                        @if(count($certs) > 0)
                            @foreach($certs  as $certs)
                                <tr>
                                    <td>{{$certs->studentname}}</td>
                                    <td>{{$certs->Id_number}}</td>
                                    <td>{{$certs->coursename }}</td>
                                    <td>{{$certs->admission_no}}</td>
                                    <td>{{$certs->start_date}}</td>
                                    <td><a href="{{url("/attachment/{$certs->student_id}")}}"
                                           onClick="window.open('{{url("/attachment/{$certs->student_id}")}}','popup2','width=900,height=800,scrollbars=yes,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,right=20,top=100, left=120'); return false">View / Print </a></td>


                                </tr>




                                </tr>
                            @endforeach
                        @endif
                        </tbody>


                    </table>
                </div>
                <!-- /.box-body -->

            </div>

        </div>
    </div>
@endsection
@section('scripts')


@endsection
