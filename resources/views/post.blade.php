@extends('layout.main')

@section('container')
<article>
<h2>{{ $post->title }}</h2>
<p>by. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->nama }}</a></p>
{!! $post->body !!}
</article>
<a href="/blog" class="d-block mt-3">back to posts</a>
@endsection