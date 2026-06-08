@extends('Front.layouts.app')

@section('title', 'Visual Neural Gallery | AI-Solutions')

@section('content')
<!-- Glowing background blur blobs -->
<div class="bg-glow-main top-[10%] left-[10%] opacity-55"></div>
<div class="bg-glow-secondary top-[60%] right-[10%] opacity-40"></div>



<body class="font-body-md text-body-md antialiased selection:bg-primary/30">
    <!-- Atmospheric Background -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <div class="absolute top-[10%] left-[20%] w-[60%] h-[60%] radial-glow-main opacity-50"></div>
        <div class="absolute -bottom-[20%] -right-[10%] w-[70%] h-[70%] radial-glow-main opacity-30"></div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-[0.03]"></div>
    </div>


    <!-- Main Content -->
    <main class="relative z-10 pt-40 pb-24 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        
        <!-- Hero Section -->
        <section class="mb-24">
            <div class="flex flex-col items-center text-center mb-20" data-aos="fade-up">
                <span class="font-label-mono text-[10px] text-primary uppercase tracking-[0.4em] mb-6">Intelligence Unveiled</span>
                <h1 class="font-display-lg text-6xl md:text-8xl text-on-surface mb-8 max-w-5xl leading-[1.1]">
                    <span class="block">Future-Forward</span>
                    <span class="text-gradient">AI Solutions</span>
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant/70 max-w-2xl leading-relaxed">Deep neural exploration, operational security models, and the ongoing structural evolution of AI in modern enterprise environments.</p>
            </div>

            <!-- Featured Project Card -->
            @php
                $featured = $featuredProjects->first();
            @endphp
            @if($featured)
                <div class="glass-card rounded-3xl p-10 md:p-16 flex flex-col md:flex-row gap-16 group relative overflow-hidden" data-aos="fade-up">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 blur-[100px] -z-10"></div>
                    <div class="flex-1 space-y-8">
                        <div class="flex items-center gap-4">
                            <span class="bg-primary/20 text-primary border border-primary/20 px-3 py-1 rounded-full font-label-mono text-[10px] uppercase">Featured Deployment</span>
                            <span class="text-on-surface-variant/40 font-label-mono text-[10px] uppercase">{{ $featured->sector }}</span>
                        </div>
                        <h2 class="font-display-lg text-4xl text-on-surface hover:underline">
                            <a href="/projects1?id={{ $featured->id }}">{{ $featured->title }}</a>
                        </h2>
                        <div class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                            {!! $featured->description !!}
                        </div>
                        
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-8 pt-6">
                            @if($featured->metric1_lbl)
                                <div>
                                    <div class="text-tertiary font-display-lg text-4xl mb-1">{{ $featured->metric1_val }}</div>
                                    <div class="text-on-surface-variant/50 font-label-mono text-[10px] uppercase tracking-widest">{{ $featured->metric1_lbl }}</div>
                                </div>
                            @endif
                            @if($featured->metric2_lbl)
                                <div>
                                    <div class="text-primary font-display-lg text-4xl mb-1">{{ $featured->metric2_val }}</div>
                                    <div class="text-on-surface-variant/50 font-label-mono text-[10px] uppercase tracking-widest">{{ $featured->metric2_lbl }}</div>
                                </div>
                            @endif
                            @if($featured->metric3_lbl)
                                <div>
                                    <div class="text-secondary font-display-lg text-4xl mb-1">{{ $featured->metric3_val }}</div>
                                    <div class="text-on-surface-variant/50 font-label-mono text-[10px] uppercase tracking-widest">{{ $featured->metric3_lbl }}</div>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if($featured->cover_image)
                        <div class="flex-1 relative rounded-2xl overflow-hidden min-h-[350px] border border-white/10 shadow-2xl">
                            <img alt="{{ $featured->title }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" src="{{ asset($featured->cover_image) }}"/>
                        </div>
                    @endif
                </div>
            @endif
        </section>

        <!-- Stats Overview Banner -->
        <section class="glass-card rounded-2xl p-12 mb-32 grid grid-cols-2 lg:grid-cols-4 gap-12 text-center border-white/5" data-aos="fade-up">
            <div>
                <div class="font-display-lg text-4xl text-primary mb-2">500+</div>
                <div class="font-label-mono text-[11px] uppercase tracking-[0.2em] text-on-surface-variant/60">Deployments</div>
            </div>
            <div>
                <div class="font-display-lg text-4xl text-tertiary mb-2">14</div>
                <div class="font-label-mono text-[11px] uppercase tracking-[0.2em] text-on-surface-variant/60">Sectors</div>
            </div>
            <div>
                <div class="font-display-lg text-4xl text-secondary mb-2">99.9%</div>
                <div class="font-label-mono text-[11px] uppercase tracking-[0.2em] text-on-surface-variant/60">Uptime</div>
            </div>
            <div>
                <div class="font-display-lg text-4xl text-on-surface mb-2">$12B+</div>
                <div class="font-label-mono text-[11px] uppercase tracking-[0.2em] text-on-surface-variant/60">Managed Value</div>
            </div>
        </section>

        <!-- Present Deployments Section -->
        <section class="mb-32 relative">
            <div class="flex items-center gap-8 mb-16" data-aos="fade-right">
                <h2 class="font-display-lg text-4xl text-gradient whitespace-nowrap">Present Deployments</h2>
                <div class="h-px bg-white/10 flex-grow"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                @forelse($presentProjects as $project)
                    <div class="glass-card rounded-3xl p-8 flex flex-col group h-full relative z-10 hover:border-primary/30 transition-colors duration-500" data-aos="fade-up">
                        @if($project->cover_image)
                            <div class="rounded-2xl overflow-hidden mb-8 h-72 border border-white/10 relative">
                                <img alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ asset($project->cover_image) }}"/>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-[#1a0b26]/80 backdrop-blur-md px-4 py-1.5 rounded-full font-label-mono text-[10px] text-tertiary border border-tertiary/20 uppercase">{{ $project->sector }}</span>
                                </div>
                            </div>
                        @endif
                        <div class="flex-grow space-y-5">
                            <div class="flex justify-between items-start">
                                <h3 class="font-headline-md text-2xl text-on-surface hover:underline">
                                    <a href="/projects1?id={{ $project->id }}">{{ $project->title }}</a>
                                </h3>
                                @if($project->rating)
                                    <div class="flex items-center text-secondary">
                                        <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="ml-1 font-label-mono text-sm">{{ $project->rating }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="text-on-surface-variant/80 text-body-md leading-relaxed">
                                {!! strip_tags($project->description) !!}
                            </div>
                            @if($project->tech_stack)
                                <div class="flex flex-wrap gap-2 pt-2">
                                    @foreach(explode(',', $project->tech_stack) as $tech)
                                        <span class="font-label-mono text-[10px] bg-white/5 border border-white/5 px-3 py-1.5 rounded-lg text-on-surface-variant">{{ trim($tech) }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="mt-8 pt-8 border-t border-white/10 flex justify-between items-center">
                            <div class="text-primary font-bold text-sm tracking-wide">{{ $project->footer_stat }}</div>
                            <a href="/projects1?id={{ $project->id }}" class="text-on-surface-variant hover:text-white transition-colors flex items-center gap-2 group/btn font-semibold text-sm">
                                View Specs <span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-2 text-center text-on-surface-variant italic py-10">
                        No active present deployments registered yet.
                    </div>
                @endforelse
            </div>
        </section>

        <!-- Legacy Impact Section -->
        <section class="mb-32 relative">
            <div class="flex items-center gap-8 mb-16" data-aos="fade-right">
                <h2 class="font-display-lg text-4xl text-gradient whitespace-nowrap">Legacy Impact</h2>
                <div class="h-px bg-white/10 flex-grow"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($legacyProjects as $project)
                    <div class="glass-card rounded-2xl p-6 flex flex-col group h-full opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-[1.02]" data-aos="fade-up">
                        @if($project->cover_image)
                            <div class="rounded-xl overflow-hidden mb-6 h-52 border border-white/5">
                                <img alt="{{ $project->title }}" class="w-full h-full object-cover" src="{{ asset($project->cover_image) }}"/>
                            </div>
                        @else
                            <div class="rounded-xl overflow-hidden mb-6 h-52 border border-white/10 bg-surface-container/50 flex items-center justify-center text-white">
                                <span class="material-symbols-outlined text-6xl opacity-20">history</span>
                            </div>
                        @endif
                        <div class="flex-grow space-y-3">
                            <h3 class="font-headline-md text-xl text-on-surface hover:underline">
                                <a href="/projects1?id={{ $project->id }}">{{ $project->title }}</a>
                            </h3>
                            <div class="text-on-surface-variant/70 text-sm leading-relaxed line-clamp-3">
                                {!! strip_tags($project->description) !!}
                            </div>
                            <div class="text-tertiary text-sm font-bold pt-2">{{ $project->footer_stat }}</div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center text-on-surface-variant italic py-10">
                        No legacy deployments archived.
                    </div>
                @endforelse
            </div>
        </section>

        <!-- Horizon Initiatives -->
        <section class="mb-32 relative">
            <div class="flex items-center gap-8 mb-16" data-aos="fade-right">
                <h2 class="font-display-lg text-4xl text-gradient whitespace-nowrap">Horizon Initiatives</h2>
                <div class="h-px bg-white/10 flex-grow"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                @forelse($horizonProjects as $project)
                    <div class="glass-card rounded-3xl p-10 border border-primary/20 relative group overflow-hidden" data-aos="fade-up">
                        <div class="absolute -bottom-12 -right-12 w-48 h-48 bg-primary/5 rounded-full blur-3xl group-hover:bg-primary/10 transition-colors"></div>
                        <div class="absolute top-10 right-10">
                            <span class="px-4 py-1.5 rounded-full bg-primary/10 text-primary border border-primary/20 font-label-mono text-[10px] uppercase tracking-widest">{{ $project->status_badge ?? 'Research Phase' }}</span>
                        </div>
                        <div class="flex items-start gap-8">
                            <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center text-primary shrink-0 border border-primary/20">
                                <span class="material-symbols-outlined text-3xl">{{ $project->icon ?? 'memory' }}</span>
                            </div>
                            <div class="space-y-4">
                                <h3 class="font-headline-md text-2xl text-on-surface">{{ $project->title }}</h3>
                                <div class="text-on-surface-variant/80 text-sm leading-relaxed">
                                    {!! $project->description !!}
                                </div>
                                <div class="flex gap-6 pt-2">
                                    <span class="text-primary font-label-mono text-[11px] font-bold">{{ $project->project_code }}</span>
                                    <span class="text-on-surface-variant/40 font-label-mono text-[11px] uppercase">Est. {{ $project->estimated_date }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-2 text-center text-on-surface-variant italic py-10">
                        No future R&D initiatives registered.
                    </div>
                @endforelse
            </div>
        </section>

        <!-- Client Testimonials -->
        @if(count($testimonials) > 0)
            <section class="mb-32">
                <div class="text-center mb-20" data-aos="fade-up">
                    <span class="font-label-mono text-[10px] text-secondary uppercase tracking-[0.4em] mb-4">Client Voices</span>
                    <h2 class="font-display-lg text-5xl text-on-surface">Proven Trust</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($testimonials as $testimonial)
                        <div class="glass-card p-10 rounded-2xl relative" data-aos="fade-up">
                            <div class="text-on-surface text-lg italic mb-8 leading-relaxed">
                                "{!! strip_tags($testimonial->content) !!}"
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full overflow-hidden border border-white/10 shrink-0">
                                    @if($testimonial->client_avatar)
                                        <img src="{{ asset($testimonial->client_avatar) }}" class="w-full h-full object-cover" alt="Client avatar">
                                    @else
                                        <div class="w-full h-full bg-secondary/10 flex items-center justify-center text-secondary">
                                            <span class="material-symbols-outlined">account_circle</span>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <h4 class="font-bold text-white">{{ $testimonial->client_name }}</h4>
                                    <div class="flex flex-wrap items-center gap-2 mt-1">
                                        <span class="text-outline text-xs text-on-surface-variant">{{ $testimonial->client_role }} at {{ $testimonial->client_company }}</span>
                                        <span class="flex items-center gap-1 px-2 py-0.5 rounded-full bg-secondary/10 border border-secondary/30 text-secondary text-[10px] font-label-mono uppercase">Verified</span>
                                    </div>
                                    @if($testimonial->rating)
                                        <div class="flex gap-1 text-secondary mt-1">
                                            @for($i = 0; $i < $testimonial->rating; $i++)
                                                <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                            @endfor
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        <!-- Footer CTA -->
        <section class="relative rounded-[40px] overflow-hidden py-28 text-center bg-[#0d0f1c] border border-white/5">
            <div class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-gradient-to-br from-[#ff71b2]/10 to-[#4cd7f6]/10 opacity-30"></div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary/10 blur-[150px] rounded-full"></div>
            </div>
            <div class="relative z-10 space-y-10 px-8">
                <h2 class="font-display-lg text-5xl md:text-6xl text-white tracking-tight">Ready to Build the <br/>Autonomous Future?</h2>
                <p class="text-on-surface-variant/70 text-xl max-w-2xl mx-auto font-medium font-body-md">Join the cohort of industry leaders redefining their capabilities with our customized neural solutions.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 pt-6">
                    <a href="/contact" class="px-12 py-5 rounded-2xl btn-gradient text-white font-bold text-lg shadow-2xl shadow-primary/30">Start a Project</a>
                    <a href="/services" class="px-12 py-5 rounded-2xl glass-card text-on-surface font-bold text-lg border border-white/10 hover:bg-white/10 transition-all">Ecosystem Map</a>
                </div>
            </div>
        </section>
    </main>

@endsection

    <script>
        // Micro-interactions and glow following effect
        document.addEventListener('mousemove', (e) => {
            const glows = document.querySelectorAll('.radial-glow-main');
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;
            
            glows.forEach((glow, index) => {
                const speed = (index + 1) * 20;
                glow.style.transform = `translate(${(x - 0.5) * speed}px, ${(y - 0.5) * speed}px)`;
            });
        });

        // Button press scaling
        document.querySelectorAll('button, a').forEach(btn => {
            btn.addEventListener('mousedown', () => {
                btn.style.transform = 'scale(0.96)';
            });
            btn.addEventListener('mouseup', () => {
                btn.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>