<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth");
    }

    public function store(Request $request)
    {
        // return request()->all();

        // validasi form
        $validatedData = $request->validate([
            'nik'           => 'required|max:16|unique:users',
            'no_kk'         => 'required|max:16|unique:users',
            'nama_leng'     => 'required',
            'tlp'           => 'required',
            'email'         => 'required|unique:users',
            'password'      => 'required',
        ]);

        // insert datanya dengan cara berikut
        User::create([
            'nik'           => $validatedData['nik'],
            'no_kk'         => $validatedData['no_kk'],
            'nama_leng'     => $validatedData['nama_leng'],
            'tlp'           => $validatedData['tlp'],
            'email'         => $validatedData['email'],
            'password'      => bcrypt($validatedData['password']),
            'level'         => 2,
        ]);

        // jika berhasil arahkan ke halaman categories dan kirimkan juga pesan suksesnya
        return redirect('/')->with('success', 'New category has been added ');
    }

    public function login(Request $request)
    {
        // validasi
        $request->validate(
            [
                'nik'       => 'required',
                'password'  => 'required',
            ],
            [
                'nik.required'      => 'NIK tidak boleh kosong..!',
                'password.required' => 'Password tidak boleh kosong..!'
            ]
        );

        $kredensial = $request->only('nik', 'password');

        if (Auth::attempt($kredensial)) {
            $user = Auth::user();

            if ($user = Auth::user()) {

                $request->session()->regenerate();

                if ($user) {
                    return redirect()->intended('/home');
                }

                return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'nik' => 'NIK atau Password salah.!!',
        ])->onlyInput('nik');
    }
}
