<?php

namespace App\Http\Controllers;
use App\Examination;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Student;

class ExaminationController extends Controller
{
    public function exam(){
        $exam =DB::select('SELECT * FROM students, courses WHERE  
                  students.course_ID=courses.ID ORDER BY students.id ASC ');

        return view('examination.exams', ['exam' =>$exam])->withData ( $exam );

    }
    public function view($student_id)
    {
        $students = Student::where('students.id', '=', $student_id)
            ->join('courses', 'students.course_ID', '=', 'courses.ID')
            ->get();
        $exams = Examination::where('student_id','=', $student_id)
            ->join('students','student_id','=','id')->get();

        return view('examination.fetch3', ['students' => $students, 'exams'=>$exams]);
    }
    public function addExam(Request $request)
    {
        $this->validate($request, [
            'student_id' => 'required',
            'examdate1' => 'nullable',
            'examdate2' => 'nullable',

        ]);

        $examination = new Examination;
        $examination->student_id = $request->input('student_id');
        $examination->examdate1 = $request->input('examdate1');
        $examination->examdate2 = $request->input('examdate2');
        $examination->save();
        return back()->with('response', 'Data Recorded Successfully');
    }
}
