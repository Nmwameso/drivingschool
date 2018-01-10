@extends('admin_template')

@section('content')
<div class="row">
   <div class="col-xs-12">
    <div class="box box-primary">
      @if(count($errors) > 0)
               @foreach($errors->all() as $error)
                   <div class="alert alert-danger">{{$error}}</div>
               @endforeach
           @endif

           @if(session('response'))
               <div class="alert alert-success">{{session('response')}}</div>
           @endif
      <div class="box-header">
        <h3 class="box-title">
          </h3>
      </div>
      <div class="box-body">
      <form  action="{{ url ('/addCourse')}}" method="POST">
        <div class="form-row">
           <div class="col-md-3">
              {{ csrf_field() }}
              <div class="form-group has-feedback{{ $errors->has('coursename') ? ' has-error' : '' }}">
                <input id="coursename" type="text" class="form-control" name="coursename" value="{{ old('coursename') }}" placeholder="coursename" required autofocus>
                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                @if ($errors->has('coursename'))
                <span class="help-block">{{ $errors->first('coursename') }}</span>
                @endif
              </div>
        </div>
            <div class="col-md-3">
               {{ csrf_field() }}
               <div class="form-group has-feedback{{ $errors->has('coursefee') ? ' has-error' : '' }}">
                 <input id="coursefee" type="text" class="form-control" name="coursefee" value="{{ old('coursefee') }}" placeholder="coursefee" required autofocus>
                 <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                 @if ($errors->has('coursefee'))
                 <span class="help-block">{{ $errors->first('coursefee') }}</span>
                 @endif
               </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <button type="submit" class="btn btn-primary btn-block btn-flat">ADD COURSE</button>
              </div>

          </div>
          </form>
          </div>
        </div>
      </div>
      <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
               </div>
                <!-- /.box-header -->
                <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="40%">COURSE NAME</th>
                    <th width="38%">COURSE FEE</th>

                  </tr>
                </thead>

               <tbody>
                 @if(count($course) > 0)
                   @foreach($course->all() as $course)
                  <tr>
                      <td>{{$course->coursename}}</td>
                      <td>{{$course->coursefee}}</td>

                  </tr>
              @endforeach
            @endif
            </tbody>

          </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>

@endsection
