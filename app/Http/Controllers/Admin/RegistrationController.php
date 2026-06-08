<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::latest()->paginate(10);

        return view('admin.registrations.index', compact('registrations'));
    }

    public function create()
    {
        return view('admin.registrations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'registration_type' => 'required|in:team,individual',
            'team_name' => 'nullable|string|max:255',
            'full_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'event_name' => 'required|string|max:255',
            'team_size' => 'nullable|integer|min:1|max:20',
            'pass_type' => 'nullable|string|max:255',
            'members' => 'nullable|array',
        ]);

        Registration::create($validated);

        return redirect()
            ->route('admin.registrations.index')
            ->with('success', 'Registration created successfully.');
    }

    public function edit(Registration $registration)
    {
        return view('admin.registrations.edit', compact('registration'));
    }

    public function update(Request $request, Registration $registration)
    {
        $validated = $request->validate([
            'registration_type' => 'required|in:team,individual',
            'team_name' => 'nullable|string|max:255',
            'full_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'event_name' => 'required|string|max:255',
            'team_size' => 'nullable|integer|min:1|max:20',
            'pass_type' => 'nullable|string|max:255',
            'members' => 'nullable|array',
        ]);

        $registration->update($validated);

        return redirect()
            ->route('admin.registrations.index')
            ->with('success', 'Registration updated successfully.');
    }

    public function destroy(Registration $registration)
    {
        $registration->delete();

        return redirect()
            ->route('admin.registrations.index')
            ->with('success', 'Registration deleted successfully.');
    }
}