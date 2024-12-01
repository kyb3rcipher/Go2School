<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\SubjectTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index() {
        $subjects = Subject::all();
        return view('platform.subjects.index', compact('subjects'));
    }

    public function create() {
        $teachers = Teacher::all();
        return view('platform.subjects.create', compact('teachers'));
    }

    public function store(Request $request) {
        $newSubject = new Subject;

        $newSubject->name = $request->name;
        $newSubject->prefeer_grade = $request->prefeer_grade;
        $newSubject->save();
        
        $teacherIds = explode(',', $request->teacher_ids);
        foreach ($teacherIds as $teacherId) {
            SubjectTeacher::create([
                'subject_id' => $newSubject->id,
                'teacher_id' => $teacherId,
            ]);
        }

        return redirect()->route('subjects.create')->with('success', true);
    }
}
