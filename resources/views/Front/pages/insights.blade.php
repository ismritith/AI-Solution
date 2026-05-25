@extends('Front.layouts.app')

@section('title', 'Insights Hub | AI-Solutions')

@section('content')
<!-- Glowing background blur blobs -->
<div class="bg-glow-main top-[10%] left-[-5%] opacity-55"></div>
<div class="bg-glow-secondary top-[60%] right-[-5%] opacity-40"></div>

<!-- Hero Banner Section -->
<section class="relative py-20 px-gutter overflow-hidden">
    <div class="max-w-container-max mx-auto text-center relative z-10 space-y-6" data-aos="fade-up">
        <span class="font-mono text-xs uppercase tracking-[0.2em] text-secondary mb-6 block font-bold">Intelligence Unveiled</span>
        <h1 class="font-display text-5xl md:text-7xl font-extrabold text-white max-w-4xl mx-auto leading-tight">
            Future-Forward <span class="text-gradient-coral">AI Insights</span>
        </h1>
        <p class="font-body text-base md:text-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
            Deep neural exploration, operational security models, and the ongoing structural evolution of AI in modern enterprise environments.
        </p>
        
        <!-- Search bar -->
        <div class="flex justify-center pt-6">
            <div class="relative w-full max-w-md">
                <input class="w-full bg-[#05020c] border border-white/5 rounded-2xl px-12 py-4 text-white focus:outline-none focus:border-secondary transition-all text-sm placeholder-on-surface-variant/40" placeholder="Search the insights library..." type="text"/>
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50">search</span>
            </div>
        </div>
    </div>
</section>

