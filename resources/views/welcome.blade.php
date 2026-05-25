@extends('Front.layouts.app')

@section('title', 'AI-Solutions | Next-Gen Enterprise Intelligence Platform')

@section('content')
<!-- Glowing background blur blobs (Raycast style) -->
<div class="bg-glow-main top-[10%] left-[5%] opacity-60"></div>
<div class="bg-glow-secondary top-[40%] right-[5%] opacity-40"></div>
<div class="bg-glow-main top-[75%] left-[20%] opacity-50"></div>

<!-- Hero Section -->
<section class="relative pt-24 pb-20 md:py-36 overflow-hidden">
    <div class="max-w-container-max mx-auto px-gutter grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <!-- Hero Text -->
        <div class="space-y-8" data-aos="fade-right">
            <div class="inline-flex items-center gap-2 px-3 py-1 bg-secondary/15 border border-secondary/30 rounded-full">
                <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                <span class="font-mono text-xs text-on-surface uppercase tracking-widest">Next-Gen Intelligence</span>
            </div>
            
            <h1 class="font-display text-5xl md:text-7xl font-extrabold text-white leading-tight">
                Leveraging AI for <br/>
                <span class="text-gradient-coral">Business Growth</span>
            </h1>
            
            <p class="font-body text-base md:text-lg text-on-surface-variant max-w-xl leading-relaxed">
                Automate complex workflows, gain deep predictive insights, and deploy autonomous AI agents that work around the clock to scale your operations.
            </p>
            
            <div class="flex flex-wrap gap-4 pt-4">
                <a href="/contact" class="btn-gradient text-white font-bold px-8 py-4 rounded-xl font-body text-base shadow-lg shadow-secondary/20">
                    Launch Deployment
                </a>
                <a href="/about#solutions" class="glass-card text-white font-semibold px-8 py-4 rounded-xl font-body text-base hover:bg-white/10">
                    Explore Capabilities
                </a>
            </div>
        </div>

        <!-- Hero Visuals -->
        <div class="relative" data-aos="zoom-in" data-aos-delay="200">
            <!-- Main visual card with elegant rotation -->
            <div class="glass-card rounded-3xl p-4 transform lg:rotate-3 shadow-2xl relative z-10">
                <img alt="AI Neural Mesh Structure" class="rounded-2xl w-full aspect-video object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxR3DZ3pvj7Viuv0dRg5asdZ0QF0B2WFC_0Ii9djLCwNs60Pq9u11FB4SNZGzCmU2c-_8zLyrDQ_tPxAJ_MlUPvAqwJ2Z-eQASjSwKrXyhlpT9h1FVG3FOx1GZfnaXdp-gk2-1pEiXHMUm8qeDnoWGHbaQNszPJZtUrQ2p3F2c30LcVj_72aLNK5pKDzeQsCY0hZFBSiEyZiCAnKBk_-w9L6iiYIi_rEXOPo9cb8DaZEt2PC25Lfmg4qQch7T2sJLSHL4C3PNM1u9e"/>
            </div>

            <!-- Stats Popups -->
            <div class="absolute -bottom-6 -left-6 glass-card p-6 rounded-2xl hidden md:block max-w-[200px] z-20" data-aos="fade-up" data-aos-delay="400">
                <div class="text-accent font-mono text-xs mb-2">Efficiency Gain</div>
                <div class="font-display text-4xl font-extrabold text-white">+84%</div>
            </div>

            <div class="absolute -top-6 -right-6 glass-card p-5 rounded-2xl hidden md:block max-w-[200px] z-20" data-aos="fade-down" data-aos-delay="500">
                <div class="text-secondary font-mono text-xs mb-2">Active Pipelines</div>
                <div class="font-display text-3xl font-extrabold text-white">4,200+</div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Teaser Section -->
