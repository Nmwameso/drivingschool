@extends('admin_template')

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
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
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <td bgcolor="#999999">STUDENT NAME</td>
                            <td bgcolor="#999999">ID NUMBER</td>
                            <td bgcolor="#999999">PHONE NUMBER</td>
                            <td bgcolor="#999999">COURSE NAME</td>
                            <td bgcolor="#999999">ADMISSION NO</td>
                            <td bgcolor="#999999">INTAKE DATE</td>
                            <td bgcolor="#999999">BOOKING</td>

                        </tr>

                        </thead>

                        <tbody>
                        @if(count($exam) > 0)
                            @foreach($exam  as $exam)
                                <tr>
                                    <td>{{$exam->studentname}}</td>
                                    <td>{{$exam->Id_number}}</td>
                                    <td>{{$exam->phone_no}}</td>
                                    <td>{{$exam->coursename }}</td>
                                    <td>{{$exam->admission_no}}</td>
                                    <td>{{$exam->start_date}}</td>
                                    <td><a href="{{url("/fetch2/{$exam->id}")}}" onClick="window.open('{{url("/fetch2/{$exam->id}")}}','popup2','width=1100,height=450,scrollbars=yes,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,right=20,top=100, left=120'); return false">BOOKING</a></td>
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
    <script src="https://code.jquery.com/jquery-1.12.3.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
            $('#example2').DataTable();
            $('#example3').DataTable();
        } );
    </script>

@endsection
