<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Course;
use Carbon\Carbon;



class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function student(){
        $student = DB::select('SELECT * FROM students, courses WHERE 
                       (students.course_ID=courses.ID )
                       ORDER BY students.id ASC');
        $course = Course::all();
        return view('master.student', ['student' =>$student, 'course' =>$course]);
    }
    public function addStudent(Request $request){
      $this->validate($request, [
        'studentname' => 'required',
        'Id_number' => 'required',
        'phone_no' => 'required',
        'course_ID' => 'required',
        'area' => 'required',
        'location' => 'required',
        'start_date' => 'required',
        'shift' => 'required',

      ]);

      $student = new Student;
      $dt = Carbon::now();
      $nextId = DB::table('students')->max('id') + 01;
      $admission_no='KTDS'. '/'.$dt->year.'/'.$nextId;
      $student->studentname =$request->input('studentname');
      $student->admission_no =$admission_no;
      $student->Id_number =$request->input('Id_number');
      $student->phone_no =$request->input('phone_no');
      $student->course_ID =$request->input('course_ID');
      $student->area =$request->input('area');
      $student->location =$request->input('location');
      $student->start_date =$request->input('start_date');
      $student->shift =$request->input('shift');
      $student->save();
      return redirect('/student')->with('response', 'Student Registered Successfully');


    }
    public function view($student_id){
        $students = Student::where('students.id', '=', $student_id)
            ->join('courses', 'students.course_ID', '=', 'courses.ID')->get();
        $courses = Course::all();
        return view('master.letter', ['students' =>$students, 'course' => $courses]);

    }
    public function edit($student_id)
    {
        $courses = Course::all();
        $students = Student::find($student_id);
        $course = Course::find($students->course_ID);
        return view('master.edit', ['courses' => $courses, 'students' => $students, 'course' => $course]);
    }
    public function editStudent(Request $request, $student_id){
        $this->validate($request, [
            'studentname' => 'required',
            'Id_number' => 'required',
            'phone_no' => 'required',
            'course_ID' => 'required',
            'area' => 'required',
            'location' => 'required',
        ]);
        $student =new Student;
        $student->studentname =$request->input('studentname');
        $student->Id_number =$request->input('Id_number');
        $student->phone_no =$request->input('phone_no');
        $student->course_ID =$request->input('course_ID');
        $student->area =$request->input('area');
        $student->location =$request->input('location');
        $data = array(
            'studentname' => $student->studentname,
            'Id_number' => $student->Id_number,
            'phone_no' => $student->phone_no,
            'course_ID' => $student->course_ID,
            'area' => $student->area,
            'location' => $student->location
        );
        Student::where('id', $student_id)
            ->update($data);
        $student->update($data);
        return back()->with('response', 'Student Updated Successfully');


    }
}