<section class="py-20 md:py-28 relative overflow-hidden">
    <div class="max-w-container-max mx-auto px-gutter">
        <div class="grid md:grid-cols-2 gap-20 items-center">
            <!-- Left Info column -->
            <div class="space-y-6" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-secondary/15 border border-secondary/30 rounded-full">
                    <span class="font-mono text-xs text-on-surface uppercase tracking-widest">Who We Are</span>
                </div>
                <h2 class="font-display text-4xl md:text-5xl font-extrabold text-white leading-tight">
                    Architecting the Future of Automation
                </h2>
                <p class="font-body text-base text-on-surface-variant leading-relaxed">
                    At AI-Solutions, we don't just build tools; we build ecosystems. Our platform integrates seamlessly into your existing infrastructure, turning raw data into strategic assets.
                </p>
                
                <ul class="space-y-4 pt-4">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-secondary font-bold">check_circle</span>
                        <span class="font-body text-on-surface text-base">Enterprise-grade security and SOC2 compliance</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-secondary font-bold">check_circle</span>
                        <span class="font-body text-on-surface text-base">Sub-millisecond latency decision engines</span>
                    </li>
                </ul>

                <div class="pt-6">
                    <a href="/about" class="text-secondary font-body font-bold hover:text-accent transition-colors flex items-center gap-2">
                        Learn about our architecture <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Right Visual Stats Grid -->
            <div class="grid grid-cols-2 gap-6" data-aos="fade-left" data-aos-delay="200">
                <div class="glass-card aspect-square rounded-3xl flex flex-col items-center justify-center p-8 text-center space-y-4 hover:border-secondary/50">
                    <span class="material-symbols-outlined text-4xl text-secondary">diversity_3</span>
                    <div class="font-display text-3xl md:text-4xl font-extrabold text-white">500+</div>
                    <div class="font-mono text-xs text-on-surface-variant uppercase tracking-widest">Partners</div>
                </div>
                <div class="glass-card aspect-square rounded-3xl flex flex-col items-center justify-center p-8 text-center space-y-4 translate-y-8 hover:border-accent/50">
                    <span class="material-symbols-outlined text-4xl text-accent">memory</span>
                    <div class="font-display text-3xl md:text-4xl font-extrabold text-white">1.2B</div>
                    <div class="font-mono text-xs text-on-surface-variant uppercase tracking-widest font-medium">Requests/Day</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bento Grid Capabilities / Services Section -->
