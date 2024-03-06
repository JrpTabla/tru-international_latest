<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Carbon;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   
        return view('auth/register', ['title' => 'TradersUnited | Registration']);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'date_of_birth' => ['required', 'date'],
            'country' => ['required', 'string'],
            'phone' => ['required', 'string'],
        ]);
    
        // Check if email already exists in the database
        $existingUser = User::where('email', $request->email)->exists();
        if ($existingUser) {
            // Return 0 if email already exists
            echo 1;
            return;
        }

        // Check if email already exists in the database
        $existingPhoneNo = User::where('phone', $request->phone)->exists();
        if ($existingPhoneNo) {
            // Return 0 if email already exists
            echo 2;
            return;
        }
    
        // Create the user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'date_of_birth' => $request->date_of_birth,
            'country' => $request->country,
            'phone' => $request->phone,
            'email_verified' => 0, // default value
            'block_flg' => 0, // default value  
            'delete_flg' => 0, // default value
            'created_user' => 0, // default value
            'updated_user' => 0, // default value
            'created_date' => Carbon::now(), // set the current date and time
            'updated_date' => Carbon::now(), // set the current date and time
        ]);
    
        // Return a JSON response indicating success and the intended redirect route
        // return response()->json(['success' => true, 'alert' => "Registered Successfully!"]);
    
        echo 0;
    }
}
