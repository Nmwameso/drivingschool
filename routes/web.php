<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/admin_template', 'HomeController@admin')->name('admin');

Route::get('/course', 'CourseController@course');

Route::post('/addCourse', 'CourseController@addCourse');

Route::get('/student', 'StudentController@student');

Route::post('/addStudent', 'StudentController@addStudent');

Route::get('/letter/{id}', 'StudentController@view');

Route::get('/edit/{id}', 'StudentController@edit');

Route::post('/editStudent/{id}', 'StudentController@editStudent');

Route::get('/fee', 'FeeController@fee');

Route::get('/fetch/{id}', 'FeeController@view');

Route::post('/addFee', 'FeeController@addFee');

Route::get('/fee2', 'FeeController@fees');

Route::get('/file', 'FileController@exam');

Route::get('/fetch2/{id}', 'FileController@view');

Route::post('/addFile', 'FileController@addFile');

Route::get('/exams', 'ExaminationController@exam');

Route::get('/fetch3/{id}', 'ExaminationController@view');

Route::post('/addExam', 'ExaminationController@addExam');

Route::get('/statement/{id}', 'FeeController@balance');

Route::get('/fee3', 'FeeController@statement');

Route::get('/recommendations', 'FeeController@recommend');

Route::get('/recommendation/{id}', 'FeeController@certificate');

Route::get('/attachments', 'FeeController@attachment');

Route::get('/attachment/{id}', 'FeeController@att');