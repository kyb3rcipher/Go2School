@extends('layouts.platform')

@section('title', 'List Library')

@section('content')
<div class="d-flex align-items-center mb-3 justify-content-between">
    <h1 class="h3 text-gray-800 mb-0"><i class="bi bi-person-rolodex me-2"></i> List Books</h1>
    <a href="{{ route('library.create') }}" type="button" class="btn btn-primary btn-circle" wire:navigate><i class="bi bi-plus-lg"></i></a>
</div>

<div class="mb-4 p-3 bg-white border shadow-sm">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th scope="col">Tittle</th>
                <th scope="col">Author</th>
                <th scope="col">Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->gender }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="#" role="button" class="btn btn-sm btn-outline-primary" wire:navigate><i class="bi bi-eye"></i> View</a>
                        <a href="{{ route('library.edit', ['id' => $book->id]) }}" role="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-pen"></i> Edit</a>
                        <form action="{{ route('library.destroy', ['id' => $book->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-primary"><i class="bi bi-trash2"></i> Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection