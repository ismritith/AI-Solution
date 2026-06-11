@extends('admin.layouts.app')

@section('title', 'AI-Solutions Admin | Registration Details')

@section('content')
<div class="glass-card rounded-2xl p-8 max-w-3xl mx-auto space-y-6">
    <div class="flex justify-between items-center pb-4 border-b border-white/10">
        <div>
            <h3 class="text-on-surface font-semibold text-lg">Registration Node Details</h3>
            <p class="text-xs text-on-surface-variant">Specifications for registration node #{{ $registration->id }}</p>
        </div>
        <div class="flex gap-3">
            <a href="{{ route('admin.registrations.edit', $registration) }}" class="py-1.5 px-3 rounded-lg border border-white/10 bg-primary-container/20 hover:bg-primary-container/30 text-xs text-primary font-semibold flex items-center gap-1">
                <span class="material-symbols-outlined text-xs">edit</span> Edit Registration
            </a>
            <a href="{{ route('admin.registrations.index') }}" class="py-1.5 px-3 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 text-xs text-on-surface flex items-center gap-1">
                <span class="material-symbols-outlined text-xs">arrow_back</span> Back to List
            </a>
        </div>
    </div>

    <!-- Metadata Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4">
        <div>
            <span class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-1">Registration Type</span>
            <span class="inline-block px-2.5 py-0.5 rounded-full text-xs uppercase font-semibold {{ $registration->registration_type === 'team' ? 'bg-primary/10 text-primary border border-primary/20' : 'bg-tertiary/10 text-tertiary border border-tertiary/20' }}">
                {{ $registration->registration_type }}
            </span>
        </div>
        <div>
            <span class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-1">Target Event</span>
            <p class="text-sm font-semibold text-on-surface">{{ $registration->event_name }}</p>
        </div>
        @if($registration->registration_type === 'team')
            <div>
                <span class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-1">Team Name</span>
                <p class="text-sm font-semibold text-on-surface">{{ $registration->team_name }}</p>
            </div>
            <div>
                <span class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-1">Team Size</span>
                <p class="text-sm font-semibold text-on-surface">{{ $registration->team_size ?? 'N/A' }}</p>
            </div>
        @else
            <div>
                <span class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-1">Full Name</span>
                <p class="text-sm font-semibold text-on-surface">{{ $registration->full_name }}</p>
            </div>
        @endif
        <div>
            <span class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-1">Contact Email</span>
            <p class="text-sm font-semibold text-primary"><a href="mailto:{{ $registration->email }}" class="hover:underline">{{ $registration->email }}</a></p>
        </div>
        <div>
            <span class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-1">Pass Type</span>
            @if($registration->pass_type)
                <span class="inline-block px-2.5 py-0.5 rounded-full text-xs bg-secondary/10 text-secondary border border-secondary/20 font-semibold">
                    {{ $registration->pass_type }}
                </span>
            @else
                <p class="text-sm text-on-surface-variant">Not specified</p>
            @endif
        </div>
        <div>
            <span class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-1">Registered Timestamp</span>
            <p class="text-sm font-semibold text-on-surface-variant">{{ $registration->created_at->format('Y-m-d H:i:s') }}</p>
        </div>
    </div>

    <!-- Team Members -->
    @if($registration->registration_type === 'team' && $registration->members && is_array($registration->members) && count($registration->members) > 0)
        <div class="pt-4 border-t border-white/10 space-y-4">
            <span class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant">Team Member Roster ({{ count($registration->members) }} registered)</span>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($registration->members as $index => $member)
                    <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/5">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-sm border border-primary/20">
                            {{ $index + 1 }}
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-on-surface">{{ $member['name'] ?? 'Unnamed' }}</p>
                            <p class="text-xs text-on-surface-variant font-label-mono">{{ $member['email'] ?? 'No email' }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <div class="flex justify-end pt-4 border-t border-white/10">
        <form action="{{ route('admin.registrations.destroy', $registration) }}" method="POST" onsubmit="return confirm('Delete this registration permanently?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="py-2.5 px-5 rounded-xl bg-error/20 hover:bg-error/30 text-error font-semibold text-sm transition-colors flex items-center gap-1.5 border border-error/30">
                <span class="material-symbols-outlined text-sm">delete</span> Delete Registration
            </button>
        </form>
    </div>
</div>
@endsection
