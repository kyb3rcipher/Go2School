<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        return view('platform.students.index');
    }

    public function show() {
        $students = Student::with('group')->get();

        return view('platform.students.show', compact('students'));
    }

    public function create() {
        $groups = Group::all();
        
        return view('platform.students.create', compact('groups'));
    }
}
