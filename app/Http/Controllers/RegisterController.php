<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function postRegister(RegisterUserRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return redirect('/login');
    }
}
