<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Traits\SessionTrait;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    use SessionTrait;

    public function store(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if ($this->isValid($credentials)) {
            Auth::attempt($credentials);
            return redirect('/')->with('success', "Welcome home " . Auth::user()->name . " !");
        }

        return back()->with('error', 'Password not match!');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
