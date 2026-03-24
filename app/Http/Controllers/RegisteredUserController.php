<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function show() {
        return view('auth.login');
    }
}
