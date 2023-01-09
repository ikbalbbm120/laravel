<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class register extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }
    public function store(request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'username' => ['required','min:5','max:255','unique:users'],
            'email' => 'required|email:dns|unique:user',
            'password' => 'required|min:5|max:255'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'selamat kamu telah di registrasi');

        return redirect('/login');
    }
}
