<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUserInfo()
    {
        $user = Auth::user(); // Get the authenticated user
        $firstName = $user->first_name; // Retrieve the first name
        $lastName = $user->last_name; // Retrieve the last name
        $userId = numhash($user->id); // Retrieve the user's ID
        $emailVerifiedAt = $user->email_verified_at; // Retrieve the email verified at
        $country = $user->country;

        return response()->json([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'userId' => $userId,
            'emailVerifiedAt' => $emailVerifiedAt, // or $emailVerifiedAtFormatted if you want to format it
            'country' => $country
        ]);
    }
}