<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    public function view()
    {
        return view('auth.register');
    }
}
