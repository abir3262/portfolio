<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'nullable|string|max:255',
                'message' => 'required|string'
            ]);

            Contact::create($validated);

            return redirect()->back()->with('success', 'Message sent successfully! Thank you for contacting me.');
        } catch (\Exception $e) {
            Log::error('Error in ContactController@store: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again.')
                ->withInput();
        }
    }
}
