<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(RegisterRequest $request)
    {
        if (User::create($request->validated())) {
            return redirect('/')->with('success', 'Your account has been created.');
        }
        return back()->with('error', 'An error has occurred');
    }
}
