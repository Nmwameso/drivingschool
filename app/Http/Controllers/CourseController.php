<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CourseController extends Controller
{
    public function course(){
      $course = Course::all();
    	return view ('master.course', ['course' =>$course]);

    }
    public function addCourse(Request $request){
    	$this->validate($request, [
    		'coursename' => 'required',
    		'coursefee' => 'required',

    	]);
    	$course = new Course;
    	$course->coursename =$request->input('coursename');
    	$course->coursefee =$request->input('coursefee');
    	$course->save();
    	return redirect('/course')->with('response', 'Course Added Successfully');


    }
}
