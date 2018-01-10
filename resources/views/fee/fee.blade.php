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
                    <h3 class="box-title">FEES PAYMENT</h3>
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
                            <td bgcolor="#999999">PAYMENT</td>

                        </tr>

                        </thead>

                        <tbody>
                        @if(count($fee) > 0)
                            @foreach($fee  as $fee)
                                <tr>
                                    <td>{{$fee->studentname}}</td>
                                    <td>{{$fee->Id_number}}</td>
                                    <td>{{$fee->phone_no}}</td>
                                    <td>{{$fee->coursename }}</td>
                                    <td>{{$fee->admission_no}}</td>
                                    <td>{{$fee->start_date}}</td>
                                    <td><a href="{{url("/fetch/{$fee->id}")}}" onClick="window.open('{{url("/fetch/{$fee->id}")}}','popup2','width=1100,height=450,scrollbars=yes,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,right=20,top=100, left=120'); return false">PAYMENT</a></td>

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
