<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\Feepayment;

class FeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function fee(){
        $fee =DB::select('SELECT * FROM students, courses WHERE  students.course_ID <>\'8\' AND
                  students.course_ID=courses.ID ORDER BY students.id ASC ');

        return view('fee.fee', ['fee' =>$fee])->withData ( $fee );

    }

    public function view($student_id)
    {
        $students = Student::where('students.id', '=', $student_id)
            ->join('courses', 'students.course_ID', '=', 'courses.ID')
            ->get();

        $feepayments = Feepayment::where('student_id','=',$student_id)
        ->join('students','student_id','=','id')->get();
        $courses = Course::all();
        return view('fee.fetch', ['students' => $students, 'course' => $courses, 'feepayments' =>$feepayments]);
    }
    public function addFee(Request $request){
        $this->validate($request, [
            'student_id' => 'required',
            'date_received' => 'required',
            'deposit_paid' => 'required',
            'mode_payment' => 'required',
            'discount' => 'nullable',
            'cheque' => 'nullable',
            'sponsored' => 'required',

        ]);
        $feespayments = new Feepayment;
        $feespayments->student_id =$request->input('student_id' );
        $feespayments->date_received =$request->input('date_received');
        $feespayments->deposit_paid =$request->input('deposit_paid');
        $feespayments->mode_payment =$request->input('mode_payment');
        $feespayments->discount =$request->input('discount');
        $feespayments->cheque =$request->input('cheque');
        $feespayments->sponsored =$request->input('sponsored');
        $feespayments->save();
        return back()->with('response', 'Payment Made Successfully');



    }
    public function fees(){
        $fee =DB::select('SELECT * FROM students, courses WHERE students.course_ID =\'8\' 
                  AND students.course_ID=courses.ID  ORDER BY start_date');

        return view('fee.fee2', ['fee' =>$fee])->withData ( $fee );

    }
    public function balance($student_id)
    {
        $students = Student::where('students.id', '=', $student_id)
        ->join('courses', 'students.course_ID', '=', 'courses.ID')
        ->get();
        $feepayments = Feepayment::where('feepayments.student_id','=',$student_id)
            ->join('students','feepayments.student_id','=','id')
            ->get();

        return view('fee.statement', ['students' => $students,  'feepayments' =>$feepayments]);
    }
    public function statement()
    {
        $fee =DB::select('SELECT * FROM students, courses WHERE 
                  students.course_ID=courses.ID ORDER BY students.id ASC ');

        return view('fee.fee3', ['fee' => $fee])->withData($fee);
    }
    public function recommend(){
        $certs = DB::select('SELECT * FROM (SELECT feepayments.student_id, students.admission_no,students.studentname, 
                             students.Id_number, students.start_date,courses.coursename,courses.coursefee - (SUM(feepayments.deposit_paid)) AS BALANCE FROM feepayments, students, courses
                              WHERE  feepayments.student_id=students.id AND students.course_ID=courses.ID GROUP BY feepayments.student_id) AS x WHERE BALANCE <=0');
        return view('certs.recommendations', ['certs' => $certs])->withData($certs);
    }
    public function certificate($student_id)
    {
        $students = Student::where('students.id', '=', $student_id)
            ->join('courses', 'students.course_ID', '=', 'courses.ID')
            ->get();
        $feepayments = Feepayment::where('feepayments.student_id','=',$student_id)
            ->join('students','feepayments.student_id','=','id')
            ->get();

        return view('certs.recommendation', ['students' => $students,  'feepayments' =>$feepayments]);
    }
    public function attachment(){
        $attachments = DB::select('SELECT * FROM (SELECT feepayments.student_id, students.admission_no,students.studentname, 
                             students.Id_number, students.start_date,courses.coursename,courses.coursefee - (SUM(feepayments.deposit_paid)) AS BALANCE FROM feepayments, students, courses
                              WHERE  feepayments.student_id=students.id AND students.course_ID=courses.ID GROUP BY feepayments.student_id) AS x WHERE BALANCE <=0');
        return view('certs.attachments', ['certs' => $attachments])->withData($attachments);
    }
    public function att($student_id)
    {
        $students = Student::where('students.id', '=', $student_id)
            ->join('courses', 'students.course_ID', '=', 'courses.ID')
            ->get();
        $feepayments = Feepayment::where('feepayments.student_id','=',$student_id)
            ->join('students','feepayments.student_id','=','id')
            ->get();

        return view('certs.attachment', ['students' => $students,  'feepayments' =>$feepayments]);
    }





}

