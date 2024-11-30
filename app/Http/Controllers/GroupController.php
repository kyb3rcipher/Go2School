<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Carrer;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index() {
        $groups = Group::all();
        $carrers = Carrer::all();

        return view('platform.groups.index', compact('groups', 'carrers'));
    }
}
