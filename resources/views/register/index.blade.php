@extends('layout.main')
@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">registration form</h1>
            <form>
            <div class="form-floating">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">
                <label for="nama">nama</label>
            </div>
            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="username">
                <label for="username">username</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
            </form>
            <small class="d-block text-center mt-3">belum di registrasi <a href="/registrasi">registrasi sekarang</a></small>
            </main>
    </div>
</div>

@endsection