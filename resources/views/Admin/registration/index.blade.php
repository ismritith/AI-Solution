@extends('admin.layouts.app')

@section('title', 'AI-Solutions Admin | Registrations Management')

@section('content')
<div class="glass-card rounded-2xl p-6">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
        <div>
            <h3 class="text-on-surface font-semibold text-lg">Event Registrations</h3>
            <p class="text-xs text-on-surface-variant">Track team registrations and individual pass claims for active events</p>
        </div>
        <a href="{{ route('admin.registrations.create') }}" class="py-2 px-4 rounded-xl bg-gradient-to-r from-primary-container to-secondary-container text-white font-semibold text-sm hover:shadow-[0_0_20px_rgba(124,58,237,0.4)] transition-all flex items-center gap-2">
            <span class="material-symbols-outlined text-sm">add</span> New Registration
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-white/10 text-xs font-label-mono text-on-surface-variant uppercase tracking-widest">
                    <th class="py-4 px-4">Type</th>
                    <th class="py-4 px-4">Name</th>
                    <th class="py-4 px-4">Email</th>
                    <th class="py-4 px-4">Event</th>
                    <th class="py-4 px-4">Pass Type</th>
                    <th class="py-4 px-4">Members</th>
                    <th class="py-4 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/5 text-sm">
                @forelse($registrations as $registration)
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="py-4 px-4">
                            <span class="px-2.5 py-0.5 rounded-full text-xs uppercase font-semibold {{ $registration->registration_type === 'team' ? 'bg-primary/10 text-primary border border-primary/20' : 'bg-tertiary/10 text-tertiary border border-tertiary/20' }}">
                                {{ $registration->registration_type }}
                            </span>
                        </td>
                        <td class="py-4 px-4 font-semibold text-on-surface">
                            {{ $registration->registration_type === 'team' ? $registration->team_name : $registration->full_name }}
                        </td>
                        <td class="py-4 px-4 text-on-surface-variant">
                            {{ $registration->email }}
                        </td>
                        <td class="py-4 px-4 text-on-surface-variant">
                            {{ $registration->event_name }}
                        </td>
                        <td class="py-4 px-4">
                            @if($registration->pass_type)
                                <span class="px-2.5 py-0.5 rounded-full text-xs bg-secondary/10 text-secondary border border-secondary/20">
                                    {{ $registration->pass_type }}
                                </span>
                            @else
                                <span class="text-on-surface-variant text-xs">--</span>
                            @endif
                        </td>
                        <td class="py-4 px-4 text-xs font-label-mono text-on-surface-variant">
                            @if($registration->registration_type === 'team' && $registration->members)
                                {{ count($registration->members) }} / {{ $registration->team_size ?? '?' }}
                            @else
                                --
                            @endif
                        </td>
                        <td class="py-4 px-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <a href="{{ route('admin.registrations.show', $registration) }}" class="text-primary hover:text-purple-300 font-medium text-xs flex items-center gap-0.5">
                                    <span class="material-symbols-outlined text-sm">visibility</span> View
                                </a>
                                <a href="{{ route('admin.registrations.edit', $registration) }}" class="text-primary hover:text-purple-300 font-medium text-xs flex items-center gap-0.5">
                                    <span class="material-symbols-outlined text-sm">edit</span> Edit
                                </a>
                                <form action="{{ route('admin.registrations.destroy', $registration) }}" method="POST" onsubmit="return confirm('Delete this registration permanently?')" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-error hover:text-red-300 font-medium text-xs flex items-center gap-0.5">
                                        <span class="material-symbols-outlined text-sm">delete</span> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-8 px-4 text-center text-on-surface-variant italic">
                            No event registrations recorded yet.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($registrations->hasPages())
        <div class="mt-6 pt-4 border-t border-white/10">
            {{ $registrations->links() }}
        </div>
    @endif
</div>
@endsection