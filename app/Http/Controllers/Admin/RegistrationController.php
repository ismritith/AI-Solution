<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of all event bookings.
     */
    public function index()
    {
        $registrations = Registration::with('event')->latest()->paginate(15);

        return view('admin.registration.index', compact('registrations'));
    }

    /**
     * Display the specified booking record.
     */
    public function show(Registration $registration)
    {
        $registration->load('event');

        return view('admin.registration.show', compact('registration'));
    }

    /**
     * Remove the specified booking from storage.
     */
    public function destroy(Registration $registration)
    {
        $registration->delete();

        return redirect()
            ->route('admin.registrations.index')
            ->with('success', 'Booking record has been purged successfully.');
    }

    /**
     * Handle public-facing event registration form submission.
     */
    public function publicStore(Request $request)
    {
        $validated = $request->validate([
            'registration_type' => 'required|in:team,individual',
            'team_name' => 'nullable|string|max:255',
            'full_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'event_name' => 'required|string|max:255',
            'event_id' => 'nullable|exists:events,id',
            'team_size' => 'nullable|integer|min:1|max:20',
            'pass_type' => 'nullable|string|max:255',
            'members' => 'nullable|array',
        ]);

        Registration::create($validated);

        return redirect()->route('events')->with('success', 'Your registration has been successfully submitted.');
    }
}
