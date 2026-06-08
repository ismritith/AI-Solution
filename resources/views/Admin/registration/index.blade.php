<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Aether AI | Registrations Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Geist:wght@600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary": "#ffafd3",
                    "on-secondary-fixed": "#001f26",
                    "on-secondary": "#003640",
                    "outline-variant": "#4a4455",
                    "on-primary-container": "#ede0ff",
                    "on-primary-fixed-variant": "#5a00c6",
                    "on-surface-variant": "#ccc3d8",
                    "surface-bright": "#31394d",
                    "background": "#0b1326",
                    "inverse-surface": "#dae2fd",
                    "on-tertiary-fixed": "#3d0026",
                    "on-tertiary-container": "#ffdce9",
                    "on-primary": "#3f008e",
                    "secondary-fixed": "#acedff",
                    "primary-fixed": "#eaddff",
                    "on-secondary-container": "#00424e",
                    "inverse-primary": "#732ee4",
                    "tertiary-container": "#ae397b",
                    "surface": "#0b1326",
                    "outline": "#958da1",
                    "surface-dim": "#0b1326",
                    "primary": "#d2bbff",
                    "on-primary-fixed": "#25005a",
                    "secondary-fixed-dim": "#4cd7f6",
                    "secondary": "#4cd7f6",
                    "on-tertiary": "#620040",
                    "on-error": "#690005",
                    "surface-variant": "#2d3449",
                    "primary-fixed-dim": "#d2bbff",
                    "inverse-on-surface": "#283044",
                    "tertiary-fixed": "#ffd8e7",
                    "tertiary-fixed-dim": "#ffafd3",
                    "surface-tint": "#d2bbff",
                    "surface-container-highest": "#2d3449",
                    "on-error-container": "#ffdad6",
                    "surface-container-low": "#131b2e",
                    "on-background": "#dae2fd",
                    "on-surface": "#dae2fd",
                    "error": "#ffb4ab",
                    "surface-container-lowest": "#060e20",
                    "secondary-container": "#03b5d3",
                    "on-tertiary-fixed-variant": "#85145a",
                    "primary-container": "#7c3aed",
                    "on-secondary-fixed-variant": "#004e5c",
                    "surface-container": "#171f33",
                    "error-container": "#93000a",
                    "surface-container-high": "#222a3d"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "gutter": "24px",
                    "margin-mobile": "20px",
                    "base": "8px",
                    "container-max": "1280px",
                    "section-gap": "120px"
            },
            "fontFamily": {
                    "headline-md": ["Geist"],
                    "display-lg-mobile": ["Geist"],
                    "body-base": ["Inter"],
                    "display-lg": ["Geist"],
                    "label-mono": ["JetBrains Mono"]
            },
            "fontSize": {
                    "headline-md": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "display-lg-mobile": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-base": ["16px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "display-lg": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700"}],
                    "label-mono": ["12px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            background-color: #0b1326;
            color: #dae2fd;
            -webkit-font-smoothing: antialiased;
        }
        .glass-card {
            background: rgba(30, 41, 59, 0.4);
            backdrop-filter: blur(24px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            border-left: 1px solid rgba(255, 255, 255, 0.1);
            border-right: 1px solid rgba(255, 255, 255, 0.05);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        .accent-glow {
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(124, 58, 237, 0.15) 0%, rgba(124, 58, 237, 0) 70%);
            z-index: -1;
            pointer-events: none;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
    </style>
</head>
<body class="font-body-base text-body-base overflow-x-hidden">
<!-- Background Elements -->

<div class="accent-glow top-20 right-10"></div>
<div class="accent-glow bottom-20 left-10 opacity-50"></div>
<!-- Side Navigation Bar (Anchor) -->
<aside class="h-screen w-72 flex-col fixed left-0 top-0 bg-surface-container-low/50 backdrop-blur-3xl border-r border-white/10 shadow-2xl flex py-base z-50">
<div class="px-6 py-8">
<h1 class="font-headline-md text-headline-md font-bold text-primary">Aether AI</h1>
<p class="text-on-surface-variant text-xs font-label-mono mt-1 uppercase tracking-widest opacity-60">Enterprise Suite</p>
</div>
<nav class="flex-1 px-4 space-y-2 overflow-y-auto scrollbar-hide">
<!-- Navigation Items Mapping -->
<a class="flex items-center gap-3 px-4 py-3 rounded-xl style_inactive_navigation hover:bg-surface-container-high hover:text-primary transition-all duration-200 group active:scale-95" href="#">
<span class="material-symbols-outlined">analytics</span>
<span>Analytics</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-primary font-bold border-r-4 border-primary bg-primary/10 active:scale-95 transition-transform" href="#">
<span class="material-symbols-outlined">infrared</span>
<span>Inquiries</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl style_inactive_navigation hover:bg-surface-container-high hover:text-primary transition-all duration-200 group" href="#">
<span class="material-symbols-outlined">event</span>
<span>Events</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl style_inactive_navigation hover:bg-surface-container-high hover:text-primary transition-all duration-200 group" href="#">
<span class="material-symbols-outlined">article</span>
<span>Blogs</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl style_inactive_navigation hover:bg-surface-container-high hover:text-primary transition-all duration-200 group" href="#">
<span class="material-symbols-outlined">folder_copy</span>
<span>Projects</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl style_inactive_navigation hover:bg-surface-container-high hover:text-primary transition-all duration-200 group" href="#">
<span class="material-symbols-outlined">photo_library</span>
<span>Gallery</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl style_inactive_navigation hover:bg-surface-container-high hover:text-primary transition-all duration-200 group" href="#">
<span class="material-symbols-outlined">rate_review</span>
<span>Feedback</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl style_inactive_navigation hover:bg-surface-container-high hover:text-primary transition-all duration-200 group" href="#">
<span class="material-symbols-outlined">monitor_heart</span>
<span>Health</span>
</a>
</nav>
<div class="px-4 py-6 border-t border-white/5 space-y-1">
<button class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-primary-container to-secondary py-3 rounded-xl text-on-primary font-bold shadow-lg shadow-primary/20 hover:shadow-primary/40 transition-all mb-4">
<span class="material-symbols-outlined">add</span>
<span>New Analysis</span>
</button>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-on-surface-variant hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm">Settings</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-on-surface-variant hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">help_outline</span>
<span class="text-sm">Support</span>
</a>
</div>
</aside>
<!-- Main Content Area -->
<main class="ml-72 min-h-screen">
<!-- Top Navigation Bar (Anchor) -->
<header class="fixed top-0 right-0 w-[calc(100%-18rem)] z-40 bg-surface/40 backdrop-blur-2xl border-b border-white/10 flex justify-between items-center px-gutter h-16">
<div class="flex items-center gap-6">
<h2 class="font-headline-md text-headline-md font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Aether Dash</h2>
<div class="relative group">
<input class="bg-surface-container-low/50 border border-white/10 rounded-full pl-10 pr-4 py-1.5 text-sm focus:ring-2 focus:ring-primary/50 focus:outline-none w-64 transition-all duration-300" placeholder="Search Registrations..." type="text"/>
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-lg">search</span>
</div>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-on-surface-variant hover:text-primary transition-colors active:scale-90">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="p-2 text-on-surface-variant hover:text-primary transition-colors active:scale-90">
<span class="material-symbols-outlined">dark_mode</span>
</button>
<div class="h-8 w-px bg-white/10 mx-2"></div>
<div class="flex items-center gap-3">
<img alt="Admin Profile" class="w-8 h-8 rounded-full border border-primary/30 object-cover" data-alt="Close-up portrait of a professional male administrator in a high-tech environment with soft blue and violet ambient lighting. He has a focused expression, wearing modern business-casual attire. The background is a soft-focus office with minimalist digital interfaces and glass partitions, embodying a sleek AI-Solution brand aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6Fe0PW7IWpu7FJLiA6d814kVjsEsQK5uMAhOwAaKSZbWk-D_nWIBPdl0C1mciz9Y9uzvYqofo-VUfqcJF7SMZb2yATUX5Ddj9HE4fdOAh18gV3w7eBnWrEwov4kYxnZFOLtA3G4o4uKKAyxG_LutaDIJAhqjkXXUD04f8cmUurPP0cKevh9j2Rx-N37XkPGTMUOnf-_y6c7srr3keeMw5YB9zR5x4r1K1bldEtulg1gHetaOzBl7Of3Cp55so2FRjCn8deJ2QnOVN"/>
</div>
</div>
</header>
<!-- Page Canvas -->
<div class="pt-24 px-gutter pb-12">
<!-- Header Section -->
<div class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
<div>
<nav class="flex gap-2 text-label-mono text-on-surface-variant mb-2">
<span>Dashboard</span>
<span>/</span>
<span class="text-primary">Registrations</span>
</nav>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold">Event Registrations</h3>
</div>
<div class="flex gap-4 p-1 bg-surface-container-lowest border border-white/5 rounded-2xl">
<button class="px-6 py-2.5 rounded-xl text-sm font-semibold bg-primary text-on-primary shadow-lg shadow-primary/30 transition-all duration-300" id="tab-team" onclick="switchTab('team')">Team Registrations</button>
<button class="px-6 py-2.5 rounded-xl text-sm font-semibold text-on-surface-variant hover:text-primary transition-all duration-300" id="tab-pass" onclick="switchTab('pass')">Pass Claims</button>
</div>
</div>
<!-- Bento Statistics Grid -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
<div class="glass-card p-6 rounded-3xl col-span-1 border-l-4 border-l-primary">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">group</span>
</div>
<span class="text-label-mono text-[10px] text-green-400 bg-green-400/10 px-2 py-0.5 rounded-full">+12%</span>
</div>
<p class="text-on-surface-variant text-sm font-medium mb-1">Total Teams</p>
<p class="text-3xl font-bold text-on-surface">1,284</p>
</div>
<div class="glass-card p-6 rounded-3xl col-span-1 border-l-4 border-l-secondary">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-secondary/10 rounded-lg text-secondary">
<span class="material-symbols-outlined">confirmation_number</span>
</div>
<span class="text-label-mono text-[10px] text-green-400 bg-green-400/10 px-2 py-0.5 rounded-full">+4.2%</span>
</div>
<p class="text-on-surface-variant text-sm font-medium mb-1">Passes Claimed</p>
<p class="text-3xl font-bold text-on-surface">3,902</p>
</div>
<div class="glass-card p-6 rounded-3xl col-span-1 border-l-4 border-l-tertiary">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-tertiary/10 rounded-lg text-tertiary">
<span class="material-symbols-outlined">pending_actions</span>
</div>
<span class="text-label-mono text-[10px] text-on-surface-variant bg-white/5 px-2 py-0.5 rounded-full">Hold</span>
</div>
<p class="text-on-surface-variant text-sm font-medium mb-1">Pending Approval</p>
<p class="text-3xl font-bold text-on-surface">142</p>
</div>
<div class="glass-card p-6 rounded-3xl col-span-1 border-l-4 border-l-primary-container">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary-container/10 rounded-lg text-primary-container">
<span class="material-symbols-outlined">equalizer</span>
</div>
<span class="text-label-mono text-[10px] text-green-400 bg-green-400/10 px-2 py-0.5 rounded-full">Optimal</span>
</div>
<p class="text-on-surface-variant text-sm font-medium mb-1">Conversion Rate</p>
<p class="text-3xl font-bold text-on-surface">68.4%</p>
</div>
</div>
<!-- Table Container -->
<div class="glass-card rounded-[2rem] overflow-hidden shadow-2xl relative">
<!-- Section 1: Team Registrations -->
<div class="transition-opacity duration-300" id="section-team">
<div class="px-8 py-6 flex flex-col md:flex-row justify-between items-center gap-4 border-b border-white/5">
<h4 class="font-headline-md text-xl font-bold text-on-surface">Team Registrations</h4>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-4 py-2 bg-surface-container-high rounded-xl text-sm font-medium hover:bg-surface-container-highest transition-colors">
<span class="material-symbols-outlined text-sm">filter_alt</span>
                                Filter
                            </button>
<button class="flex items-center gap-2 px-4 py-2 bg-surface-container-high rounded-xl text-sm font-medium hover:bg-surface-container-highest transition-colors">
<span class="material-symbols-outlined text-sm">file_download</span>
                                Export
                            </button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-surface-container-lowest/50 text-label-mono text-on-surface-variant uppercase tracking-wider text-[11px]">
<tr>
<th class="px-8 py-4 font-semibold">Team Name</th>
<th class="px-8 py-4 font-semibold">Event</th>
<th class="px-8 py-4 font-semibold text-center">Members</th>
<th class="px-8 py-4 font-semibold">Lead Contact</th>
<th class="px-8 py-4 font-semibold">Status</th>
<th class="px-8 py-4 font-semibold text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-white/5">
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center font-bold text-primary">N</div>
<span class="font-semibold text-on-surface">Nebula Sync</span>
</div>
</td>
<td class="px-8 py-5 text-on-surface-variant">Global Hack 2024</td>
<td class="px-8 py-5 text-center">
<span class="px-2 py-1 bg-surface-container rounded text-sm">4</span>
</td>
<td class="px-8 py-5">
<div class="flex flex-col">
<span class="text-sm font-medium">Alex Rivera</span>
<span class="text-xs text-on-surface-variant opacity-60">alex@nebula.io</span>
</div>
</td>
<td class="px-8 py-5">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-label-mono bg-green-500/10 text-green-400 border border-green-500/20">
<span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                                            Approved
                                        </span>
</td>
<td class="px-8 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-primary/20 rounded-lg text-primary transition-colors"><span class="material-symbols-outlined text-sm">visibility</span></button>
<button class="p-2 hover:bg-secondary/20 rounded-lg text-secondary transition-colors"><span class="material-symbols-outlined text-sm">edit</span></button>
<button class="p-2 hover:bg-error/20 rounded-lg text-error transition-colors"><span class="material-symbols-outlined text-sm">delete</span></button>
</div>
</td>
</tr>
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-gradient-to-br from-tertiary/20 to-primary-container/20 flex items-center justify-center font-bold text-tertiary">Q</div>
<span class="font-semibold text-on-surface">Quantum Bits</span>
</div>
</td>
<td class="px-8 py-5 text-on-surface-variant">AI Innovation Cup</td>
<td class="px-8 py-5 text-center">
<span class="px-2 py-1 bg-surface-container rounded text-sm">3</span>
</td>
<td class="px-8 py-5">
<div class="flex flex-col">
<span class="text-sm font-medium">Sarah Chen</span>
<span class="text-xs text-on-surface-variant opacity-60">sarah.c@qbits.dev</span>
</div>
</td>
<td class="px-8 py-5">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-label-mono bg-amber-500/10 text-amber-400 border border-amber-500/20">
<span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                                            Pending
                                        </span>
</td>
<td class="px-8 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-primary/20 rounded-lg text-primary transition-colors"><span class="material-symbols-outlined text-sm">visibility</span></button>
<button class="p-2 hover:bg-secondary/20 rounded-lg text-secondary transition-colors"><span class="material-symbols-outlined text-sm">edit</span></button>
<button class="p-2 hover:bg-error/20 rounded-lg text-error transition-colors"><span class="material-symbols-outlined text-sm">delete</span></button>
</div>
</td>
</tr>
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-gradient-to-br from-secondary/20 to-primary/20 flex items-center justify-center font-bold text-secondary">C</div>
<span class="font-semibold text-on-surface">Cyber Pulse</span>
</div>
</td>
<td class="px-8 py-5 text-on-surface-variant">Global Hack 2024</td>
<td class="px-8 py-5 text-center">
<span class="px-2 py-1 bg-surface-container rounded text-sm">5</span>
</td>
<td class="px-8 py-5">
<div class="flex flex-col">
<span class="text-sm font-medium">Marcus Thorne</span>
<span class="text-xs text-on-surface-variant opacity-60">m.thorne@pulse.com</span>
</div>
</td>
<td class="px-8 py-5">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-label-mono bg-green-500/10 text-green-400 border border-green-500/20">
<span class="w-1.5 h-1.5 rounded-full bg-green-400"></span>
                                            Approved
                                        </span>
</td>
<td class="px-8 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-primary/20 rounded-lg text-primary transition-colors"><span class="material-symbols-outlined text-sm">visibility</span></button>
<button class="p-2 hover:bg-secondary/20 rounded-lg text-secondary transition-colors"><span class="material-symbols-outlined text-sm">edit</span></button>
<button class="p-2 hover:bg-error/20 rounded-lg text-error transition-colors"><span class="material-symbols-outlined text-sm">delete</span></button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Section 2: Pass Claims (Hidden by default) -->
<div class="hidden transition-opacity duration-300" id="section-pass">
<div class="px-8 py-6 flex flex-col md:flex-row justify-between items-center gap-4 border-b border-white/5">
<h4 class="font-headline-md text-xl font-bold text-on-surface">Pass Claims</h4>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-4 py-2 bg-surface-container-high rounded-xl text-sm font-medium hover:bg-surface-container-highest transition-colors">
<span class="material-symbols-outlined text-sm">search</span>
                                Scan QR
                            </button>
<button class="flex items-center gap-2 px-4 py-2 bg-surface-container-high rounded-xl text-sm font-medium hover:bg-surface-container-highest transition-colors">
<span class="material-symbols-outlined text-sm">mail</span>
                                Resend All
                            </button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-surface-container-lowest/50 text-label-mono text-on-surface-variant uppercase tracking-wider text-[11px]">
<tr>
<th class="px-8 py-4 font-semibold">Claimant</th>
<th class="px-8 py-4 font-semibold">Event</th>
<th class="px-8 py-4 font-semibold">Pass Type</th>
<th class="px-8 py-4 font-semibold">Date Claimed</th>
<th class="px-8 py-4 font-semibold text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-white/5">
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<img alt="Profile" class="w-10 h-10 rounded-full object-cover" data-alt="Close-up professional portrait of a woman with a confident smile, wearing glasses and a smart-casual blazer. The lighting is crisp and modern, featuring soft violet and turquoise background glows that align with a high-end tech aesthetic. High-quality photography with shallow depth of field." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgZL9A28CQcJxSHn9waV8I79D29oEoH1VxUXDqMkbLDkcA6yRvd2dOsn5skJDmyw33ExesX1t-N98WDbuk3KvP5JonRnPcqGgSOUkcVoo6K2jT-_9zdr6h9EagrTSG-sALhpMw-XQ2VH5IbIOdVlo7s47j_e5ORLeFu-Jbz_XRn06N4dTLphs3YmQRTAHfHJ38aeg6Z36hDX1ytygqaSj8UwrfeemTpvQKNcw1Uo52vyhvpqSwx4C2hE-VIoGPFP0pPUsq42ROXu2H"/>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">Elena Soros</span>
<span class="text-xs text-on-surface-variant opacity-60">elena.s@fintech.io</span>
</div>
</div>
</td>
<td class="px-8 py-5 text-on-surface-variant">Architecture Masterclass</td>
<td class="px-8 py-5">
<span class="px-3 py-1 rounded-full text-[10px] font-label-mono bg-tertiary/10 text-tertiary border border-tertiary/20 uppercase">VIP Access</span>
</td>
<td class="px-8 py-5 font-label-mono text-xs opacity-60">OCT 14, 2023 • 14:22</td>
<td class="px-8 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-primary/20 rounded-lg text-primary transition-colors"><span class="material-symbols-outlined text-sm">visibility</span></button>
<button class="p-2 hover:bg-secondary/20 rounded-lg text-secondary transition-colors"><span class="material-symbols-outlined text-sm">edit</span></button>
<button class="p-2 hover:bg-error/20 rounded-lg text-error transition-colors"><span class="material-symbols-outlined text-sm">delete</span></button>
</div>
</td>
</tr>
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined">person</span>
</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">David Miller</span>
<span class="text-xs text-on-surface-variant opacity-60">dave.miller@gmail.com</span>
</div>
</div>
</td>
<td class="px-8 py-5 text-on-surface-variant">Design Systems Summit</td>
<td class="px-8 py-5">
<span class="px-3 py-1 rounded-full text-[10px] font-label-mono bg-white/5 text-on-surface-variant border border-white/10 uppercase">Free Pass</span>
</td>
<td class="px-8 py-5 font-label-mono text-xs opacity-60">OCT 15, 2023 • 09:45</td>
<td class="px-8 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-primary/20 rounded-lg text-primary transition-colors"><span class="material-symbols-outlined text-sm">visibility</span></button>
<button class="p-2 hover:bg-secondary/20 rounded-lg text-secondary transition-colors"><span class="material-symbols-outlined text-sm">edit</span></button>
<button class="p-2 hover:bg-error/20 rounded-lg text-error transition-colors"><span class="material-symbols-outlined text-sm">delete</span></button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Footer Pagination -->
<div class="px-8 py-4 bg-surface-container-low/30 border-t border-white/5 flex justify-between items-center">
<span class="text-xs text-on-surface-variant">Showing 1-10 of 1,284 entries</span>
<div class="flex gap-1">
<button class="p-1.5 hover:bg-white/5 rounded-lg text-on-surface-variant disabled:opacity-30" disabled="">
<span class="material-symbols-outlined text-lg">chevron_left</span>
</button>
<button class="w-8 h-8 flex items-center justify-center bg-primary text-on-primary rounded-lg text-xs font-bold">1</button>
<button class="w-8 h-8 flex items-center justify-center hover:bg-white/5 rounded-lg text-xs">2</button>
<button class="w-8 h-8 flex items-center justify-center hover:bg-white/5 rounded-lg text-xs">3</button>
<button class="p-1.5 hover:bg-white/5 rounded-lg text-on-surface-variant">
<span class="material-symbols-outlined text-lg">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
</main>
<script>
        function switchTab(type) {
            const teamBtn = document.getElementById('tab-team');
            const passBtn = document.getElementById('tab-pass');
            const teamSec = document.getElementById('section-team');
            const passSec = document.getElementById('section-pass');

            if (type === 'team') {
                // UI Updates
                teamBtn.className = "px-6 py-2.5 rounded-xl text-sm font-semibold bg-primary text-on-primary shadow-lg shadow-primary/30 transition-all duration-300";
                passBtn.className = "px-6 py-2.5 rounded-xl text-sm font-semibold text-on-surface-variant hover:text-primary transition-all duration-300";
                
                // Visibility
                teamSec.classList.remove('hidden');
                passSec.classList.add('hidden');
            } else {
                // UI Updates
                passBtn.className = "px-6 py-2.5 rounded-xl text-sm font-semibold bg-primary text-on-primary shadow-lg shadow-primary/30 transition-all duration-300";
                teamBtn.className = "px-6 py-2.5 rounded-xl text-sm font-semibold text-on-surface-variant hover:text-primary transition-all duration-300";
                
                // Visibility
                passSec.classList.remove('hidden');
                teamSec.classList.add('hidden');
            }
        }

        // Micro-interactions for glass cards
        document.querySelectorAll('.glass-card').forEach(card => {
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });
    </script>
</body></html>