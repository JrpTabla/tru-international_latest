<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CircleApiController extends Controller
{
    public function getCommunities()
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Token oNc3JUjg3jVtWysNbNEaSYeU'
            ])->get('https://app.circle.so/api/v1/communities/');

            return $response->json();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function registerMember(Request $request)
    {
        try {
            $email = $request->input('email');
            $password = $request->input('password');
            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');

            $response = Http::withHeaders([
                'Authorization' => 'Token oNc3JUjg3jVtWysNbNEaSYeU'
            ])->post('https://app.circle.so/api/v1/community_members', [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => $password,
                'community_id' => 133125,
                'skip_invitation' => true
            ]);

            return $response->json();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

}
