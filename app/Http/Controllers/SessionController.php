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
        //validate
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(5)->symbols()]
        ]);

        //attempt to log in user
        if(! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => "Sorry, those credentials don't match"
            ]);
        }


        request()->session()->regenerate();
        // regenarate the session token

        return redirect('/');
        //redirect




        dd('to do store session');
    }
    public function destroy() {
        Auth::logout();
        return redirect('/');
    }
}
