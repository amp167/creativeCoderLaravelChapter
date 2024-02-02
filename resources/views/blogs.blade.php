<x-layout>
    <x-slot name="title">
        <title>Blog</title>
    </x-slot>
    @foreach ($blogs as $blog)
        <div class="card {{ $loop->even ? 'color' : '' }}">
            <h2><a href="blogs/{{$blog->slug}}"><?= $blog->title; ?></a></h2>
            <p>Published at - {{$blog->date}}</p>
            <p>{{$blog->intro}}</p>
        </div>
    @endforeach
</x-layout>

