@extends('Front.layouts.app')

@section('title', 'Visual Neural Gallery | AI-Solutions')

@section('content')
<!-- Glowing background blur blobs -->
<div class="bg-glow-main top-[10%] left-[10%] opacity-55"></div>
<div class="bg-glow-secondary top-[60%] right-[10%] opacity-40"></div>

<!-- Banner Section -->
<section class="relative pt-24 pb-16 md:pt-36 md:pb-24 overflow-hidden">
    <div class="max-w-container-max mx-auto px-gutter relative z-10" data-aos="fade-up">
        <div class="max-w-3xl space-y-6">
            <div class="flex items-center gap-2">
                <span class="font-mono text-xs uppercase tracking-widest text-secondary px-3 py-1 bg-secondary/15 rounded-full border border-secondary/30 font-bold">Digital Showroom</span>
                <div class="h-[1px] w-12 bg-white/10"></div>
            </div>
            <h1 class="font-display text-5xl md:text-7xl font-extrabold text-white leading-tight">
                Visualizing the <span class="text-gradient-purple">Future.</span>
            </h1>
            <p class="font-body text-base md:text-lg text-on-surface-variant max-w-xl leading-relaxed">
                Explore our collection of AI-generated masterpieces and neural telemetry visualizations. Every pixel is a testament to the seamless fusion of human creativity and advanced intelligence.
            </p>
        </div>
    </div>
    
    <!-- Background ribbons / visuals with soft opacity -->
    <div class="absolute top-0 right-0 w-full h-full -z-10 opacity-20 pointer-events-none">
        <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2JpNL0931zWLkqwtv2jEXkQ6PrU0w4o4fFsvnSY73irACRp49twzkpOgfwQSDT9RiofY72SJbzlX1OT17cQxWoajzzBMV-zWOFJvNZFOOYoBEFv_hFea2qlfekn-MbsnZCFbbm3DamiTU24XbYD8KXk5hafroK1ncKvpKNYXxIRSHGj1VYQpg4Em4VfhyNyzuW3f1xgoYdd9ML19dqqtRW3BMy5apqmDr3SIZuxsHZqJXcCPeb0KdvkHs5dSyq55irZA85AY8dMAm"/>
    </div>
</section>

<!-- Gallery Bento Grid Section -->
<section class="py-10 max-w-container-max mx-auto px-gutter">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        @forelse($assets as $asset)
            @php
                $isLarge = $asset->is_featured;
                $imageUrl = $asset->upload_method === 'upload' ? asset('storage/' . $asset->file_path) : $asset->external_url;
            @endphp

            @if($isLarge)
                <!-- Large Featured Item -->
                <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-3xl glass-card flex flex-col justify-end min-h-[400px]" data-aos="fade-up">
                    <div class="absolute inset-0 z-0 overflow-hidden">
                        @if($asset->media_type === 'image')
                            <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ $imageUrl }}" alt="{{ $asset->title }}"/>
                        @else
                            <!-- Video Fallback Frame with elegant overlay -->
                            <div class="w-full h-full bg-[#131b2e] flex items-center justify-center relative">
                                <span class="material-symbols-outlined text-secondary text-6xl opacity-45">play_circle</span>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-background via-background/40 to-transparent"></div>
                    </div>
                    
                    <div class="relative z-10 p-8 space-y-3 opacity-90 group-hover:opacity-100 transition-opacity">
                        <span class="font-mono text-xs text-secondary uppercase font-bold tracking-widest">{{ $asset->category }}</span>
                        <h3 class="font-display text-2xl md:text-3xl font-extrabold text-white">
                            @if($asset->media_type === 'video')
                                <a href="{{ $imageUrl }}" target="_blank" class="hover:underline flex items-center gap-1.5">
                                    {{ $asset->title }} <span class="material-symbols-outlined text-sm text-secondary">open_in_new</span>
                                </a>
                            @else
                                {{ $asset->title }}
                            @endif
                        </h3>
                        <div class="font-body text-xs text-on-surface-variant max-w-md leading-relaxed hidden sm:block">
                            {!! $asset->description !!}
                        </div>
                    </div>
                </div>
            @else
                <!-- Normal Item -->
                <div class="relative group overflow-hidden rounded-3xl glass-card h-80 flex flex-col justify-end" data-aos="fade-up">
                    <div class="absolute inset-0 z-0 overflow-hidden">
                        @if($asset->media_type === 'image')
                            <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ $imageUrl }}" alt="{{ $asset->title }}"/>
                        @else
                            <div class="w-full h-full bg-[#131b2e] flex items-center justify-center relative">
                                <span class="material-symbols-outlined text-secondary text-5xl opacity-45">play_circle</span>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-background via-background/50 to-transparent"></div>
                    </div>
                    
                    <div class="relative z-10 p-6 space-y-1">
                        <span class="font-mono text-[10px] text-accent uppercase font-bold tracking-widest">{{ $asset->category }}</span>
                        <h4 class="text-white font-display font-bold text-lg">
                            @if($asset->media_type === 'video')
                                <a href="{{ $imageUrl }}" target="_blank" class="hover:underline flex items-center gap-1">
                                    {{ $asset->title }} <span class="material-symbols-outlined text-xs">open_in_new</span>
                                </a>
                            @else
                                {{ $asset->title }}
                            @endif
                        </h4>
                    </div>
                </div>
            @endif
        @empty
            <!-- Fallback Static Grid if empty database -->
            <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-3xl glass-card flex flex-col justify-end min-h-[400px]">
                <div class="absolute inset-0 z-0 overflow-hidden bg-[#131b2e] flex items-center justify-center">
                    <span class="material-symbols-outlined text-4xl text-on-surface-variant">collections</span>
                </div>
                <div class="relative z-10 p-8">
                    <h3 class="font-display text-2xl font-extrabold text-white">Visual Neural Nodes</h3>
                    <p class="text-xs text-on-surface-variant mt-2">Active showroom assets will synchronize shortly.</p>
                </div>
            </div>
        @endforelse
    </div>
</section>

<!-- CTA Waitlist early access Section -->
<section class="py-20 max-w-container-max mx-auto px-gutter">
    <div class="glass-card rounded-[40px] p-12 text-center relative overflow-hidden" data-aos="zoom-in">
        <div class="absolute -bottom-20 left-1/2 -translate-x-1/2 w-96 h-96 bg-glow-secondary opacity-40 pointer-events-none"></div>
        
        <div class="max-w-2xl mx-auto space-y-8 relative z-10">
            <h2 class="font-display text-3xl md:text-5xl font-extrabold text-white">
                Want to see more of the <span class="text-gradient-coral italic">invisible?</span>
            </h2>
            <p class="font-body text-base text-on-surface-variant leading-relaxed">
                Our proprietary generative engines are constantly evolving. Join our exclusive waitlist to get early access to the next generation of AI visualization tools.
            </p>
            
            <form action="#" class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto pt-2">
                <input class="flex-1 bg-[#05020c] border border-white/5 focus:border-secondary px-5 py-3 rounded-xl text-white outline-none focus:ring-0 text-sm placeholder-on-surface-variant/40" placeholder="Your developer email" type="email" required/>
                <button class="btn-gradient text-white px-8 py-3 rounded-xl font-body font-bold text-sm shadow-md shadow-secondary/15">
                    Join Early Access
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
