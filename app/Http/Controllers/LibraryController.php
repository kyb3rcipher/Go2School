<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;

class LibraryController extends Controller
{
    public function list()
    {
        $books = Library::all();
        return view('platform.library.list', compact('books'));
    }

    public function create() {
        return view('platform.library.create');
    }
    
    public function store(Request $request) {
        $newBook = new Library;

        $newBook->title = $request->title;
        $newBook->author = $request->author;
        $newBook->resume = $request->resume;
        $newBook->gender = $request->gender;
        $newBook->save();

        return ("hello");
    }

    public function edit($id) {
        return("Hello");
    }

    public function update(Request $request, $id) {
        return("Hello");

    }
}