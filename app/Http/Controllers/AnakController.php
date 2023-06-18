<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Anak extends Controller
{
    public function index()
    {
        return view('anak', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:5|max:255'
      ]);
    }
}
