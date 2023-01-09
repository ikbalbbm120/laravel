@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-item-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">post categories{{ auth()->user()->name }}l</h1>
    </div>

    @if(session()->hash('success'))
    <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="table-responsive col-lg-5">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">create new category</a>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">category name</th>
                <th scope="col">action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')"><span data-feather="x-circle"></span></button>
                </form>
            </td>
            </tr>
            @endforeach
            <tr>
            </tbody>
        </table>
        </div>
@endsection