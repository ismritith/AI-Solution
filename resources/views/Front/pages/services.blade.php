@extends('Front.layouts.app')

@section('title', 'Our Services & Capabilities | AI-Solutions')

@section('content')
<!-- Glowing background blur blobs -->
<div class="bg-glow-main top-[10%] left-[-5%] opacity-55"></div>
<div class="bg-glow-secondary top-[60%] right-[-5%] opacity-40"></div>

<!-- Hero Section -->
<section class="relative pt-48 pb-section-gap overflow-hidden">
    <div class="absolute inset-0 grid-pattern pointer-events-none opacity-50"></div>
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[1000px] h-[1000px] hero-glow pointer-events-none"></div>
    <div class="relative z-10 max-w-container-max mx-auto px-gutter text-center" data-aos="fade-up">
        <span class="inline-block px-4 py-1.5 mb-8 rounded-full border border-white/10 bg-[#1a0b25] text-white font-label-mono text-[10px] tracking-widest uppercase">Global Gatherings</span>
        <h1 class="font-display text-5xl md:text-7xl font-extrabold text-white leading-tight">
            Engineering the <span class="text-gradient-purple">Future of Intelligence.</span>
        </h1>
        
        <p class="font-body-base text-lg text-on-surface-variant max-w-2xl mx-auto mb-12">
            Connect with our core engineering architects, platform partners, and other developer pioneers at our upcoming workshops, hackathons, and global summits.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="px-8 py-4 btn-gradient text-white rounded-xl font-bold shadow-xl hover:brightness-110 transition-all">Explore Deployment</button>
            <button class="px-8 py-4 glass-card rounded-xl font-bold text-white border border-white/10 hover:bg-white/5">Technical Specs</button>
        </div>
    </div>
</section>

<!-- Core Services Bento Grid -->
<section class="max-w-container-max mx-auto px-gutter py-section-gap">
    <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
        <div class="max-w-xl" data-aos="fade-right">
            <h2 class="font-headline-md text-4xl mb-4 font-bold text-white">Core AI Infrastructure</h2>
            <p class="text-on-surface-variant">Our modular ecosystem provides the foundational tools required to deploy state-of-the-art artificial intelligence across your entire value chain.</p>
        </div>
        <div class="font-label-mono text-xs text-on-surface-variant flex items-center gap-3" data-aos="fade-left">
            <span class="w-12 h-[1px] bg-white/20"></span>
            SERVICE PORTFOLIO
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        @forelse($infrastructureServices as $index => $service)
            @php
                $isWide = ($index === 0 || $index === 5);
                $colSpan = $isWide ? 'md:col-span-8' : 'md:col-span-4';
            @endphp
            <div class="{{ $colSpan }} glass-card p-10 rounded-3xl group relative overflow-hidden flex flex-col justify-between" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                <div>
                    <div class="w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center mb-8 border border-white/10 group-hover:border-primary/30 transition-all text-white">
                        <span class="material-symbols-outlined text-3xl">{{ $service->icon ?? 'neurology' }}</span>
                    </div>
                    <h3 class="{{ $isWide ? 'font-headline-md text-3xl' : 'text-xl' }} mb-4 font-bold text-white">{{ $service->title }}</h3>
                    <div class="text-on-surface-variant mb-10 text-sm leading-relaxed">
                        {!! $service->description !!}
                    </div>
                </div>
                <div class="flex flex-wrap gap-4 items-center">
                    @if($service->tags)
                        @foreach(explode(',', $service->tags) as $tag)
                            <span class="px-4 py-1.5 bg-white/5 rounded-full border border-white/10 font-label-mono text-[10px] text-white">{{ trim($tag) }}</span>
                        @endforeach
                    @endif
                    @if($service->metric_subtitle)
                        <span class="ml-auto text-white/80 font-bold text-xs font-label-mono">{{ $service->metric_subtitle }}</span>
                    @endif
                </div>
            </div>
        @empty
            <div class="md:col-span-12 glass-card p-10 text-center text-on-surface-variant italic">
                No core infrastructure services registered yet.
            </div>
        @endforelse
    </div>
