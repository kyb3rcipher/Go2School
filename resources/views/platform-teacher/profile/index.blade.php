@extends('layouts.platform-user')

@section('content')
<div class="container mt-3">
    <div class="my-3">
        <div class="text-center p-3">
            <a href="foto" class="position-relative">
                @if (isset($teacher->photo))
                    <img src="{{ asset('storage/' . $teacher->photo) }}" height="128" width="128" class="rounded-circle" alt="Teacher Photo">
                @else
                    <img src="{{ '/images/icons/profiles/profile-' . rand(1, 4) . '.svg'}}" height="128" width="128" class="rounded-circle" alt="Teacher Photo">
                @endif
                <span class="badge bg-primary position-absolute" style="bottom: -55px;right: 10px;"><i class="bi bi-camera h5"></i></span>
            </a>
            <div class="fs-3 fw-bold ng-binding">{{ $teacher->name ?? 'p' }}</div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="list-group">
            <a href="/teacher/profile/edit" class="list-group-item list-group-item-action">
                <span>Update profile</span>
            </a>
        </div>
    </div>
    
    <div class="card mb-3">
        <div class="list-group list-group-flush">
            <div class="list-group-item">
                <i class="bi bi-hash text-danger"></i>
                <span>43848</span>
            </div>

            <div class="list-group-item">
                <i class="bi bi-envelope text-danger"></i>
                <span>{{ $teacher->email }}</span>
            </div>

            <div class="list-group-item">
                <i class="bi bi-fingerprint text-success"></i>
                <span>080227HDGMRSC8</span>
            </div>
            
            <div class="list-group-item">
                <i class="bi bi-person-vcard-fill text-primary"></i>
                <span>293810060381202236</span>
            </div>
        </div>
    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-danger w-100">Log out</button>
    </form>
</div>

<script>
    window.launchSwal = () => {
        Swal.fire({
            title: 'Success!',
            text: 'The teacher has been updated successfully.',
            icon: 'success',
        });
    };
    
    // Launch alert if success store controller return success
    @if (session('success'))
    document.addEventListener('DOMContentLoaded', () => {
        window.launchSwal();
    });
    @endif
</script>
@endsection