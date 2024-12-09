<div>
    <table class="table table-responsive">
        <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td><input class="form-check-input" type="radio" name="selectedTeacher" value="{{ $teacher->id }}" id="teacher{{ $teacher->id }}"></td>
                    <td>{{ $teacher->last_name }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $teachers->links(data: ['scrollTo' => false]) }}
</div>
