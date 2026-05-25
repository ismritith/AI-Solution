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
        
        <!-- Large Featured Item -->
        <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-3xl glass-card flex flex-col justify-end" data-aos="fade-up">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkVO1RINJiywHS2Br2tobwPGuuyJx7snGxBgppr9BNy4jh_vezlo2KfVrvb7_axiJGgrdj7LgEz6C7b_yMFS5MuPSxso6-IF5ReQBICzofUxj336ld-mC26X0Q54aJTlG2TprmFeOAi6gjLWykOTOQDjd7wea3xUpFYwV-aPt6i3VU3uofrbefZtBI6xmqCP89g9sMXAS41bkntMk3vvZ2m2BQPTnzzZ8KtJvXiS1qBxK8rNuCvXlvFqfrua_4NiWR4Wm7_7vWMHbl"/>
                <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/30 to-transparent"></div>
            </div>
            
            <div class="relative z-10 p-8 space-y-3 opacity-90 group-hover:opacity-100 transition-opacity">
                <span class="font-mono text-xs text-secondary uppercase font-bold tracking-widest">Neural Landscapes</span>
                <h3 class="font-display text-2xl md:text-3xl font-extrabold text-white">Synaptic Horizon v2.0</h3>
                <p class="font-body text-xs text-on-surface-variant max-w-md leading-relaxed hidden sm:block">A cinematic nebula representing data routing pathways mapped as celestial matrices.</p>
            </div>
        </div>
        
        <!-- Item 2 -->
        <div class="relative group overflow-hidden rounded-3xl glass-card h-80 flex flex-col justify-end" data-aos="fade-up" data-aos-delay="100">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYNjD5jLdw9GeVs1tkrZgtVvfLPLredaIZXd2ZqjQuW7iUTQSLRgBvLooIJ_0gHWJV_haBC_k2yNZioch5DW2GMbza6mNW3GhLzQTXEFO-Z0ARNog5SuuyMBJGxaW8Ak8Xl3qKvpZ50D8RQyrx6jXI7lqPW3OkrFr_F37QLXLT-Ghy3WqAs-pUOLzrPljYLKHq5hZXTZMpGJs3I-FRbR3YVDO6RiYhZCWRaTuzHZ3m3fDIqwtBRjsY3IkaWwFXffcKk-VHD2jVU1PU"/>
                <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/40 to-transparent"></div>
            </div>
            
            <div class="relative z-10 p-6 space-y-1">
                <span class="font-mono text-[10px] text-accent uppercase font-bold tracking-widest">Architecture</span>
                <p class="text-white font-display font-bold text-lg">Nexus Hub Node</p>
            </div>
        </div>
        
        <!-- Item 3 -->
        <div class="relative group overflow-hidden rounded-3xl glass-card h-80 flex flex-col justify-end" data-aos="fade-up" data-aos-delay="200">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAO0hAKYpYnY0w3Ui6cHQW5jrqT-DqCFuDjIGQhNn6AJOD4_EYyorbPmwmPwwQ8-qpqSkVmObZBaw0xijxqqKbju62v45JDxWnocva1RmRF1bSk-U1cRm_425jq6-kb7PO8kLQ_l__u9SnMjNbtbW54wB1wB2uW1Ij-_JvglAyu7fG9sfTh5v5B-_-gJSsbWOT_LqUKfShYrjY_LME8g3WSyD04h1mmRHlY2On39heM1m4Uwtmo2Nn5LBeJWizsy92uuWi37L7ZQIIm"/>
                <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/40 to-transparent"></div>
            </div>
            
            <div class="relative z-10 p-6 space-y-1">
                <span class="font-mono text-[10px] text-secondary uppercase font-bold tracking-widest">Interfaces</span>
                <p class="text-white font-display font-bold text-lg">Core UI Modules</p>
            </div>
        </div>
        
        <!-- Item 4 (Horizontal) -->
        <div class="md:col-span-2 relative group overflow-hidden rounded-3xl glass-card h-64 flex flex-col justify-end" data-aos="fade-up" data-aos-delay="300">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3TU9fTlKXu1elDhpi3ZxxRpjQBXcXTbhakDezAN9RXDjbzzI-UD62XKmDnZHi4da8DllnhdgjQCfA-ynxQGXHewaGLJl9dKIQI0q0S6tOf4I14IPKrGeMEABXz8cGBgXhamBmFhVmDzZdZPhYLD2k-bJdcFaxpajyHLe4-b1TOzzNLhISc9IpRmAYAKwR0kiINDTFbTx-mjYzlTt0Jl7qvPdf7fzZxEFBOQ57Ab5Hjyn6uqIJN3HWsO5USNY3S496hgJhJBeEPIMJ"/>
                <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/40 to-transparent"></div>
            </div>
            
            <div class="relative z-10 p-6 space-y-1">
                <span class="font-mono text-[10px] text-secondary uppercase font-bold tracking-widest">Connectivity</span>
                <p class="text-white font-display font-bold text-lg">Global AI Mesh</p>
            </div>
        </div>
        
        <!-- Item 5 -->
        <div class="relative group overflow-hidden rounded-3xl glass-card h-80 flex flex-col justify-end" data-aos="fade-up" data-aos-delay="400">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDL8hiDVyjbX9u9Z_vGZHaMCZsHsRqXhM4qc_GDkIFXrW2tta77a9-pZWjB4EGpCRDTU2rHHIY316qONv1r9wNc8onDs2gAjpL4OFqCEaUV7I_Tl8KtcR3oEtZfUCerTRql4s_lznffby77SqRAZyfshFyoOryN0GaOopHMPHNdglVNQHdTra-BPI8nUberug1lhrdieaqCfA_nsHRtIncl6HatIoLudzQF8_NwkH8PFTrNOh6yVT7LEtDzGH5z4hKcCzA0Vn0C_PXa"/>
                <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/40 to-transparent"></div>
            </div>
            
            <div class="relative z-10 p-6 space-y-1">
                <span class="font-mono text-[10px] text-accent uppercase font-bold tracking-widest">Materials</span>
                <p class="text-white font-display font-bold text-lg">Fluid Dynamics</p>
            </div>
        </div>
        
        <!-- Item 6 -->
        <div class="relative group overflow-hidden rounded-3xl glass-card h-80 flex flex-col justify-end" data-aos="fade-up" data-aos-delay="500">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAprKWWP7jMDDidlK-9d4y0EamQnpZdK8WeuvLdXLB-Aag_MYvM-yj_TGk8GdlOs7ft21lNOpLO4m4grzw1W2OvtbXKS-xFHZ2KLcDU98PLOpQNKg1VO_Rjqfa16Y-usnV1cAh3cd1-59Z72NrO6KeUA9YNDAzuIknh4pj5MpfXBIsCr8eC3L6bePBkD8upuRVWceEBWBmjLBR2aQSlxLeA7797Mbni71I90YHhZAGeR8VhV5VtZhk1qTDRBItmmF2vo93DWgsoaBM"/>
                <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/40 to-transparent"></div>
            </div>
            
            <div class="relative z-10 p-6 space-y-1">
                <span class="font-mono text-[10px] text-secondary uppercase font-bold tracking-widest">Hardware</span>
                <p class="text-white font-display font-bold text-lg">Quantum Pro 1</p>
            </div>
        </div>
        
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
