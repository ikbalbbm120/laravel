<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }
}
