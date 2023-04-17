<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
public function postlogin(Request $request)
{
$credentials = $request->only('username', 'password');
$user = User::where('username', $credentials['username'])->first();

$role = $user['role'];

if (Auth::attempt($credentials)) {
if ($role == 'admin') {
return redirect('admin')->with('username', $user['username']);
} else if ($role == 'PMasuk') {
return redirect('tampil_input_masuk')->with('username', $user['username']);
} else if ($role == 'PKeluar') {
return redirect('tampil_input_keluar')->with('username', $user['username']);
} else if ($role == 'PRuang') {
return redirect('/inputRuang_kendaraan')->with('username', $user['username']);
}
} else {
// Jika autentikasi gagal
$msg = 'username atau password salah';
return redirect('/')->with('error', $msg);
}



// if (Auth::attempt($credentials)) {
// // Jika autentikasi berhasil

// foreach ($user as $i) {
// if ($i->role == 'Admin') {
// return redirect('/admin'); //-> Hak akses Admin
// } elseif ($i->role == 'Petugas Masuk') {
// return view('petugas.masuk'); //-> Hak akses Pintu masuk
// } elseif ($i->role == 'Petugas Ruang') {
// return view('petugas.ruang'); //-> Hak akses petugas ruang
// } elseif ($i->role == 'Petugas Keluar') {
// return view('petugas.keluar'); //-> Hak akses pintu keluar
// }
// }


// // $request->session()->put('user', $user);
// // return redirect()->intended('/dashboard');
// }

}

public function logout(Request $request)
{
Auth::logout();

$request->session()->invalidate();

$request->session()->regenerateToken();

return redirect('/');
}
}