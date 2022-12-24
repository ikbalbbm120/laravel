    @extends('layout.main')
    @section('container')
    
    <h1 class="mb-5">{{ $title }}</h1>
        @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-3">
        <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>

            <p>by. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->nama }}</a></p>

        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">read more..</a>

    </article>
    @endforeach
    @endsection