@extends('admin_template')

@section('content')

<div class="row">
   <div class="col-xs-12">
    <div class="box">
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
      <form  action="{{ url ('/addStudent') }}" method="POST">
        <div class="form-row">
           <div class="col-md-4">
              {{ csrf_field() }}
              <div class="form-group has-feedback{{ $errors->has('studentname') ? ' has-error' : '' }}">
                <input id="studentname" type="text" class="form-control" name="studentname" value="{{ old('studentname') }}" placeholder="studentname" required autofocus>
                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                @if ($errors->has('studentname'))
                <span class="help-block">{{ $errors->first('studentname') }}</span>
                @endif
              </div>
        </div>
            <div class="col-md-4">
               {{ csrf_field() }}
               <div class="form-group has-feedback{{ $errors->has('Id_number') ? ' has-error' : '' }}">
                 <input id="Id_number" type="text" class="form-control" name="Id_number" value="{{ old('Id_number') }}" placeholder="Id_number" required autofocus>
                 <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                 @if ($errors->has('Id_number'))
                 <span class="help-block">{{ $errors->first('Id_number') }}</span>
                 @endif
               </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
               {{ csrf_field() }}
               <div class="form-group has-feedback{{ $errors->has('phone_no') ? ' has-error' : '' }}">
                 <input id="phone_no" type="text" class="form-control" name="phone_no" value="{{ old('phone_no') }}" placeholder="phone_no" required autofocus>
                 <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                 @if ($errors->has('phone_no'))
                 <span class="help-block">{{ $errors->first('phone_no') }}</span>
                 @endif
               </div>
         </div>
              <div class="col-md-4">
                 {{ csrf_field() }}
                 <div class="form-group has-feedback{{ $errors->has('coursename') ? ' has-error' : '' }}">
                   <select id="course_ID" type="text" class="form-control" name="course_ID">
                     <option value="">SELECT</option>
                     @if(count($course) > 0)
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
            </div>
            <div class="form-row">
               <div class="col-md-4">
                  {{ csrf_field() }}
                  <div class="form-group has-feedback{{ $errors->has('area') ? ' has-error' : '' }}">
                    <input id="area" type="text" class="form-control" name="area" value="{{ old('area') }}" placeholder="area" required autofocus>
                    <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                    @if ($errors->has('area'))
                    <span class="help-block">{{ $errors->first('area') }}</span>
                    @endif
                  </div>
            </div>
                <div class="col-md-4">
                   {{ csrf_field() }}
                   <div class="form-group has-feedback{{ $errors->has('location') ? ' has-error' : '' }}">
                     <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" placeholder="Location" required autofocus>
                     <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                     @if ($errors->has('location'))
                     <span class="help-block">{{ $errors->first('location') }}</span>
                     @endif
                   </div>
                </div>
                <div class="col-md-4">
                   {{ csrf_field() }}
                   <div class="form-group has-feedback{{ $errors->has('start_date') ? ' has-error' : '' }}">
                     <input id="start_date" type="date" class="form-control" name="start_date" value="{{ old('start_date') }}" placeholder="Intake Date" required autofocus>
                     <span class="glyphicon glyphicon-calender form-control-feedback"></span>
                     @if ($errors->has('start_date'))
                     <span class="help-block">{{ $errors->first('start_date') }}</span>
                     @endif
                   </div>
                </div>
                <div class="col-md-4">
                   {{ csrf_field() }}
                   <div class="form-group has-feedback{{ $errors->has('shift') ? ' has-error' : '' }}">
                        <select id="shift" type="text" class="form-control" name="shift"  placeholder="" required autofocus>
                          <option selected="selected">SELECT</option>
                          <option value="AFTERNOON CLASS">AFTERNOON CLASS</option>
                          <option value="MORNING CLASS">MORNING CLASS</option>
                        </select>
                     @if ($errors->has('shift'))
                     <span class="help-block">{{ $errors->first('shift') }}</span>
                     @endif
                     @if ($errors->has('shift'))
                     <span class="help-block">{{ $errors->first('shift') }}</span>
                     @endif
                   </div>
                </div>
                <div class="col-md-4">
                    {{ csrf_field() }}
                    <div class="form-group has-feedback{{ $errors->has('shift') ? ' has-error' : '' }}">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ADD STUDENT</button>

                    </div>
                </div>
              </div>



      </form>
      </div>
    </div>
       <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
               </div>
                <!-- /.box-header -->
                <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped" width="100%">
                  <thead>
                  <tr>
                    <td bgcolor="#999999">STUDENT NAME</td>
                    <td bgcolor="#999999">ID NUMBER</td>
                    <td bgcolor="#999999">PHONE NUMBER</td>
                    <td bgcolor="#999999">COURSE NAME</td>
                    <td bgcolor="#999999">ADMISSION NO</td>
                    <td bgcolor="#999999">INTAKE DATE</td>
                    <td bgcolor="#999999">SHIFT</td>
                    <td bgcolor="#999999">LETTER</td>
                      <td bgcolor="#999999">EDIT</td>


                  </tr>
                </thead>

                <tbody>
                @if(count($student) > 0)
                    @foreach($student  as $student)
                   <tr>
                       <td>{{$student->studentname}}</td>
                       <td>{{$student->Id_number}}</td>
                       <td>{{$student->phone_no}}</td>
                       <td>{{$student->coursename }}</td>
                       <td>{{$student->admission_no}}</td>
                       <td>{{$student->start_date}}</td>
                       <td>{{$student->shift}}</td>
                       <td><a  href='{{url("/letter/{$student->id}")}}' target="_blank">ADM LETTER</a></td>
                       <td><a href="{{url("/edit/{$student->id}")}}" onClick="window.open('{{url("/edit/{$student->id}")}}',
                                   'popup2','width=1100,height=450,scrollbars=yes,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,right=20,top=100, left=120'); return false"> <span class="fa fa-pencil-square-o"> EDIT</span></a></td>






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
</div>


@endsection
