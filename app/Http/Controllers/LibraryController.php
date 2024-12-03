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

        return redirect()->route('library.list')->with('success', true);
    }

    public function edit($id) {
        $book = Library::find($id);
        return view('platform.library.edit', compact('book', 'id'));
    }

    public function update(Request $request, $id) {
        $book = Library::find($id);

        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->resume = $request->input('resume');
        $book->gender = $request->input('gender');

        $book->save();

        return redirect('/platform/library/list');
    }

    public function destroy($id) {
        $book = Library::find($id);
        $book->delete();
        return redirect('/platform/library/list');
    }
}