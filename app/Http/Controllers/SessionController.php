<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }
    public function store() {
        //validate input
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(5)]
        ]);

        //attempt to log in
        if(! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'password' => "The credentials don't match"
            ]);
        }

        //regen token
        request()->session()->regenerate();

        //redirect
        return redirect('/');
    }
    public function destroy() {
        Auth::logout();
        return redirect('/');
    }
}
