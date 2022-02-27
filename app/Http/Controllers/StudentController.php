<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    protected $student;
    protected $students;



    public function index(){

        return view('add-student');
    }

    public function create(Request $request){
//        return $request->all();

        $this->student = new Student();
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();

        return redirect()->back()->with('message', 'New Student Added Successfully');

    }

    public function manage(){

//        return Student::orderBy('id', 'asc')->get();
//        return Student::orderBy('id', 'asc')->first(); // show table's 1st data
//        return Student::orderBy('id', 'desc')->first(); // show table's last data
//        return Student::orderBy('id', 'desc')->take(2)->get(); // show table's last 2 data in desc order
//        return Student::orderBy('id', 'desc')->skip(1)->first(); // show table's last 2nd last data
//        return Student::orderBy('id', 'asc')->skip(1)->first(); // show table's  2nd last data
//        return Student::orderBy('id', 'asc')->skip(1)->take(2)->get(); // First data bade baki data
//        return Student::orderBy('id', 'desc')->skip(1)->take(2)->get(); // Last data bade baki data

        $this->students = Student::orderBy('id', 'asc')->get();

        return view('manage-student', ['student' =>  $this->students]);
    }







}
