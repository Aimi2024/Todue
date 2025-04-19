<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function view()
    {
        return view('auth.login');
    }

    public function login(UserRequest $request)
    {

        $validatedAccount = $request->validated();

        if (!Auth::attempt($validatedAccount)) {
            return redirect()->back()->withErrors([
                'username' => 'Invalid username or password'
            ]);
        }
    }
}
