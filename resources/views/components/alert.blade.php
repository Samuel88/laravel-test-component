@props(['title'])

<div class="alert alert-{{ $type }}">
    <h1 {{ $title->attributes }}>{{ $title }}</h1>
    {{ $slot }}
</div>