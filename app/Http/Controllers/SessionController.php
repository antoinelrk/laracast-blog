<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function store(LoginRequest $request)
    {
        if ($user = Auth::attempt($credentials)) {
            return redirect('/')->with('success', "Welcome home {$user->name}");
        }

        return back()->with('error', 'An error has ocurred!');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
