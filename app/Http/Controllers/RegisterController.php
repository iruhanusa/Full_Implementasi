<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'gender' => $validated['gender'],
            'age' => $validated['age'],
            'dob' => $validated['dob'],
            'address' => $validated['address'],
            'role' => $validated['role'],
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