</section>

<!-- Industry Solutions -->
<section class="bg-surface py-section-gap relative">
    <div class="max-w-container-max mx-auto px-gutter relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="font-headline-md text-4xl font-bold mb-6 text-white">Industry Verticals</h2>
            <p class="text-on-surface-variant max-w-2xl mx-auto text-lg">We don't believe in one-size-fits-all. Our models are specialized for the unique regulatory and operational needs of key sectors.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
            @forelse($verticalServices as $service)
                <div class="group p-8 glass-card rounded-2xl text-center" data-aos="zoom-in">
                    <div class="w-16 h-16 mx-auto bg-white/5 rounded-full flex items-center justify-center mb-6 border border-white/5 group-hover:border-primary/50 transition-all text-white">
                        <span class="material-symbols-outlined text-4xl group-hover:text-primary transition-colors">{{ $service->icon ?? 'business' }}</span>
                    </div>
                    <h4 class="font-bold text-base text-white mb-2">{{ $service->title }}</h4>
                    <p class="text-xs text-on-surface-variant line-clamp-2">{!! strip_tags($service->description) !!}</p>
                </div>
            @empty
                <div class="col-span-5 text-center text-on-surface-variant text-sm italic">
                    Industry modules will be listed soon.
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Our Process -->
<section class="py-section-gap max-w-container-max mx-auto px-gutter">
    <div class="mb-24" data-aos="fade-right">
        <h2 class="font-headline-md text-4xl font-bold mb-6 text-white">The Development Lifecycle</h2>
        <p class="text-on-surface-variant max-w-xl text-lg">From initial concept to continuous optimization, our 4-stage process ensures transparency and technical excellence.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 relative">
        <div class="hidden md:block absolute top-12 left-0 w-full h-[1px] bg-gradient-to-r from-white/0 via-white/10 to-white/0"></div>
        
        @forelse($stepServices as $service)
            <div class="relative group" data-aos="fade-up">
                <div class="w-24 h-24 rounded-full bg-[#0e0816] border border-white/10 flex items-center justify-center mb-10 relative z-10 group-hover:scale-105 transition-transform group-hover:border-primary/50">
                    <span class="text-white font-bold text-2xl">0{{ $service->step_number }}</span>
                </div>
                <h3 class="font-headline-md text-2xl mb-4 font-bold text-white">{{ $service->title }}</h3>
                <div class="text-on-surface-variant text-sm pr-6 leading-relaxed">
                    {!! $service->description !!}
                </div>
            </div>
        @empty
            <div class="col-span-4 text-center text-on-surface-variant italic text-sm">
                Development step registry is empty.
            </div>
        @endforelse
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-section-gap bg-[#08050c] overflow-hidden">
    <div class="max-w-container-max mx-auto px-gutter flex flex-col md:flex-row items-center gap-24">
        <div class="flex-1" data-aos="fade-right">
            <h2 class="font-headline-md text-4xl md:text-5xl font-bold mb-10 text-white">Why Enterprise Leaders Trust <span class="text-gradient">AI-Solutions</span></h2>
            <div class="space-y-10">
                <div class="flex gap-6">
                    <div class="w-12 h-12 flex-shrink-0 bg-white/5 rounded-xl border border-white/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-secondary">bolt</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-xl mb-2 text-white">Unmatched Innovation</h4>
                        <p class="text-on-surface-variant text-base leading-relaxed">We don't just use AI; we engineer proprietary models that push the boundaries of what's possible.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-12 h-12 flex-shrink-0 bg-white/5 rounded-xl border border-white/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">layers</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-xl mb-2 text-white">Global Scalability</h4>
                        <p class="text-on-surface-variant text-base leading-relaxed">Deploy once, scale everywhere. Our infrastructure handles millions of requests with sub-ms latency.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-12 h-12 flex-shrink-0 bg-white/5 rounded-xl border border-white/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-secondary">enhanced_encryption</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-xl mb-2 text-white">Military-Grade Security</h4>
                        <p class="text-on-surface-variant text-base leading-relaxed">Encryption at rest and in transit. Private cloud deployments ensure your data never leaves your control.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 relative" data-aos="fade-left">
            <div class="relative z-10 rounded-[2.5rem] overflow-hidden glass-card p-5 border border-white/5">
                <img alt="AI Interface" class="w-full h-[550px] object-cover rounded-[2rem]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUVtY14NRMQ1IsUYO14hmDi6kR1yl2scitF2Qkm68MOzk7sd7iSenj95bJnMvBzFy1U5r4uJqNOo_A5rtM_OUiQc32EwcYDW07b--CDYCiTvfjlWTRq2-FDWIhBf76c7KteYzTcHS_TlsNM2JToYN_grEKlIK1w_SZlDsxYgbi8IFOtWSTT8-nTajCilpBiR6LicfA8XEJYCj2OgeEJ1eJn9Y34LpzN07MO6ih7o-jZl-8YVJl-b7XTYwpz-ntAmFyzNJ6d7_UW1LG"/>
                <div class="absolute inset-0 bg-gradient-to-t from-[#050308]/90 via-transparent to-transparent"></div>
                <div class="absolute bottom-12 left-12 right-12">
                    <div class="glass-card p-8 rounded-3xl border border-white/10 backdrop-blur-2xl">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="flex -space-x-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center border-2 border-[#050308] text-white text-xs font-bold">A</div>
                                <div class="w-10 h-10 rounded-full bg-[#7c3aed] flex items-center justify-center border-2 border-[#050308] text-white text-xs font-bold">B</div>
                                <div class="w-10 h-10 rounded-full bg-[#d81b60] flex items-center justify-center border-2 border-[#050308] text-white text-xs font-bold">C</div>
                            </div>
                            <span class="text-xs font-label-mono text-white tracking-widest uppercase">Trusted by 500+ Firms</span>
                        </div>
                        <p class="text-base italic text-white/80 leading-relaxed">"The transition to AI-Solutions' predictive engine reduced our operational overhead by 22% in the first quarter."</p>
                    </div>
                </div>
            </div>
            <!-- Floating glows -->
            <div class="absolute -top-12 -right-12 w-64 h-64 bg-primary/10 blur-[100px] rounded-full"></div>
            <div class="absolute -bottom-12 -left-12 w-64 h-64 bg-secondary/10 blur-[100px] rounded-full"></div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-section-gap relative overflow-hidden bg-surface">
    <div class="max-w-container-max mx-auto px-gutter text-center relative z-10">
        <div class="glass-card p-20 rounded-[4rem] border border-white/5 relative overflow-hidden" data-aos="zoom-in">
            <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-transparent to-secondary/5"></div>
            <h2 class="font-display-lg text-5xl md:text-6xl mb-8 relative z-10 font-bold text-white">Ready to <span class="text-gradient">Evolve?</span></h2>
            <p class="text-on-surface-variant max-w-xl mx-auto mb-12 relative z-10 text-lg leading-relaxed">Schedule a technical discovery session with our architects to map your journey into the intelligence era.</p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center relative z-10">
                <button class="px-12 py-5 btn-gradient text-white rounded-2xl font-bold text-lg shadow-2xl hover:brightness-110 transition-all transform hover:-translate-y-1">Book a Strategy Call</button>
                <button class="px-12 py-5 glass-card rounded-2xl font-bold text-lg text-white border border-white/10 hover:bg-white/5 transition-all">Ecosystem Map</button>
            </div>
        </div>
    </div>
</section>
@endsection