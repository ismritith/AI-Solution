@extends('admin.layouts.app')

@section('title', 'AI-Solutions Admin | Overview')

@section('content')
<!-- Row 1: Key Metric Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
    <!-- Metric 1 -->
    <div class="glass-card p-6 rounded-2xl flex flex-col justify-between h-36 overflow-hidden relative">
        <div class="flex justify-between items-start">
            <span class="text-xs font-label-mono text-on-surface-variant uppercase tracking-widest">Total Inquiries</span>
            <span class="material-symbols-outlined text-primary text-xl">forum</span>
        </div>
        <div class="z-10">
            <h3 class="font-display-lg text-4xl text-primary leading-none">{{ $inquiriesCount }}</h3>
            <p class="text-[10px] text-secondary mt-1 flex items-center gap-1 font-medium">
                <span class="material-symbols-outlined text-[12px]">trending_up</span> live inquiries
            </p>
        </div>
    </div>
    <!-- Metric 2 -->
    <div class="glass-card p-6 rounded-2xl flex flex-col justify-between h-36">
        <div class="flex justify-between items-start">
            <span class="text-xs font-label-mono text-on-surface-variant uppercase tracking-widest">Global Events</span>
            <span class="material-symbols-outlined text-secondary text-xl">event_available</span>
        </div>
        <div>
            <h3 class="font-display-lg text-4xl text-on-surface leading-none">{{ $eventsCount }}</h3>
            <p class="text-[10px] text-tertiary mt-1 flex items-center gap-1 font-medium">
                <span class="material-symbols-outlined text-[12px]">calendar_today</span> scheduled events
            </p>
        </div>
    </div>
    <!-- Metric 3 -->
    <div class="glass-card p-6 rounded-2xl flex flex-col justify-between h-36">
        <div class="flex justify-between items-start">
            <span class="text-xs font-label-mono text-on-surface-variant uppercase tracking-widest">Blogs & Insights</span>
            <span class="material-symbols-outlined text-tertiary text-xl">article</span>
        </div>
        <div>
            <h3 class="font-display-lg text-4xl text-on-surface leading-none">{{ $blogsCount }}</h3>
            <p class="text-[10px] text-on-surface-variant mt-1">published insights</p>
        </div>
    </div>
    <!-- Metric 4 -->
    <div class="glass-card p-6 rounded-2xl flex flex-col justify-between h-36">
        <div class="flex justify-between items-start">
            <span class="text-xs font-label-mono text-on-surface-variant uppercase tracking-widest">Active Services</span>
            <span class="material-symbols-outlined text-emerald-400 text-xl">settings_applications</span>
        </div>
        <div>
            <h3 class="font-display-lg text-4xl text-on-surface leading-none">{{ $servicesCount }}</h3>
            <p class="text-[10px] text-emerald-400 mt-1">configured services</p>
        </div>
    </div>
    <!-- Metric 5 -->
    <div class="glass-card p-6 rounded-2xl flex flex-col justify-between h-36">
        <div class="flex justify-between items-start">
            <span class="text-xs font-label-mono text-on-surface-variant uppercase tracking-widest">Deployments</span>
            <span class="material-symbols-outlined text-amber-400 text-xl">folder_special</span>
        </div>
        <div>
            <h3 class="font-display-lg text-4xl text-on-surface leading-none">{{ $projectsCount }}</h3>
            <p class="text-[10px] text-on-surface-variant mt-1">portfolio items</p>
        </div>
    </div>
</div>

<!-- Row 2: Recent Inquiries and Actions -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
    <!-- Recent Inquiries -->
    <div class="lg:col-span-8 glass-card rounded-2xl p-6">
        <h4 class="text-on-surface font-semibold text-lg mb-6">Recent Contact Submissions</h4>
        <div class="space-y-4">
            @forelse($latestInquiries as $inquiry)
                <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 hover:border-white/10 transition-all">
                    <div class="w-12 h-12 rounded-lg bg-surface-container-highest flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-secondary">forum</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-3">
                            <span class="text-sm font-bold text-on-surface">{{ $inquiry->name }} ({{ $inquiry->email }})</span>
                            <span class="text-[10px] px-2.5 py-0.5 rounded-full bg-secondary/10 text-secondary border border-secondary/20 font-semibold uppercase tracking-wider">{{ $inquiry->department }}</span>
                        </div>
                        <p class="text-sm text-on-surface-variant truncate mt-1.5 italic">"{{ $inquiry->message }}"</p>
                    </div>
                    <div class="text-right">
                        <span class="text-[10px] text-on-surface-variant font-label-mono">{{ $inquiry->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            @empty
                <p class="text-sm text-on-surface-variant italic">No inquiry transmissions have been intercepted yet.</p>
            @endforelse
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="lg:col-span-4 flex flex-col gap-4">
        <a href="{{ route('admin.events.create') }}" class="flex-1 glass-card p-5 rounded-2xl group hover:border-primary/50 transition-all text-left relative overflow-hidden">
            <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-primary text-xl">add_box</span>
            </div>
            <h5 class="text-on-surface font-bold text-sm">New Event</h5>
            <p class="text-[11px] text-on-surface-variant mt-1 leading-relaxed">Schedule a new global system demo or summit event.</p>
        </a>
        <a href="{{ route('admin.blogs.create') }}" class="flex-1 glass-card p-5 rounded-2xl group hover:border-secondary/50 transition-all text-left relative overflow-hidden">
            <div class="w-10 h-10 rounded-xl bg-secondary/10 flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-secondary text-xl">post_add</span>
            </div>
            <h5 class="text-on-surface font-bold text-sm">Publish Blog</h5>
            <p class="text-[11px] text-on-surface-variant mt-1 leading-relaxed">Write and release new technical insights.</p>
        </a>
        <a href="{{ route('admin.projects.create') }}" class="flex-1 glass-card p-5 rounded-2xl group hover:border-tertiary/50 transition-all text-left relative overflow-hidden">
            <div class="w-10 h-10 rounded-xl bg-tertiary/10 flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-tertiary text-xl">folder_special</span>
            </div>
            <h5 class="text-on-surface font-bold text-sm">Create Project</h5>
            <p class="text-[11px] text-on-surface-variant mt-1 leading-relaxed">Publish a new portfolio deployment record.</p>
        </a>
    </div>
</div>
@endsection