<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        $datas = $request->validate([
            'username' => 'required|min:4|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $datas['password'] = bcrypt($datas['password']);
        User::create($datas);

        // $request->session()->flash('success', 'Registrasi Berhasil!! Silahkan Login');
        // return redirect('/login');
        $this->$request->session()->flash('success', 'Registrasi Berhasil!! Silahkan Login');
        return redirect('/login');
    }
}