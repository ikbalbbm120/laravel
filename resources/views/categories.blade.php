    @extends('layout.main')
    @section('container')
        <h1 class="mb-5">post categories</h1>
        @foreach ($categories as $category)
        <ul>
            <li>
                <a href="/categories/{{ $category->slug }}">{{ $category->nama }}</a>
            </li>
        </ul>
        @endforeach
    @endsection
