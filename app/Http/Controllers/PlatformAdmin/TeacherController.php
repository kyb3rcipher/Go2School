<?php

namespace App\Http\Controllers\PlatformAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Classroom;

class TeacherController extends Controller
{
    public function index() {
        $teachers = Teacher::all();
        $classrooms = Classroom::all();

        return view('platform-admin.teachers.index', compact('teachers', 'classrooms'));
    }

    public function list() {
        $teachers = Teacher::all();
        return view('platform-admin.teachers.list', compact('teachers'));
    }

    public function create() {
        return view('platform-admin.teachers.create');
    }

    public function store(Request $request) {
        $newTeacher = new Teacher;

        $newTeacher->name = $request->name;
        $newTeacher->last_name = $request->last_name;
        $newTeacher->email = $request->email;
        $newTeacher->password = Hash::make($request->password);
        //$newTeacher->photo = ;
        $newTeacher->address = $request->address;
        $newTeacher->phone = $request->phone;
        $newTeacher->birthday = $request->birthday;
        $newTeacher->gender = $request->gender;
        $newTeacher->save();

        return redirect()->route('teachers.create')->with('success', true);
    }

    public function view($id) {
        $teacher = Teacher::find($id);
        return view('platform-admin.teachers.view', compact('teacher'));
    }
    
    public function edit($id) {
        $teacher = Teacher::find($id);
        return view('platform.teachers.edit', compact('teacher', 'id'));
    }

    public function update(Request $request, $id) {
        $teacher = Teacher::find($id);

        $teacher->name = $request->input('name');
        $teacher->last_name = $request->input('last_name');
        $teacher->email = $request->input('email');
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('teachers/photos', 'public');
            $teacher->photo = $photoPath;    // Register photo path in db
        }
        $teacher->address = $request->input('address');
        $teacher->phone = $request->input('phone');
        $teacher->birthday = $request->input('birthday');
        $teacher->gender = $request->input('gender');

        $teacher->save();

        return redirect('/platform/teachers/');

    }

    public function destroy($id) {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect('/platform/teachers/list/');
    }
}
