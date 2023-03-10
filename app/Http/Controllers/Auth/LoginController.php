<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
   public function index()
   {
      return view('auth.login', ['title' => 'Login']);
   }

   public function authenticate(Request $request)
   {
      $credentials = $request->validate([
         'email' => ['required', 'email'],
         'password' => ['required'],
      ], [
         'required' => ':attribute wajib diisi',
         'email' => ':attribute harus valid'
      ], [
         'email' => 'Alamat email',
         'password' => 'Password'
      ]);

      if (Auth::attempt($credentials)) {
         $request->session()->regenerate();

         return redirect()->intended('dashboard');
      }

      return back()->withErrors([
         'auth' => 'Email atau Password Salah!',
      ]);
   }

   public function logout(Request $request)
   {
      Auth::logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect()->route('login');
   }
}
