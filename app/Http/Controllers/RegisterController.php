<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function postRegister(RegisterUserRequest $request)
    {
        $validated = $request->validated();
        dd($validated);
        $user = User::create($validated);
        auth()->login($user);
        event(new Registered($user));
        return redirect()->route('home');
    }
}
