<?php

namespace App\Http\Controllers;

use App\Models\Subject;
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
}