<!-- Featured & Bento Grid Content -->
<section class="pb-24 px-gutter max-w-container-max mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- Main Featured Post (Left) -->
        <article class="lg:col-span-8 group cursor-pointer" data-aos="fade-right">
            <div class="glass-card rounded-3xl h-full flex flex-col p-5 space-y-6">
                <div class="relative rounded-2xl overflow-hidden aspect-[16/9]">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-103 grayscale group-hover:grayscale-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHGbF-qftlQuQpH-iMu1Qz30jPxlr7Ivf4_fstCGn0vWDEdRoAn1xH3xMUNjJtc62BPuXA1Qr4G4-Twdn84izxdAzNzRFBy0YJ_uhT7UFkQ3RvpeRID_BsP58xak1KJdudILoCPdo6xysJT_Go9D5CMBv-IVIDr5fqxLqAhxIylJd_t0vM12mFfWf5wFAqhnBrZnC7uOIo4ZvcgEYIpvbmRGJImYvUBnTATAv2HGbGqQsNJnD3xYLE3kI93-cXOEoMP9Hj4_UwGolL"/>
                    <div class="absolute top-4 left-4 flex gap-2">
                        <span class="bg-secondary/20 backdrop-blur-md border border-secondary/30 text-secondary font-mono text-[10px] font-bold px-3 py-1 rounded-full uppercase">Engineering</span>
                        <span class="bg-primary/60 backdrop-blur-md border border-white/10 text-white font-mono text-[10px] px-3 py-1 rounded-full">12 min read</span>
                    </div>
                </div>
                
                <div class="space-y-4 px-2 pb-2">
                    <h2 class="font-display text-2xl md:text-3xl font-extrabold text-white group-hover:text-secondary transition-colors leading-tight">
                        The Genesis of Autonomous Systems: Beyond LLMs
                    </h2>
                    <p class="text-on-surface-variant font-body text-sm leading-relaxed">
                        Investigating the rapid paradigm shift from simple conversational interfaces to completely autonomous digital entities. These modern systems manipulate data blocks, secure APIs, and run processes without constant human intervention.
                    </p>
                    
                    <div class="flex items-center gap-3 pt-4 border-t border-white/5">
                        <div class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center shrink-0 border border-secondary/20">
                            <span class="material-symbols-outlined text-secondary text-lg">fingerprint</span>
                        </div>
                        <div>
                            <p class="font-display text-sm font-bold text-white">Dr. Aris Thorne</p>
                            <p class="font-mono text-[10px] text-on-surface-variant uppercase tracking-widest font-bold">Chief AI Architect</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <!-- Side Bento Stack (Right) -->
        <div class="lg:col-span-4 flex flex-col gap-8" data-aos="fade-left" data-aos-delay="200">
            <!-- Side Post 1 -->
            <article class="glass-card rounded-3xl p-8 group cursor-pointer flex flex-col justify-between h-full">
                <div class="space-y-4">
                    <span class="bg-accent/15 border border-accent/30 text-accent font-mono text-[10px] px-2.5 py-0.5 rounded-full font-bold uppercase inline-block">Security</span>
                    <h3 class="font-display text-xl font-bold text-white leading-snug group-hover:text-secondary transition-colors">
                        Zero-Trust Architectures in Neural Nets
                    </h3>
                    <p class="text-on-surface-variant font-body text-xs leading-relaxed line-clamp-3">
                        Establishing secure, containerized data sandboxes at scale to protect intelligence inputs from adversarial code injection patterns.
                    </p>
                </div>
                <div class="flex items-center justify-between pt-6 border-t border-white/5 mt-6">
                    <span class="font-mono text-[10px] text-on-surface-variant uppercase tracking-widest font-bold">Oct 24, 2026</span>
                    <span class="material-symbols-outlined text-secondary group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </div>
            </article>
            
            <!-- Side Post 2 -->
            <article class="glass-card rounded-3xl p-8 group cursor-pointer flex flex-col justify-between h-full">
                <div class="space-y-4">
                    <span class="bg-secondary/15 border border-secondary/30 text-secondary font-mono text-[10px] px-2.5 py-0.5 rounded-full font-bold uppercase inline-block">Optimization</span>
                    <h3 class="font-display text-xl font-bold text-white leading-snug group-hover:text-secondary transition-colors">
                        Latency Reduction at Scale
                    </h3>
                    <p class="text-on-surface-variant font-body text-xs leading-relaxed line-clamp-3">
                        Techniques for distributing real-time tensor operations across regional edge systems to guarantee immediate response parameters.
                    </p>
                </div>
                <div class="flex items-center justify-between pt-6 border-t border-white/5 mt-6">
                    <span class="font-mono text-[10px] text-on-surface-variant uppercase tracking-widest font-bold font-bold">Oct 22, 2026</span>
                    <span class="material-symbols-outlined text-secondary group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </div>
            </article>
        </div>
        
        <!-- Secondary Grid Row -->
        <article class="lg:col-span-4 group cursor-pointer" data-aos="fade-up" data-aos-delay="100">
            <div class="glass-card rounded-3xl overflow-hidden h-full flex flex-col justify-between">
                <div>
                    <div class="aspect-video relative overflow-hidden">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFA-MDWoHYJHHpvWDgJ3F5898nfcqwqoOt8qUFk2DummDHDVXaYTJYx5FaLsP1HhzA-KF9BDT_Wn11QoPIYOEBoyGo_GR3ZxQwo1w8Nb8DqLwzDZTEvMOquTxrbQwHVG4zsYOeC5v5Bx_FtXnqpmpAvT0-36PoYH72gP3L8Mo2TNMnU1wHwPO0TdnZQqEYgAMliGnHO7fLWDxNyLKUxMbVEIbnZIlTdX49WjHC9J6qUrlq0W59DXkEkoX4aySB-JozAS4PTL0TPFiG"/>
                    </div>
                    <div class="p-8 space-y-4">
                        <div class="flex gap-3">
                            <span class="font-mono text-[10px] text-secondary font-bold uppercase tracking-wider">HARDWARE</span>
                            <span class="font-mono text-[10px] text-on-surface-variant">8 MIN READ</span>
                        </div>
                        <h4 class="font-display text-xl font-bold text-white group-hover:text-secondary transition-colors">
                            Silicon Synergy: AI on the Edge
                        </h4>
                        <p class="text-on-surface-variant font-body text-xs leading-relaxed">
                            How specialized matrix-multiplication processors are transferring inference routines out of servers directly onto terminal edge devices.
                        </p>
                    </div>
                </div>
                <div class="px-8 pb-8 pt-2">
                    <span class="flex items-center gap-2 text-secondary font-body text-xs font-bold hover:text-white transition-colors">
                        Read Article <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </span>
                </div>
            </div>
        </article>
        
        <article class="lg:col-span-4 group cursor-pointer" data-aos="fade-up" data-aos-delay="200">
            <div class="glass-card rounded-3xl overflow-hidden h-full flex flex-col justify-between">
                <div>
                    <div class="aspect-video relative overflow-hidden">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgIfhMen5bfY8U5mpgBE2WpVio4DdHm4pzv0xX0wy6LjJzSrqLwsyJSuMSIvG7QI2m-E03aRY2clokNIInMGMLX9NoCu9jiAqAT9G-Cwfs5j3ZGnKdPts_f1uOiDB-IxfbW8iBkQobA24Cf37tvcpNrg8fCHKpn9yqRdSnvubr_n1SFLxVbWtcijgKVrbzjfx3PiMCuZ77brSJrjsdu3GZfZ81pLl3Ix1J2QNtLoXTiMToYhoYlreUuIO0FiUWlx0TLRsl8FzyvmDv"/>
                    </div>
                    <div class="p-8 space-y-4">
                        <div class="flex gap-3">
                            <span class="font-mono text-[10px] text-secondary font-bold uppercase tracking-wider">STRATEGY</span>
                            <span class="font-mono text-[10px] text-on-surface-variant">15 MIN READ</span>
                        </div>
                        <h4 class="font-display text-xl font-bold text-white group-hover:text-secondary transition-colors">
                            The Global Data Mesh
                        </h4>
                        <p class="text-on-surface-variant font-body text-xs leading-relaxed">
                            Formulating cross-regional compliance strategies when deploying multi-agent networks that cross sovereign database lines.
                        </p>
                    </div>
                </div>
                <div class="px-8 pb-8 pt-2">
                    <span class="flex items-center gap-2 text-secondary font-body text-xs font-bold hover:text-white transition-colors">
                        Read Article <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </span>
                </div>
            </div>
        </article>
        
        <article class="lg:col-span-4 group cursor-pointer" data-aos="fade-up" data-aos-delay="300">
            <div class="glass-card rounded-3xl overflow-hidden h-full flex flex-col justify-between">
                <div>
                    <div class="aspect-video relative overflow-hidden">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWYrkQzTNFX4TCrUB2OzjltYyBxDyN7QxZ2T68tGThbEHYaoeSVZ4G6bW9N4CGJp6LODUaFfZhq5BOpFcHMGzeiq0DjXi_wimhehxD9gZzd23-GcfKuc38D-9I-vPv-usAKe-JehOKIfpzU_dLVJ0MjqSC54RRszVJyxSyaH6nFBrHtj6VZzl3D2XpsT0Td5rOSMyIQYC76-V7A1CqYxPKbZXAnJ4nvSwPl7NEhPkf6F84m3mtCZT_yXYeDPFjvfZGNPgWV5V739US"/>
                    </div>
                    <div class="p-8 space-y-4">
                        <div class="flex gap-3">
                            <span class="font-mono text-[10px] text-secondary font-bold uppercase tracking-wider">CODING</span>
                            <span class="font-mono text-[10px] text-on-surface-variant">5 MIN READ</span>
                        </div>
                        <h4 class="font-display text-xl font-bold text-white group-hover:text-secondary transition-colors">
                            Clean Code for LLM Hooks
                        </h4>
                        <p class="text-on-surface-variant font-body text-xs leading-relaxed">
                            Software development methodologies for setting secure prompt variables and orchestrating async agent callbacks in PHP and JS.
                        </p>
                    </div>
                </div>
                <div class="px-8 pb-8 pt-2">
                    <span class="flex items-center gap-2 text-secondary font-body text-xs font-bold hover:text-white transition-colors">
                        Read Article <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </span>
                </div>
            </div>
        </article>
        
    </div>
