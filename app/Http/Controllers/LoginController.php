<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Models\User; // Import the User model
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function postLogin(LoginUserRequest $request)
    {
        $credentials = $request->only('email', 'password');
    
        // Debugging information
        $debugInfo = [
            'credentials' => $credentials,
            // Add any other information you want to display
        ];
    
        // Pass the debug information to the view
        return view('your.login.view', compact('debugInfo'));
    }
    
}