<section class="py-20 md:py-28 relative">
    <div class="max-w-container-max mx-auto px-gutter">
        <div class="text-center mb-16 space-y-4" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 px-3 py-1 bg-secondary/15 border border-secondary/30 rounded-full">
                <span class="font-mono text-xs text-on-surface uppercase tracking-widest">Platform Core</span>
            </div>
            <h2 class="font-display text-4xl md:text-5xl font-extrabold text-white">Our Core Capabilities</h2>
            <p class="font-body text-base text-on-surface-variant max-w-2xl mx-auto">
                Scalable, high-impact modules engineered to solve complex operational challenges.
            </p>
        </div>

        <!-- Bento Layout -->
        <div class="grid grid-cols-1 md:grid-cols-6 gap-6">
            <!-- Box 1: Analytics -->
            <div class="md:col-span-3 glass-card rounded-3xl p-8 flex flex-col justify-between group" data-aos="fade-up" data-aos-delay="100">
                <div class="space-y-6">
                    <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-secondary text-3xl">insights</span>
                    </div>
                    <h3 class="font-display text-2xl md:text-3xl font-extrabold text-white">Advanced Analytics</h3>
                    <p class="font-body text-sm text-on-surface-variant leading-relaxed">
                        Transform complex enterprise datasets into actionable strategies using customized mathematical predictive neural models.
                    </p>
                </div>
                <div class="mt-8">
                    <a href="/about#analytics" class="flex items-center gap-2 text-secondary font-body text-sm font-semibold hover:text-white transition-colors">
                        Learn more <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Box 2: Automations -->
            <div class="md:col-span-3 glass-card rounded-3xl p-8 flex flex-col justify-between group" data-aos="fade-up" data-aos-delay="200">
                <div class="space-y-6">
                    <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-accent text-3xl">settings_suggest</span>
                    </div>
                    <h3 class="font-display text-2xl md:text-3xl font-extrabold text-white">Process Automations</h3>
                    <p class="font-body text-sm text-on-surface-variant leading-relaxed">
                        Eliminate manual bottlenecks and orchestrate seamless pipelines across your complete tech stack with 24/7 self-healing flows.
                    </p>
                </div>
                <div class="mt-8">
                    <a href="/about#automation" class="flex items-center gap-2 text-accent font-body text-sm font-semibold hover:text-white transition-colors">
                        Explore documentation <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Box 3: AI Agents -->
            <div class="md:col-span-6 glass-card rounded-3xl p-8 flex flex-col md:flex-row items-center gap-10 group" data-aos="fade-up" data-aos-delay="300">
                <div class="flex-1 space-y-6">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-secondary to-accent flex items-center justify-center group-hover:scale-110 transition-transform shadow-lg shadow-secondary/20">
                        <span class="material-symbols-outlined text-white text-3xl">smart_toy</span>
                    </div>
                    <h3 class="font-display text-2xl md:text-3xl font-extrabold text-white">Autonomous AI Agents</h3>
                    <p class="font-body text-sm text-on-surface-variant leading-relaxed">
                        Deploy independent digital workforces capable of managing support cases, coordinating project timelines, and synchronizing code repositories with total safety boundaries.
                    </p>
                    <div>
                        <a href="/about#agents" class="inline-flex items-center gap-2 text-secondary font-body text-sm font-semibold hover:text-white transition-colors">
                            Explore agent deployment rules <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <!-- Interactive Code snippet window -->
                <div class="w-full md:w-2/5 bg-[#05020c] rounded-2xl p-6 border border-white/5 font-mono text-xs space-y-2 text-on-surface-variant relative overflow-hidden">
                    <div class="flex gap-1.5 pb-4 border-b border-white/5">
                        <span class="w-2.5 h-2.5 rounded-full bg-red-500/80"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-yellow-500/80"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-green-500/80"></span>
                    </div>
                    <p class="text-secondary"><span class="text-white">// Initialize Autonomous Agent v2.5</span></p>
                    <p><span class="text-accent">const</span> agent = <span class="text-white">new</span> <span class="text-yellow-400">Agent</span>({</p>
                    <p class="pl-4">id: <span class="text-green-400">"agent-bi-nexus"</span>,</p>
                    <p class="pl-4">actions: [<span class="text-green-400">"ANALYZE"</span>, <span class="text-green-400">"AUTOMATE"</span>],</p>
                    <p class="pl-4">bounds: <span class="text-white">"SOC2-Enforced"</span></p>
                    <p>});</p>
                    <p class="pt-2 text-white">await agent.deploy();</p>
                    <p class="text-green-400"><span class="text-on-surface-variant">>></span> STATUS: ACTIVE [OPTIMIZING...]</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Insights & Events (Intelligence Hub) Featured grid -->
