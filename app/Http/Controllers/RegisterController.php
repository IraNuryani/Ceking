<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'name' => 'required|max:255',
        'username' => 'required|max:255',
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:5|max:255'
      ]);

    //   $validatedData['password'] = bcrypt($validatedData['password']);
    $validatedData['password'] = Hash::make($validatedData['password']);

      User::create($validatedData);

    //   $request->session()->flash('success', 'Pendaftaran Berhasil! Silakan Login');

      return redirect('/login')->with('success', 'Pendaftaran Berhasil! Silakan Login');
    
    }
}