</section>

<!-- Category Filter & Newsletter Section with Coding Terminal Block -->
<section class="py-20 px-gutter bg-[#05020c]/60 relative border-t border-white/5">
    <div class="max-w-container-max mx-auto">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-16 glass-card p-10 md:p-12 rounded-[40px] relative overflow-hidden" data-aos="zoom-in">
            <div class="absolute -bottom-1/2 -left-1/4 w-full h-full bg-glow-secondary opacity-30 pointer-events-none"></div>
            
            <div class="max-w-xl relative z-10 space-y-6">
                <h2 class="font-display text-3xl md:text-4xl font-extrabold text-white">Stay at the cutting edge.</h2>
                <p class="text-on-surface-variant font-body text-sm leading-relaxed">
                    Receive bi-weekly deep insights into AI orchestrations, case studies from our sandbox labs, and early alerts on newly published terminal scripts.
                </p>
                <form action="#" class="flex flex-col sm:flex-row gap-4">
                    <input class="flex-1 bg-[#05020c] border border-white/5 rounded-xl px-5 py-4 focus:outline-none focus:border-secondary text-white text-sm placeholder-on-surface-variant/40" placeholder="Your engineering email" type="email" required/>
                    <button class="btn-gradient text-white font-bold px-8 py-4 rounded-xl shadow-md shadow-secondary/15 transition-all whitespace-nowrap">
                        Subscribe Now
                    </button>
                </form>
            </div>
            
            <!-- Terminal code block -->
            <div class="hidden lg:block w-full max-w-sm relative z-10" data-aos="fade-left" data-aos-delay="200">
                <div class="bg-[#05020c] p-6 rounded-2xl border border-white/5 shadow-2xl font-mono text-xs space-y-3">
                    <div class="flex gap-1.5 pb-3 border-b border-white/5">
                        <span class="w-2.5 h-2.5 rounded-full bg-red-500/80"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-yellow-500/80"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-green-500/80"></span>
                    </div>
                    <code class="block text-on-surface-variant">
                        <span class="text-secondary">const</span> subscriber = {<br/>
                        &nbsp;&nbsp;topic: <span class="text-accent">'ai-insights'</span>,<br/>
                        &nbsp;&nbsp;frequency: <span class="text-accent">'real-time'</span>,<br/>
                        &nbsp;&nbsp;status: <span class="text-green-400">'active'</span><br/>
                        };<br/><br/>
                        <span class="text-secondary">await</span> solutions.sync(subscriber);
                    </code>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
