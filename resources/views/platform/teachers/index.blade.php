@extends('layouts.platform')

@section('title', 'Teachers')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-person-video3 h2"></i> Teachers</h1>

<a href="{{ route('teachers.create') }}">Create</a>
@endsection