<section class="py-20 md:py-28 bg-[#05020c]/60 relative border-y border-white/5">
    <div class="max-w-container-max mx-auto px-gutter">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-16 gap-6">
            <div class="space-y-4" data-aos="fade-right">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-secondary/15 border border-secondary/30 rounded-full">
                    <span class="font-mono text-xs text-on-surface uppercase tracking-widest">Intelligence Hub</span>
                </div>
                <h2 class="font-display text-4xl md:text-5xl font-extrabold text-white">Insights & Discoveries</h2>
                <p class="font-body text-base text-on-surface-variant">The latest in deep neural modeling, summits, and platform expansions.</p>
            </div>
            <div data-aos="fade-left">
                <a href="/insights" class="btn-gradient text-white text-sm font-bold px-6 py-3 rounded-xl inline-flex items-center gap-2">
                    Browse All Insights <span class="material-symbols-outlined text-sm">arrow_outward</span>
                </a>
            </div>
        </div>

        <!-- 3 Column Hub Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Article Column 1 -->
            <article class="glass-card rounded-3xl overflow-hidden group flex flex-col justify-between" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <div class="aspect-video overflow-hidden relative">
                        <img alt="Robotic interface with neon lights" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 grayscale group-hover:grayscale-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGU57Vz2J3LaXXeMyGipWXQZyfDWF0dAvXordkx1_GO6am9ePSF2gCuN67_Fg-tUYT747cJaSzW6nZXQb03gSQfwgmA6kyVelhlU3EBbL2OG_IL8hVH-OS-ixm1GW66dT0mDoNFfBdWht3uBEpTU_h2EpX77cn0snU07QpodjciyHLHuMyJaDjEurMH0_Xu1ERdi_LNV_PPF9vM4qc26kUv2BKCYFt01AaplrVr6IY5mWOnpcPIDPTqcHLVMrLpOUbOZA4wuokJHDs"/>
                    </div>
                    <div class="p-8 space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="px-2.5 py-0.5 bg-secondary/20 text-secondary font-mono text-[10px] uppercase rounded-full font-bold">Research</span>
                            <span class="text-on-surface-variant font-mono text-[10px]">5 MIN READ</span>
                        </div>
                        <h4 class="font-display text-xl font-bold text-white group-hover:text-secondary transition-colors line-clamp-2">
                            The Future of Large Language Models in Enterprise
                        </h4>
                        <p class="font-body text-sm text-on-surface-variant line-clamp-3 leading-relaxed">
                            How generative AI architectures are reshaping search, structured storage, and the way corporate entities coordinate internal files.
                        </p>
                    </div>
                </div>
                <div class="px-8 pb-8 pt-2">
                    <a href="/insights" class="flex items-center gap-2 text-secondary font-body text-sm font-bold hover:text-white transition-colors">
                        Read Insights <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </article>

            <!-- Event Card Column 2 -->
            <div class="glass-card rounded-3xl p-8 flex flex-col justify-between border-secondary/20 hover:border-secondary/50 group" data-aos="fade-up" data-aos-delay="200">
                <div class="space-y-6">
                    <div class="flex items-center gap-2 text-accent font-mono text-xs font-bold">
                        <span class="material-symbols-outlined text-base">event</span>
                        UPCOMING EVENT
                    </div>
                    <h4 class="font-display text-2xl font-extrabold text-white leading-tight">
                        AI Global Summit 2026
                    </h4>
                    <p class="font-body text-sm text-on-surface-variant leading-relaxed">
                        Join our engineering leaders and architectural partners live in San Francisco for the largest autonomous intelligence integration summit of the year.
                    </p>
                    
                    <div class="p-4 bg-white/5 rounded-2xl border border-white/5 space-y-2 font-mono text-xs">
                        <div class="flex justify-between">
                            <span class="text-on-surface-variant">LOC:</span>
                            <span class="text-white">SF, California</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-on-surface-variant">DATE:</span>
                            <span class="text-white">Oct 12 - 14</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8 flex items-center justify-between">
                    <div class="font-mono text-sm text-on-surface">Oct 12-14</div>
                    <a href="/events" class="btn-gradient px-5 py-2.5 rounded-xl text-xs font-bold text-white shadow-md shadow-secondary/10">
                        Register Node
                    </a>
                </div>
            </div>

            <!-- Article Column 3 -->
            <article class="glass-card rounded-3xl overflow-hidden group flex flex-col justify-between" data-aos="fade-up" data-aos-delay="300">
                <div>
                    <div class="aspect-video overflow-hidden relative">
                        <img alt="Advanced dashboard displaying graphics" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 grayscale group-hover:grayscale-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHlAKJ3-A7dfy5T1cMk4umgXvv4z1Et3nwekH110hoPwHRU0fkMT4Q9xYAJ1CM2xhz7C8q9DP7fbpgd9yK5IMOZn-7dy7ePyqIVGaOwK0-TMFkvGZKQlzgLbW6cX1Ix3Gc95iVZa9JayGYvYGIW_Vhvm1EfDw-miffqhdnzYX4tVYc9D82pxg9Ce2rOJFCGU_Liv2xO8a0hgeqcyhzBAOEIOSsGglScDIwEuMdTVofkjNcsuxhukekHLzv4tqvoOeOU2rhdTUkRlpx"/>
                    </div>
                    <div class="p-8 space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="px-2.5 py-0.5 bg-accent/20 text-accent font-mono text-[10px] uppercase rounded-full font-bold">Cybersecurity</span>
                            <span class="text-on-surface-variant font-mono text-[10px]">8 MIN READ</span>
                        </div>
                        <h4 class="font-display text-xl font-bold text-white group-hover:text-secondary transition-colors line-clamp-2">
                            Securing the Perimeter: AI in Cybersecurity
                        </h4>
                        <p class="font-body text-sm text-on-surface-variant line-clamp-3 leading-relaxed">
                            Defend your data boundaries against modern multi-agent threat layers using secure localized neural firewall orchestrations.
                        </p>
                    </div>
                </div>
                <div class="px-8 pb-8 pt-2">
                    <a href="/insights" class="flex items-center gap-2 text-secondary font-body text-sm font-bold hover:text-white transition-colors">
                        Read Insights <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Premium Testimonials Carousel Grid -->
