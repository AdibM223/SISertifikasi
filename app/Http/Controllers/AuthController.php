<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Hash;
use App\Models\Role;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function dologin(Request $request) {
        // validasi
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();

            if (auth()->user()->role_id === 1) {
                // jika user superadmin
                return redirect()->intended('/admin');
            } else {
                // jika user peserta
                return redirect()->intended('/Peserta/berkas');
            }
        }

        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'email atau password salah');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function registerPesertaIndex(Request $request) {
        return view('peserta.RegistrasiPeserta');
    }

    public function registerAdminIndex(Request $request) {
        return view('superadmin.RegistrasiAdmin');
    }

    public function registerPesertaAction(Request $request) {

        DB::table('users')->insert([
            'name' => $request->name,
            'nis' => $request->nis,
            'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now()

        ]);
        return redirect('/login');
    }

    public function registerAdminAction(Request $request) {
        DB::table('users')->insert([
            'name' => $request->name,
            'nis' => $request->nis,
            'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now()

        ]);
        return redirect('/login');
    }
}
