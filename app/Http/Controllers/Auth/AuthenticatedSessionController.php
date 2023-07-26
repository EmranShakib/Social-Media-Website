<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        // Perform the login attempt manually
        if (Auth::attempt($credentials)) {
            // If the login attempt was successful, regenerate the session and redirect to the dashboard
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        } else {
            // If the login attempt failed, return a response with some error message
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
       
        return redirect()->route('login.page');
    }
}
