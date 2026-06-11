<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>AI-Solutions | Secure Gateway</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Geist:wght@600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        body {
            background-color: #0b1326;
            overflow-y: auto;
        }
        .glass-card {
            background: rgba(23, 31, 51, 0.6);
            backdrop-filter: blur(24px);
            border: 1px solid rgba(210, 187, 255, 0.15);
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.5), inset 0 0 20px rgba(255, 255, 255, 0.02);
        }
        .atmospheric-glow {
            position: fixed;
            width: 80vw;
            height: 80vw;
            border-radius: 50%;
            filter: blur(140px);
            z-index: -1;
            opacity: 0.2;
            pointer-events: none;
        }
        .glow-1 { top: -25%; left: -15%; background: radial-gradient(circle, #7c3aed 0%, transparent 70%); }
        .glow-2 { bottom: -25%; right: -15%; background: radial-gradient(circle, #03b5d3 0%, transparent 70%); }
        
        .terminal-cursor {
            display: inline-block;
            width: 6px;
            height: 1.1em;
            background: #d2bbff;
            vertical-align: middle;
            animation: blink 1s step-end infinite;
            margin-left: 4px;
        }
        @keyframes blink { 50% { opacity: 0; } }
        
        .scan-line {
            width: 100%;
            height: 4px;
            background: linear-gradient(to right, transparent, rgba(210, 187, 255, 0.1), transparent);
            position: absolute;
            top: 0;
            animation: scan 6s linear infinite;
            z-index: 10;
            pointer-events: none;
        }
        @keyframes scan {
            from { top: -10%; }
            to { top: 110%; }
        }

        .input-glow:focus-within {
            box-shadow: 0 0 15px rgba(124, 58, 237, 0.15);
        }

        .shimmer-button {
            position: relative;
            overflow: hidden;
        }
        .shimmer-button::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            transform: rotate(45deg);
            transition: 0.5s;
        }
        .shimmer-button:hover::after {
            left: 120%;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed": "#eaddff",
                        "secondary-container": "#03b5d3",
                        "on-primary-fixed": "#25005a",
                        "surface-container-low": "#131b2e",
                        "secondary": "#4cd7f6",
                        "secondary-fixed": "#acedff",
                        "on-primary-container": "#ede0ff",
                        "tertiary-fixed": "#ffd8e7",
                        "on-tertiary-fixed-variant": "#85145a",
                        "outline": "#958da1",
                        "on-surface": "#dae2fd",
                        "on-secondary-fixed-variant": "#004e5c",
                        "on-secondary": "#003640",
                        "surface-variant": "#2d3449",
                        "background": "#0b1326",
                        "surface-container": "#171f33",
                        "primary": "#d2bbff",
                        "on-primary-fixed-variant": "#5a00c6",
                        "secondary-fixed-dim": "#4cd7f6",
                        "inverse-primary": "#732ee4",
                        "surface-tint": "#d2bbff",
                        "error": "#ffb4ab",
                        "on-error": "#690005",
                        "inverse-on-surface": "#283044",
                        "on-primary": "#3f008e",
                        "on-error-container": "#ffdad6",
                        "surface-container-highest": "#2d3449",
                        "surface-bright": "#31394d",
                        "outline-variant": "#4a4455",
                        "tertiary-fixed-dim": "#ffafd3",
                        "on-surface-variant": "#ccc3d8",
                        "tertiary": "#ffafd3",
                        "on-tertiary-container": "#ffdce9",
                        "on-background": "#dae2fd",
                        "surface-container-lowest": "#060e20",
                        "surface": "#0b1326",
                        "primary-container": "#7c3aed",
                        "surface-dim": "#0b1326",
                        "on-secondary-fixed": "#001f26",
                        "surface-container-high": "#222a3d",
                        "on-tertiary": "#620040",
                        "on-secondary-container": "#00424e",
                        "inverse-surface": "#dae2fd",
                        "on-tertiary-fixed": "#3d0026",
                        "error-container": "#93000a",
                        "tertiary-container": "#ae397b",
                        "primary-fixed-dim": "#d2bbff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "section-gap": "120px",
                        "margin-mobile": "20px",
                        "container-max": "1280px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "display-lg": ["Geist"],
                        "label-mono": ["JetBrains Mono"],
                        "display-lg-mobile": ["Geist"],
                        "body-base": ["Inter"],
                        "headline-md": ["Geist"]
                    },
                    "fontSize": {
                        "display-lg": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700"}],
                        "label-mono": ["12px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "display-lg-mobile": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-base": ["16px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                        "headline-md": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
</head>
<body class="font-body-base text-on-surface min-h-screen flex flex-col items-center justify-center p-4 md:p-gutter relative overflow-y-auto">
<!-- Background Elements -->
<div class="atmospheric-glow glow-1"></div>
<div class="atmospheric-glow glow-2"></div>
<div class="fixed inset-0 z-[-2] pointer-events-none">
<div class="absolute inset-0 bg-[#0b1326] opacity-90"></div>
<div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-surface-container-low/20 via-transparent to-transparent"></div>
</div>
<div class="w-full max-w-lg flex flex-col items-center z-10">
<!-- Top Branding -->
<header class="mb-8 text-center animate-fade-in">
<div class="flex items-center justify-center space-x-3 mb-3">
<div class="p-2.5 rounded-xl bg-gradient-to-br from-primary/20 to-secondary/10 border border-primary/20 backdrop-blur-md">
<span class="material-symbols-outlined text-primary text-3xl leading-none" data-weight="fill">hub</span>
</div>
<h1 class="font-display-lg text-3xl md:text-4xl text-on-surface tracking-tight">AI-Solutions</h1>
</div>
<p class="text-on-surface-variant font-label-mono text-[10px] tracking-[0.3em] opacity-60 uppercase">System Administration Node V4.2</p>
</header>
<!-- Main Secure Gateway -->
<main class="w-full relative group">
<!-- Card outer glow -->
<div class="absolute -inset-0.5 bg-gradient-to-r from-primary-container/30 to-secondary-container/30 rounded-[2rem] blur-xl opacity-30 group-hover:opacity-50 transition duration-1000"></div>
<div class="glass-card rounded-[1.5rem] overflow-hidden relative border border-white/5">
<div class="scan-line"></div>
<!-- Terminal Header -->
<div class="bg-white/5 px-8 py-4 flex items-center justify-between border-b border-white/10">
<div class="flex items-center space-x-2">
<span class="w-3 h-3 rounded-full bg-error/60"></span>
<span class="w-3 h-3 rounded-full bg-tertiary-container/60"></span>
<span class="w-3 h-3 rounded-full bg-secondary-container/60"></span>
</div>
<div class="font-label-mono text-label-mono text-on-surface-variant/80 flex items-center">
<span class="material-symbols-outlined text-[14px] mr-2">security</span>
                    SECURE_GATEWAY.V3
                    <span class="terminal-cursor"></span>
</div>
</div>
<!-- Login Content -->
<div class="p-10 space-y-8">
@if (session('error'))
    <div class="p-4 rounded-xl bg-error/10 border border-error/20 text-error text-xs font-label-mono flex items-center space-x-2 animate-pulse">
        <span class="material-symbols-outlined text-[16px]">warning</span>
        <span>{{ session('error') }}</span>
    </div>
@endif
@if ($errors->any())
    <div class="p-4 rounded-xl bg-error/10 border border-error/20 text-error text-xs font-label-mono flex flex-col space-y-1">
        @foreach ($errors->all() as $error)
            <div class="flex items-center space-x-2">
                <span class="material-symbols-outlined text-[16px]">error_outline</span>
                <span>{{ $error }}</span>
            </div>
        @endforeach
    </div>
@endif
<form class="space-y-8" action="{{ route('admin.login.submit') }}" method="POST">
    @csrf
<!-- Admin ID Input -->
<div class="space-y-3 group/field">
<label class="font-label-mono text-xs text-primary/80 flex items-center tracking-wider uppercase">
<span class="material-symbols-outlined text-[16px] mr-2">alternate_email</span>
                            Admin Identifier
                        </label>
<div class="relative input-glow transition-all duration-300">
<input class="w-full bg-surface-container-highest/20 border border-white/10 focus:border-primary/50 focus:ring-4 focus:ring-primary/5 rounded-xl px-4 py-4 text-on-surface placeholder:text-outline/40 transition-all font-label-mono text-sm" name="email" value="{{ old('email') }}" placeholder="user_id@enterprise.ai" type="email" required autocomplete="email"/>
</div>
</div>
<!-- Access Key Input -->
<div class="space-y-3 group/field">
<label class="font-label-mono text-xs text-primary/80 flex items-center tracking-wider uppercase">
<span class="material-symbols-outlined text-[16px] mr-2">lock</span>
                            Access Key
                        </label>
<div class="relative input-glow transition-all duration-300">
<input class="w-full bg-surface-container-highest/20 border border-white/10 focus:border-primary/50 focus:ring-4 focus:ring-primary/5 rounded-xl px-4 py-4 text-on-surface placeholder:text-outline/40 transition-all font-label-mono text-sm tracking-widest" name="password" placeholder="••••••••••••••••" type="password" required autocomplete="current-password"/>
</div>
</div>
<!-- Security Toggles -->
<div class="grid grid-cols-1 gap-4">
<div class="flex items-center justify-between p-4 rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 transition-colors cursor-pointer group/toggle" onclick="toggleSwitch(this)">
<div class="flex items-center space-x-3">
<span class="material-symbols-outlined text-secondary/80">verified_user</span>
<span class="text-sm font-medium text-on-surface/90">Two-Factor Authentication</span>
</div>
<button class="toggle-btn w-10 h-5 bg-surface-variant rounded-full relative transition-colors focus:outline-none" type="button">
<span class="toggle-dot absolute left-1 top-1 w-3 h-3 bg-white rounded-full transition-all duration-300 transform translate-x-0"></span>
</button>
</div>
<div class="flex items-center justify-between p-4 rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 transition-colors cursor-pointer group/toggle" onclick="toggleSwitch(this)">
<div class="flex items-center space-x-3">
<span class="material-symbols-outlined text-on-surface-variant/70">key</span>
<span class="text-sm font-medium text-on-surface/90">Hardware Key Activation</span>
</div>
<button class="toggle-btn w-10 h-5 bg-surface-variant rounded-full relative transition-colors focus:outline-none" type="button">
<span class="toggle-dot absolute left-1 top-1 w-3 h-3 bg-white rounded-full transition-all duration-300 transform translate-x-0"></span>
</button>
</div>
</div>
<!-- Submit Action -->
<div class="pt-2">
<button type="submit" class="shimmer-button w-full py-5 bg-gradient-to-r from-primary-container to-secondary-container text-on-primary-container font-headline-md font-bold rounded-xl shadow-[0_10px_30px_-10px_rgba(124,58,237,0.4)] hover:shadow-primary-container/40 transition-all active:scale-[0.98] flex items-center justify-center space-x-3 group/btn">
<span class="tracking-widest">LOG IN / INITIALIZE SESSION</span>
<span class="material-symbols-outlined group-hover/btn:rotate-12 transition-transform duration-300">bolt</span>
</button>
</div>
</form>
</div>
<!-- Card Footer -->
<div class="bg-black/20 px-10 py-5 flex items-center justify-between border-t border-white/5">
<div class="flex items-center space-x-3">
<div class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
</div>
<span class="font-label-mono text-[10px] text-green-400/70 tracking-tighter uppercase">Encryption Active: AES-256</span>
</div>
<a class="font-label-mono text-[10px] text-outline/60 hover:text-primary transition-colors uppercase tracking-widest" href="#">Forgot Access?</a>
</div>
</div>
</main>
<!-- Global System Status -->
<footer class="mt-12 w-full max-w-lg">
<div class="flex flex-col md:flex-row justify-between items-center text-on-surface-variant/30 font-label-mono text-[10px] gap-6 px-4">
<div class="flex items-center space-x-6">
<span class="hover:text-primary/60 transition-colors cursor-help flex items-center"><span class="w-1 h-1 bg-current rounded-full mr-1.5 opacity-50"></span>LATENCY: 14MS</span>
<span class="hover:text-primary/60 transition-colors cursor-help flex items-center"><span class="w-1 h-1 bg-current rounded-full mr-1.5 opacity-50"></span>CORE: STABLE</span>
<span class="hover:text-primary/60 transition-colors cursor-help flex items-center"><span class="w-1 h-1 bg-current rounded-full mr-1.5 opacity-50"></span>IDENTITY: ON</span>
</div>
<div class="flex items-center space-x-4">
<span class="tracking-tight uppercase">© 2024 AI-SOLUTIONS</span>
<div class="w-px h-2.5 bg-white/10"></div>
<span>V_3.44.1</span>
</div>
</div>
</footer>
</div>
<script>
    function toggleSwitch(container) {
        const btn = container.querySelector('.toggle-btn');
        const dot = container.querySelector('.toggle-dot');
        
        const isActive = btn.classList.toggle('bg-primary-container');
        if (isActive) {
            dot.style.transform = 'translateX(20px)';
        } else {
            dot.style.transform = 'translateX(0)';
        }
    }

    // Interactive mouse glow effect
    document.addEventListener('mousemove', (e) => {
        const glow1 = document.querySelector('.glow-1');
        const glow2 = document.querySelector('.glow-2');
        
        const x = e.clientX / window.innerWidth;
        const y = e.clientY / window.innerHeight;
        
        glow1.style.transform = `translate(${x * 60}px, ${y * 60}px)`;
        glow2.style.transform = `translate(${x * -60}px, ${y * -60}px)`;
    });
</script>
</body></html>