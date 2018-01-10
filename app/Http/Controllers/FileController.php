<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use App\Student;
use App\Course;
use App\File;

class FileController extends Controller
{
    public function exam(){
        $exam =DB::select('SELECT * FROM students, courses WHERE  
                  students.course_ID=courses.ID ORDER BY students.id ASC ');

        return view('examination.file', ['exam' =>$exam])->withData ( $exam );

    }
    public function view($student_id)
    {
        $students = Student::where('students.id', '=', $student_id)
            ->join('courses', 'students.course_ID', '=', 'courses.ID')
            ->get();
        $filess =File::where('student_id','=',$student_id)
            ->join('students','student_id','=','id')->get();
        return view('examination.fetch2', ['students' => $students,'filess'=>$filess]);
    }
    public function addFile(Request $request)
    {
        $this->validate($request, [
            'student_id' => 'required',
            'pdl_date' => 'required',
            'pdl' => 'required',
            'tdb_date' => 'nullable',
            'tdb' => 'nullable',
        ]);
        $files = new File;
        $files->student_id = $request->input('student_id');
        $files->pdl_date = $request->input('pdl_date');
        $files->tdb_date = $request->input('tdb_date');

        if (Input::hasFile('pdl')) {
            $file = Input::file('pdl');
            $file->move(public_path() . '/files/', $file->getClientOriginalName());
            $url = URL::to("/") . '/files/' . $file->getClientOriginalName();
        }
        if (Input::hasFile('tdb')) {
            $file2 = Input::file('tdb');
            $file2->move(public_path() . '/files/', $file2->getClientOriginalName());
            $url = URL::to("/") . '/files/' . $file2->getClientOriginalName();
        }
        $files->pdl = $url;
        $files->tdb = $url;
        $files->save();
        return back()->with('response', 'Data Recorded Successfully');
    }
}
