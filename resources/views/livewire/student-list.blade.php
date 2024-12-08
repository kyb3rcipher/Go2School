<div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        @foreach ($students as $student)
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ $student->photo ? asset('storage/' . $student->photo) : '/images/icons/profiles/profile-' . rand(1, 4) . '.svg' }}" height="155" class="card-img-top" alt="Student Photo">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->name }} {{ $student->last_name }}</h5>
                    <p class="card-text">
                        Grade: {{ $student->group->grade ?? 'Without grade' }}° <br>
                        Group: {{ $student->group->group ?? 'Without group' }} <br>
                        Carrer: {{ $student->group->carreer ?? 'Without carreer' }} <br>
                    </p>
                    <a class="btn btn-primary" href="{{ route('students.view', ['id' => $student->id]) }}" wire:navigate>View <i class="bi bi-eye h5"></i></a>
                </div>
            </div>
        </div>
        @endforeach 
    </div>

    {{ $students->links(data: ['scrollTo' => false]) }}
</div>