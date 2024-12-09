@props([ 'link', 'title', 'icon', 'spa' => true])
@php $spa = filter_var($spa, FILTER_VALIDATE_BOOLEAN); @endphp

<style type="text/css">
.card {
    box-shadow: rgba(0,0,0, 0.25) 0px 2px 4px 0px;
    transition: box-shadow 200ms ease-in-out 0s;
}

.card:hover {
	box-shadow: rgba(0,0,0, 0.2) 0px 4px 5px 0px, rgba(0,0,0, 0.12) 0px 3px 14px 3px, rgba(0,0,0, 0.14) 0px 8px 10px 1px;
}
</style>

<card>
    <a href="{{ $link }}" class="card card-frame h-100 bg-white text-center rounded py-3 px-3 border border-0 link-underline link-underline-opacity-0" @if ($spa) wire:navigate.hover @else target="_blank" @endif>
        <h2><i class="bi bi-{{ $icon }} h1" style="color: #FFA43B;"></i></h2>
        <h3 class="h6 text-dark mb-0 ng-binding">{{ $title }}</h3>
    </a>
</card>