<?php

namespace App\Http\Controllers\PlatformAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index() {
        $classrooms = Classroom::all();

        return view('platform-admin.classrooms.list', compact('classrooms'));
    }

    public function list() {
        $classrooms = Classroom::all();
        return view('platform-admin.classrooms.list', compact('classrooms'));
    }

    public function destroy($id) {
        $classrooms = Classroom::find($id);
        $classrooms->delete();
        return redirect('/platform/classrooms/list');
    }
}
