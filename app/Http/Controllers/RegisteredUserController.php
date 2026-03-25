<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    protected $guarded = [];

    public function create() {
        return view('auth.register');
    }

    public function store() {
        //validate
        $attributes = request()->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(5)->symbols(), 'confirmed']
        ]);

        //create registered user
        $user = User::create($attributes);

        //log in
        Auth::login($user);

        //redirect
        return redirect('/');


        dd('to do');
    }
}
