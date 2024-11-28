<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index() {
        return view('platform.teachers.index');
    }

    public function list() {
        $teachers = Teacher::all();
        return view('platform.teachers.list', compact('teachers'));
    }

    public function create() {
        return view('platform.teachers.create');
    }

    public function store(Request $request) {
        $newTeacher = new Teacher;

        $newTeacher->name = $request->name;
        $newTeacher->last_name = $request->last_name;
        $newTeacher->email = $request->email;
        $newTeacher->password = $request->password;
        //$newTeacher->photo = ;
        $newTeacher->address = $request->address;
        $newTeacher->phone = $request->phone;
        $newTeacher->birthday = $request->birthday;
        $newTeacher->gender = $request->gender;
        $newTeacher->save();

        return redirect()->route('teachers.create')->with('success', true);
    }
}
