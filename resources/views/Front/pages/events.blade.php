@extends('Front.layouts.app')

@section('title', 'Global AI Events & Summits | AI-Solutions')

@section('content')
<!-- Glowing background blur blobs -->
<div class="bg-glow-main top-[10%] left-[10%] opacity-55"></div>
<div class="bg-glow-secondary top-[60%] right-[10%] opacity-40"></div>

<!-- Banner Section -->
<section class="relative pt-24 pb-16 md:pt-36 md:pb-24 overflow-hidden">
    <div class="max-w-container-max mx-auto px-gutter relative z-10" data-aos="fade-up">
        <div class="max-w-3xl space-y-6">
            <span class="font-mono text-xs uppercase tracking-widest text-secondary px-3 py-1 bg-secondary/15 rounded-full border border-secondary/30 font-bold inline-block">Global Gatherings</span>
            <h1 class="font-display text-5xl md:text-7xl font-extrabold text-white leading-tight">
                Uniting Global <span class="text-gradient-coral">Minds.</span>
            </h1>
            <p class="font-body text-base md:text-lg text-on-surface-variant max-w-xl leading-relaxed">
                Connect with our core engineering architects, platform partners, and other developer pioneers at our upcoming workshops, hackathons, and global summits.
            </p>
        </div>
    </div>
    
    <div class="absolute inset-0 -z-10 opacity-20 pointer-events-none">
        <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFXW69K6xX5qG6BfB-n5s7wXoJp9u8Q4Y5qfSvTY73xrACRp49twzkpOgfwQSDT9RiofY72SJbzlX1OT17cQxWoajzzBMV-zWOFJvNZFOOYoBEFv_hFea2qlfekn-MbsnZCFbbm3DamiTU24XbYD8KXk5hafroK1ncKvpKNYXxIRSHGj1VYQpg4Em4VfhyNyzuW3f1xgoYdd9ML19dqqtRW3BMy5apqmDr3SIZuxsHZqJXcCPeb0KdvkHs5dSyq55irZA85AY8dMAm"/>
    </div>
</section>

