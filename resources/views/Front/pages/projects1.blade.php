@extends('Front.layouts.app')

@section('title')
{{ $project->title ?? 'Project Details' }} | AI-Solutions
@endsection

@section('styles')
    <style>
        .accent-glow-purple {
            background: radial-gradient(circle, rgba(165, 16, 180, 0.15) 0%, rgba(8, 3, 19, 0) 70%);
        }
        .accent-glow-cyan {
            background: radial-gradient(circle, rgba(3, 181, 211, 0.1) 0%, rgba(8, 3, 19, 0) 70%);
        }
    </style>
@endsection

@section('content')
@if($project)
    <!-- Hero Section -->
    <section class="max-w-container-max mx-auto px-gutter py-10 relative">
        <div class="relative overflow-hidden rounded-3xl h-[500px] mb-12 border border-white/10 shadow-2xl">
            @if($project->cover_image)
                <img class="w-full h-full object-cover" alt="{{ $project->title }}" src="{{ asset($project->cover_image) }}"/>
            @else
                <div class="w-full h-full bg-gradient-to-br from-primary to-surface-dark flex items-center justify-center">
                    <span class="material-symbols-outlined text-white text-8xl opacity-20">widgets</span>
                </div>
            @endif
            <div class="absolute inset-0 bg-gradient-to-t from-[#080313] via-[#080313]/30 to-transparent"></div>
        </div>
        
        <div class="max-w-3xl space-y-6">
            <span class="inline-block px-4 py-1.5 rounded-full bg-secondary/15 border border-secondary/30 text-secondary font-mono text-xs uppercase font-bold">{{ $project->sector ?? 'Enterprise' }}</span>
            <h1 class="font-display text-4xl md:text-6xl font-extrabold text-white leading-tight">{{ $project->title }}</h1>
            @if($project->project_code)
                <div class="text-sm font-mono text-accent">PROJECT NODE: {{ $project->project_code }}</div>
            @endif
        </div>
    </section>

    <!-- Project Overview & Sidebar -->
    <section class="max-w-container-max mx-auto px-gutter pb-24 grid grid-cols-1 lg:grid-cols-12 gap-12 relative">
        <div class="absolute -left-48 top-0 w-96 h-96 accent-glow-purple -z-10"></div>
        
        <div class="lg:col-span-8 space-y-8">
            <h2 class="font-display text-3xl font-extrabold text-white">Project Overview</h2>
            <div class="space-y-6 text-on-surface-variant leading-relaxed font-body text-base">
                {!! $project->description !!}
            </div>
        </div>
        
        <aside class="lg:col-span-4">
            <div class="glass-card p-8 rounded-2xl sticky top-28 space-y-6">
                <h3 class="font-mono text-xs text-secondary uppercase tracking-widest font-bold">Metadata Specs</h3>
                
                <div class="space-y-4">
                    <div>
                        <span class="text-xs uppercase text-on-surface-variant/50 font-bold block mb-1">Sector / Category</span>
                        <span class="text-white font-display text-lg font-bold">{{ $project->sector }}</span>
                    </div>
                    
                    @if($project->footer_stat)
                        <div class="h-px bg-white/5"></div>
                        <div>
                            <span class="text-xs uppercase text-on-surface-variant/50 font-bold block mb-1">Impact Highlight</span>
                            <span class="text-white font-display text-lg font-bold">{{ $project->footer_stat }}</span>
                        </div>
                    @endif

                    @if($project->rating)
                        <div class="h-px bg-white/5"></div>
                        <div>
                            <span class="text-xs uppercase text-on-surface-variant/50 font-bold block mb-1">Efficacy Rating</span>
                            <div class="flex items-center gap-1.5 text-accent">
                                <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="font-mono font-bold">{{ $project->rating }} / 5.00</span>
                            </div>
                        </div>
                    @endif

                    @if($project->estimated_date)
                        <div class="h-px bg-white/5"></div>
                        <div>
                            <span class="text-xs uppercase text-on-surface-variant/50 font-bold block mb-1">Timeline / Target</span>
                            <span class="text-white font-display text-lg font-bold">{{ $project->estimated_date }}</span>
                        </div>
                    @endif

                    @if($project->tech_stack)
                        <div class="h-px bg-white/5"></div>
                        <div>
                            <span class="text-xs uppercase text-on-surface-variant/50 font-bold block mb-1">Technologies</span>
                            <div class="flex flex-wrap gap-2 mt-2">
                                @foreach(explode(',', $project->tech_stack) as $tech)
                                    <span class="px-3 py-1.5 rounded-xl bg-white/5 border border-white/10 text-xs font-mono text-on-surface-variant">{{ trim($tech) }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </aside>
    </section>

    <!-- Key Results / Metrics -->
    @if($project->metric1_lbl || $project->metric2_lbl || $project->metric3_lbl)
        <section class="max-w-container-max mx-auto px-gutter pb-24">
            <div class="text-center mb-16">
                <span class="font-mono text-xs text-secondary uppercase tracking-[0.2em] font-bold block mb-2">Metrics Observed</span>
                <h2 class="font-display text-3xl md:text-5xl font-extrabold text-white">Performance Efficacy</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @if($project->metric1_lbl)
                    <div class="glass-card p-10 rounded-2xl text-center group hover:border-secondary/40 transition-all">
                        <span class="text-secondary font-display text-5xl font-bold mb-4 block group-hover:scale-105 transition-transform">{{ $project->metric1_val }}</span>
                        <h4 class="font-display text-xl font-bold text-white mb-2">{{ $project->metric1_lbl }}</h4>
                    </div>
                @endif
                
                @if($project->metric2_lbl)
                    <div class="glass-card p-10 rounded-2xl text-center group hover:border-accent/40 transition-all">
                        <span class="text-accent font-display text-5xl font-bold mb-4 block group-hover:scale-105 transition-transform">{{ $project->metric2_val }}</span>
                        <h4 class="font-display text-xl font-bold text-white mb-2">{{ $project->metric2_lbl }}</h4>
                    </div>
                @endif
                
                @if($project->metric3_lbl)
                    <div class="glass-card p-10 rounded-2xl text-center group hover:border-white/20 transition-all">
                        <span class="text-white font-display text-5xl font-bold mb-4 block group-hover:scale-105 transition-transform">{{ $project->metric3_val }}</span>
                        <h4 class="font-display text-xl font-bold text-white mb-2">{{ $project->metric3_lbl }}</h4>
                    </div>
                @endif
            </div>
        </section>
    @endif
@else
    <div class="max-w-4xl mx-auto text-center py-20">
        <h2 class="text-white font-bold text-2xl">Project Record Offline</h2>
        <p class="text-on-surface-variant mt-2">The requested case study could not be located in our active nodes.</p>
    </div>
@endif
@endsection