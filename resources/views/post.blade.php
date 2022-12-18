@extends('layout.main')

@section('container')
<article>
<h2>{{ $post->title }}</h2>
<p>by.ikbal in <a href="/categories/{{ $post->category->slug }}">{{ $post->category_>nama }}</a></p>
{!! $post->body !!}
</article>
<a href="/blog">back to posts</a>
@endsection