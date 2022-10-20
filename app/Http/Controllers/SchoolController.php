<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;

class SchoolController extends Controller
{
    public function listStudents() {

        // store result
        $students = Student::with( "course" )->get();

        foreach( $students as $student ) {
            echo "<pre>";
            print_r($student->name." | ".$student->course->course);
        }

        return view("students", [
            "students" => $students
        ]);

    }

    public function filterStudents() {

        //store filtered result
        // course with Id 3 belongs to which student
        $students = Course::find(2)->student;

        return view("students", [
            "students" => $students
        ]);
    }
}