<section class="py-20 md:py-28 relative overflow-hidden">
    <div class="max-w-container-max mx-auto px-gutter">
        <h2 class="font-display text-4xl md:text-5xl font-extrabold text-center text-white mb-16" data-aos="fade-up">
            Trusted by Innovators
        </h2>
        
        <!-- Horizontally scrollable slider (premium responsive layout) -->
        <div class="flex flex-nowrap gap-8 overflow-x-auto pb-10 snap-x no-scrollbar" data-aos="fade-up" data-aos-delay="200">
            <!-- Card 1 -->
            <div class="min-w-[300px] md:min-w-[450px] glass-card p-8 md:p-10 rounded-3xl snap-center relative flex flex-col justify-between">
                <span class="material-symbols-outlined text-secondary/15 text-8xl absolute top-6 right-6 font-bold select-none pointer-events-none">format_quote</span>
                
                <p class="font-body text-on-surface-variant italic text-base leading-relaxed mb-8 relative z-10">
                    "The neural model integration was entirely seamless. AI-Solutions supplied the predictive pipelines our team required to cut operational overheads by 30% inside six months."
                </p>

                <div class="flex items-center gap-4 relative z-10">
                    <div class="w-14 h-14 rounded-full bg-secondary/20 overflow-hidden border border-white/10 shrink-0">
                        <img alt="David Chen - CTO" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBz7-yEq7pFp26a9Lg3IDcQM80IMHuSh6nbRlvrqKnNL4ypaqRiXTQ0qHwjn5Fn194nTcPdHHJp4_7cCYpd7qR3qL0DXViR8e_V7OCIRIwzj1RyOaBEO_Fj1F1FJ00vWnb-TRBOY9f2HxPZwN3DY6YH2g_0gdk1tzUo5h_YdU2CZQ2YdnxH8vl6R2bLW1TAo93mo8s8vn_7V6Oci4Hbwbkz1QfEMqZ982s_QIW_m7Zou87YqtmR3JF5p7g9CMJaxmiO0lIrELqHklwX"/>
                    </div>
                    <div>
                        <div class="font-display text-base font-bold text-white">David Chen</div>
                        <div class="font-mono text-xs text-on-surface-variant">CTO, NexaTech</div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="min-w-[300px] md:min-w-[450px] glass-card p-8 md:p-10 rounded-3xl snap-center relative flex flex-col justify-between">
                <span class="material-symbols-outlined text-accent/15 text-8xl absolute top-6 right-6 font-bold select-none pointer-events-none">format_quote</span>
                
                <p class="font-body text-on-surface-variant italic text-base leading-relaxed mb-8 relative z-10">
                    "Deploying their Autonomous AI Agents completely upgraded our operations. It's like operating an expert engineering team that never sleeps and persistently evolves."
                </p>

                <div class="flex items-center gap-4 relative z-10">
                    <div class="w-14 h-14 rounded-full bg-accent/20 overflow-hidden border border-white/10 shrink-0">
                        <img alt="Sarah Jenkins - Product Lead" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgCPQro8a46iFh_bARl24pQyyUZeO7Vysm6eCazhhvV5v2v-pHdTdSpoYpi9e1t9pMm-yYXd0-ykmor9_keSw4C7ihThP6X31qEGXqMadlOavlIALJYg3XuMIosHCcN5kOdiNTyLfueBJ3AiY50HLZMtXzLRPnGZPqXFTkE9ZK0XybXfHvkO3rwvKvmLpeRSIDzQlaiua-V-qIVzcIirfXGAPl7Td5RwRGxr6MWrW_TbvQtnnzDnzLFwjHxbfVdhyB4iU91CEpRYD0"/>
                    </div>
                    <div>
                        <div class="font-display text-base font-bold text-white">Sarah Jenkins</div>
                        <div class="font-mono text-xs text-on-surface-variant">Product Head, Flow.ai</div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="min-w-[300px] md:min-w-[450px] glass-card p-8 md:p-10 rounded-3xl snap-center relative flex flex-col justify-between">
                <span class="material-symbols-outlined text-secondary/15 text-8xl absolute top-6 right-6 font-bold select-none pointer-events-none">format_quote</span>
                
                <p class="font-body text-on-surface-variant italic text-base leading-relaxed mb-8 relative z-10">
                    "Hands down the most sophisticated system diagnostics and dashboard in the industry. The real-time optimization nodes and agent control are simply peerless."
                </p>

                <div class="flex items-center gap-4 relative z-10">
                    <div class="w-14 h-14 rounded-full bg-secondary/20 overflow-hidden border border-white/10 shrink-0">
                        <img alt="Marcus Thorne - Innovation Lead" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1fCQxy959b1jjJj_shqFBcH7frgzdu7dhGLDCJnSmyZgHFQD5ZDcEY1HDBr0GWcpCUbuovjeA3hS6-dH9qnZ4UEhnt4olCXh1oALHsvpsYZrAbKCyW4Q6pWz2LVaYYIGcXqbCGyaq2Tbf7Nj8pCVey9e1hx6jhKMklYi7KwIgFt05ujjudHRq9oS_qDY7iGaJndGut7UUvFkfqxpDEvftdf61MJSbKN3DPIWt1gcY-soivaQcCY157cPnrmU1RLvXAy83nLGQMF2I"/>
                    </div>
                    <div>
                        <div class="font-display text-base font-bold text-white">Marcus Thorne</div>
                        <div class="font-mono text-xs text-on-surface-variant">Innovation Lead, Global Inc.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Newsletter section -->
