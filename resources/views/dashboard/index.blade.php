@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-item-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">welcome back.{{ auth()->user()->name }}l</h1>
    </div>
@endsection