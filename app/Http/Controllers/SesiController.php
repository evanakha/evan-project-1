<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    //
    function index()
    {
        return view('login');
    }

    //membuat function kolom email dan password tidak boleh kosong
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib di isi',
            'password.required' => 'Password wajib di isi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return redirect('admin');
        } else {
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak sesuai!')->withInput();
        }
    }
}
