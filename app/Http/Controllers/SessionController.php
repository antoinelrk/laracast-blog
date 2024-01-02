<?php

namespace App\Http\Controllers;

use App\Traits\SessionTrait;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function store(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }
        
        session()->regenerate();
        return redirect('/')->with('success', "Welcome home " . Auth::user()->name . " !");
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
