<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth/login', ['title' => 'TradersUnited | Login']);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    
    public function store(LoginRequest $request)
    {
        // Retrieve the email and password from the request
        $credentials = $request->only('email', 'password');
        
        // Attempt to authenticate the user with the provided credentials
        if (Auth::attempt($credentials)) {
            // If authentication is successful, regenerate the session to prevent session fixation attacks
            $request->session()->regenerate();

            // Return a JSON response indicating success and the intended redirect route
            return response()->json(['success' => true, 'redirect' => RouteServiceProvider::HOME]);
        }

        // If authentication fails, return a JSON response indicating failure
        return response()->json(['success' => false]);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->json(['status' => 0]);
    }
}
