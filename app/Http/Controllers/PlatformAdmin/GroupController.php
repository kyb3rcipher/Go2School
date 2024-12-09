<?php

namespace App\Http\Controllers\PlatformAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Carrer;
use App\Models\Subject;
use App\Models\Teacher;

class GroupController extends Controller
{
    public function index() {
        $groups = Group::all();
        $carrers = Carrer::all();
        $subjects = Subject::all();
        $teachers = Teacher::all();

        return view('platform-admin.groups.index', compact('groups', 'carrers', 'subjects', 'teachers'));
    }
}