<section class="py-20 md:py-28 relative">
    <div class="max-w-container-max mx-auto px-gutter">
        <div class="glass-card rounded-[40px] p-10 md:p-24 text-center relative overflow-hidden" data-aos="zoom-in">
            <div class="absolute top-0 right-0 w-96 h-96 bg-glow-secondary opacity-30 -translate-y-1/2 translate-x-1/2"></div>
            
            <div class="relative z-10 max-w-2xl mx-auto space-y-8">
                <h2 class="font-display text-4xl md:text-6xl font-extrabold text-white leading-tight">
                    Ready to Evolve?
                </h2>
                <p class="font-body text-base md:text-lg text-on-surface-variant leading-relaxed">
                    Join 2,000+ industry pioneers receiving our weekly deep neural briefs on structural automations.
                </p>
                
                <form action="#" class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto pt-2">
                    <input class="flex-1 bg-[#05020c] border border-white/10 rounded-xl px-5 py-4 text-white focus:outline-none focus:border-secondary transition-colors placeholder-on-surface-variant/40" placeholder="Enter business email" type="email" required/>
                    <button class="btn-gradient text-white font-bold px-8 py-4 rounded-xl whitespace-nowrap shadow-lg shadow-secondary/15" type="submit">
                        Subscribe Now
                    </button>
                </form>
                <div class="font-mono text-xs text-on-surface-variant/60">SOC2 compliant. Zero spam.</div>
            </div>
        </div>
    </div>
</section>
@endsection