<!-- Events Grid Section -->
<section class="py-10 max-w-container-max mx-auto px-gutter">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- Featured Event 1: AI Global Summit -->
        <div class="glass-card rounded-3xl p-8 md:p-10 flex flex-col justify-between group border-secondary/20 hover:border-secondary/50 relative overflow-hidden md:col-span-2" data-aos="fade-up">
            <div class="absolute -top-24 -left-24 w-64 h-64 bg-secondary/10 rounded-full filter blur-3xl pointer-events-none"></div>
            
            <div class="space-y-6 relative z-10">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-2 text-accent font-mono text-xs font-bold">
                        <span class="material-symbols-outlined text-base">event</span>
                        FEATURED SUMMIT
                    </div>
                    <span class="px-3 py-1 bg-green-500/10 text-green-400 font-mono text-[10px] font-bold uppercase rounded-full border border-green-500/20">Registrations Open</span>
                </div>
                
                <h2 class="font-display text-3xl md:text-4xl font-extrabold text-white leading-tight">
                    AI Global Summit 2026
                </h2>
                
                <p class="font-body text-base text-on-surface-variant max-w-3xl leading-relaxed">
                    Our flagship annual conference assembling thousands of enterprise heads and developer architects. Dive deep into multi-agent systems, secure localized large models, and the upcoming frameworks for self-healing automations.
                </p>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 max-w-2xl">
                    <div class="p-4 bg-white/5 rounded-2xl border border-white/5 font-mono text-xs">
                        <span class="text-on-surface-variant block mb-1">LOCATION:</span>
                        <span class="text-white font-bold">SF, California</span>
                    </div>
                    <div class="p-4 bg-white/5 rounded-2xl border border-white/5 font-mono text-xs">
                        <span class="text-on-surface-variant block mb-1">DATE:</span>
                        <span class="text-white font-bold">Oct 12 - 14, 2026</span>
                    </div>
                    <div class="p-4 bg-white/5 rounded-2xl border border-white/5 font-mono text-xs">
                        <span class="text-on-surface-variant block mb-1">CAPACITY:</span>
                        <span class="text-white font-bold">2,500 Nodes</span>
                    </div>
                </div>
            </div>
            
            <div class="mt-10 pt-6 border-t border-white/5 flex flex-col sm:flex-row justify-between items-center gap-4 relative z-10">
                <div class="font-mono text-sm text-on-surface-variant">Ticket Tier: Early Developer ($299)</div>
                <a href="/contact" class="btn-gradient text-white font-bold px-8 py-3.5 rounded-xl text-sm shadow-md shadow-secondary/15">
                    Reserve Attendance Pass
                </a>
            </div>
        </div>
        
        <!-- Event 2: Hackathon -->
        <div class="glass-card rounded-3xl p-8 flex flex-col justify-between group border-accent/20 hover:border-accent/50" data-aos="fade-up" data-aos-delay="100">
            <div class="space-y-6">
                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-2 text-accent font-mono text-xs font-bold">
                        <span class="material-symbols-outlined text-base">code</span>
                        VIRTUAL HACKATHON
                    </div>
                    <span class="px-2.5 py-0.5 bg-accent/20 text-accent font-mono text-[10px] uppercase rounded-full font-bold">Live Stream</span>
                </div>
                
                <h3 class="font-display text-2xl font-extrabold text-white">
                    Autonomous Agents Hackathon
                </h3>
                
                <p class="font-body text-sm text-on-surface-variant leading-relaxed">
                    Build, test, and deploy collaborative multi-agent micro-networks in a 48-hour competitive sandbox environment. $50,000 in API credits and hardware prizes.
                </p>
                
                <div class="p-4 bg-white/5 rounded-2xl border border-white/5 space-y-2 font-mono text-xs">
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">DATE:</span>
                        <span class="text-white">Nov 18 - 20, 2026</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">PRIZE POOL:</span>
                        <span class="text-white">$50k Total</span>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 pt-6 border-t border-white/5 flex justify-between items-center">
                <span class="font-mono text-xs text-on-surface-variant">Virtual Event</span>
                <a href="/contact" class="btn-gradient text-white px-5 py-2.5 rounded-xl text-xs font-bold shadow-md shadow-secondary/10">
                    Register Team
                </a>
            </div>
        </div>
        
        <!-- Event 3: Webinar -->
        <div class="glass-card rounded-3xl p-8 flex flex-col justify-between group border-secondary/20 hover:border-secondary/50" data-aos="fade-up" data-aos-delay="200">
            <div class="space-y-6">
                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-2 text-secondary font-mono text-xs font-bold">
                        <span class="material-symbols-outlined text-base">videocam</span>
                        ONLINE WEBINAR
                    </div>
                    <span class="px-2.5 py-0.5 bg-secondary/20 text-secondary font-mono text-[10px] uppercase rounded-full font-bold">Upcoming</span>
                </div>
                
                <h3 class="font-display text-2xl font-extrabold text-white">
                    Predictive Analytics Masterclass
                </h3>
                
                <p class="font-body text-sm text-on-surface-variant leading-relaxed">
                    Learn to implement structural anomalies monitoring, mathematical forecast models, and self-healing transaction setups directly into Laravel.
                </p>
                
                <div class="p-4 bg-white/5 rounded-2xl border border-white/5 space-y-2 font-mono text-xs">
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">DATE:</span>
                        <span class="text-white">Dec 04, 2026</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">TIME:</span>
                        <span class="text-white">10:00 AM PST</span>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 pt-6 border-t border-white/5 flex justify-between items-center">
                <span class="font-mono text-xs text-on-surface-variant">Free Entry</span>
                <a href="/contact" class="btn-gradient text-white px-5 py-2.5 rounded-xl text-xs font-bold shadow-md shadow-secondary/10">
                    Get Free Pass
                </a>
            </div>
        </div>
        
    </div>
</section>

<!-- Newsletter / CTA section -->
<section class="py-20 max-w-container-max mx-auto px-gutter">
    <div class="glass-card rounded-[40px] p-12 text-center relative overflow-hidden" data-aos="zoom-in">
        <div class="absolute -bottom-20 left-1/2 -translate-x-1/2 w-96 h-96 bg-glow-secondary opacity-40 pointer-events-none"></div>
        
        <div class="max-w-2xl mx-auto space-y-8 relative z-10">
            <h2 class="font-display text-3xl md:text-5xl font-extrabold text-white">
                Never miss an <span class="text-gradient-purple">interaction.</span>
            </h2>
            <p class="font-body text-base text-on-surface-variant leading-relaxed">
                Subscribe to our events feed to receive early ticketing notifications, call-for-papers submissions, and private developer community meetups.
            </p>
            
            <form action="#" class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto pt-2">
                <input class="flex-1 bg-[#05020c] border border-white/5 focus:border-secondary px-5 py-3 rounded-xl text-white outline-none focus:ring-0 text-sm placeholder-on-surface-variant/40" placeholder="Enter developer email" type="email" required/>
                <button class="btn-gradient text-white px-8 py-3 rounded-xl font-body font-bold text-sm shadow-md shadow-secondary/15">
                    Subscribe Feed
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
