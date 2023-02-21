<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    // function index ini berfungsi untuk menampilkan halaman index dari folder hello/register/index
    public function  index()
    {
        return view('login.register',[
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    // function store ini berfungsi untuk mengirim data inputan kedalam database
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registrasi berhasil! , silahkan Login');
    }
}
