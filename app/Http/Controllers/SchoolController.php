<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SchoolController extends Controller
{
    public function listStudents() {

        // store result
        $student = Student::with( "course" )->get();

    }
}
