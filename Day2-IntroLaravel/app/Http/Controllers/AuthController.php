<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function formRegister() {
        return view('register');
    }

    public function welcome(Request $request) {
        $first_name = $request['first-name'];
        $last_name = $request['last-name'];
        return view('welcome', ["first" => $first_name, "last" => $last_name]);
    }
}
