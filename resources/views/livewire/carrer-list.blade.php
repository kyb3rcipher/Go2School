<div>
    <ul class="list-group" style="max-height: 200px; overflow-y: auto;">
        @foreach ($carrers as $carrer)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $carrer->name }}
                <button class="btn btn-danger btn-sm" wire:click="deleteCarrer({{ $carrer->id }})"><i class="bi bi-trash"></i></button>
            </li>
        @endforeach
    </ul>
</div>
