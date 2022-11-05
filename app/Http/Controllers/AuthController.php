<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function index(Request $req) {
        if(Auth::check()) {
            return redirect()->route('home');
        }
        return view('login');
    }  

    public function login_action(Request $req) {
        $validator = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($validator)){
            return redirect()->route('home');
        };
    }

    public function register(Request $req) {
        if(Auth::check()) {
            return redirect()->route('home');
        }
        return view('register');
    }

    public function register_action(RegisterRequest $req) {
        $user = User::create([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => Hash::make($req->input('password'))
        ]);

        return redirect(route('login'));
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
