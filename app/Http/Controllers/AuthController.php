<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    // Proses login
public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    $email = strtolower($credentials['email']);
    $password = $credentials['password'];

    $user = User::where('email', $email)->first();

    // Bandingkan password langsung (tanpa hash)
    if ($user && $user->password === $password) {
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

    return back()->withErrors([
        'email' => 'Kredensial yang diberikan tidak cocok dengan catatan kami.',
    ])->onlyInput('email');
}


    // Tampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => strtolower($request->email), // Pastikan email disimpan lowercase
            'password' => $request->password,
            'role' => 'user', //ini status awal default
        ]);

        return redirect('/login');
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

?>
