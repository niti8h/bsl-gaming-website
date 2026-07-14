<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone_number' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        ContactMessage::create($validated);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
