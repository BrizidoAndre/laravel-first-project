@props(['active' => false, 'type' => 'a'])
@if($type === 'a')
    <a href="{{$url}}" {{$attributes->merge(['class' => $active ? 'nav-link active' : 'nav-link'])}}>
        {{$slot}}
    </a>
@else
    <button href="{{$url}}" {{$attributes->merge(['class' => $active ? 'nav-link active' : 'nav-link'])}}>
        {{$slot}}
    </button>
@endif

