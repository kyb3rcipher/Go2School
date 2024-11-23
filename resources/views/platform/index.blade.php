@extends('layouts.platform')

@section('title', 'Platform')

@section('content')
<div class="row">
    <x-card-dashboard-home type="primary" title="Students" icon="person-fill"></x-card-dashboard-home>
    <x-card-dashboard-home type="success" title="Teachers" icon="person-workspace"></x-card-dashboard-home>
    <x-card-dashboard-home type="info" title="Personal" icon="person-standing"></x-card-dashboard-home>
    <x-card-dashboard-home type="danger" title="Personal" icon="user"></x-card-dashboard-home>
</div>
@endsection