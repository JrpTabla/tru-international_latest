<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Mail\ContactFormReceipt;
use App\Mail\MaintenancePage;
use App\Models\User;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send email notification to your own email address
        Mail::to(config('mail.from.address'))->send(new ContactFormSubmitted($validatedData));

        // Send receipt email to the user
        Mail::to($request->input('email'))->send(new ContactFormReceipt($validatedData)); // Pass $validatedData here

        // Return a response indicating success
        return response()->json(0);
    }

    public function submitFormMaintenancePage(Request $request)
    {

        // Validate the form input
        $validatedData = $request->validate([
            'email' => 'required|email',
            'page_title' => 'required|string',
            'url' => 'required|string'
        ]);

        Mail::to(config('mail.from.address'))->send(new MaintenancePage($validatedData));

        return response()->json(0);
    }
}
