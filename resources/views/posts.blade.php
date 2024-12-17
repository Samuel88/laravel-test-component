@push('scripts')
    @vite('resources/js/hello.js')
@endpush

<x-layout>
    <x-slot:title>Posts</x-slot:title>

    @foreach ($posts as $post)
        <x-post :title="$post->title" :description="$post->description" class="post"/>   
    @endforeach
</x-layout>