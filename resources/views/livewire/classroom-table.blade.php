<div>
    <table class="table table-responsive">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Laboratory</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classrooms as $classroom)
            <tr>
                <td>{{ $classroom->name }}</td>
                <td>{{ $classroom->laboratory ?? "Normal" }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <button wire:click="delete({{ $classroom->id }})" class="btn btn-sm btn-primary"><i class="bi bi-trash2"></i> Delete</button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $classrooms->links(data: ['scrollTo' => false]) }}
</div>