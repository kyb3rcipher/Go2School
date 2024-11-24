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

    public function store(Request $request) {
        $newStudent = new Student();

        $newStudent->name = $request->name;
        $newStudent->last_name = $request->last_name;
        $newStudent->email = $request->email;
        $newStudent->password = $request->password;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('students/photos', 'public');
            $newStudent->photo = $photoPath;    // Register photo path in db
        }
        $newStudent->phone = $request->phone;
        $newStudent->address = $request->address;
        $newStudent->gender = $request->gender;
        $newStudent->birthday = $request->birthday;
        $newStudent->blood_type = $request->blood_type;
        $newStudent->group_id = '1';
        $newStudent->save();
        
        return redirect()->route('students.create');
    }
}
