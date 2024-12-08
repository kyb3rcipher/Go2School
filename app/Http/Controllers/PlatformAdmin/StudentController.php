<?php

namespace App\Http\Controllers\PlatformAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Carrer;
use App\Models\Group;
use App\Models\Classroom;

class StudentController extends Controller
{
    public function index() {
        $carrers = Carrer::all();
        $classrooms = Classroom::all();
        $students = Student::all();
    
        // Total students
        $totalStudents = $students->count();
        $maleStudents = $students->where('gender', 'Man')->count();
        $femaleStudents = $students->where('gender', 'Woman')->count();
    
        return view('platform-admin.students.index', compact('carrers', 'classrooms', 'students', 'totalStudents', 'maleStudents', 'femaleStudents'));
    }

    public function list() {
        $students = Student::with('group')->get();
        
        return view('platform-admin.students.list', compact('students'));
    }

    public function create() {
        $groups = Group::all();
        
        return view('platform-admin.students.create', compact('groups'));
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
        
        return redirect()->route('students.create')->with('success', true);
    }
}
