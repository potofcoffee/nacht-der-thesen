<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function submit(Request $request)
    {
        $data = $request->validate(['user' => 'required|string']);
        $user = User::where('name', $data['user'])->first();
        if (null !== $user) {
            return view('auth.pin', ['name' => $data['user']]);
        } else {
            return redirect()->route('auth.create', $data['user']);
        }
    }

    public function create(Request $request, $name)
    {
        return view('auth.create', compact('name'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'user' => 'required|string',
                'pin' => 'required|int|between:0,9999',
            ]
        );
        $data['pin'] = str_pad($data['pin'], 4, 0, STR_PAD_LEFT);
        $user = User::create(['name' => $data['user'], 'password' => $data['pin'], 'email' => Hash::make($data['user'])]);
        Auth::login($user);
        return redirect()->intended('home');
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate(
            [
                'user' => 'required|string|exists:users,name',
                'pin' => 'required|int|between:0,9999',
            ]
        );
        $data['pin'] = str_pad($data['pin'], 4, 0, STR_PAD_LEFT);
        $user = User::where('name', $data['user'])->first();
        if ($user->password == $data['pin']) {
            Auth::login($user);
            return redirect()->intended('home');
        } else {
            return redirect('login');
        }
    }
}
