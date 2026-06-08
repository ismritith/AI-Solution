<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;600;700&amp;family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        body {
            background-color: #0b1326;
            color: #dae2fd;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        .glass-card {
            background: rgba(30, 41, 59, 0.5);
            backdrop-filter: blur(24px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            border-left: 1px solid rgba(255, 255, 255, 0.1);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .btn-gradient {
            background: linear-gradient(135deg, #7c3aed 0%, #4cd7f6 100%);
            transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
        }
        .btn-gradient:hover {
            box-shadow: 0 0 20px rgba(124, 58, 237, 0.5);
            transform: translateY(-1px);
        }
        .form-input-focus:focus {
            outline: none;
            border-color: #d2bbff;
            box-shadow: 0 0 0 2px rgba(210, 187, 255, 0.2);
        }
    </style>
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
</head>
<body class="flex min-h-screen">
<!-- SideNavBar Anchor -->
<aside class="h-screen w-72 flex-col fixed left-0 top-0 bg-surface-container-low/50 backdrop-blur-3xl border-r border-white/10 shadow-2xl flex py-base z-50">
<div class="px-gutter mb-12">
<h1 class="font-headline-md text-headline-md font-bold text-primary">Aether AI</h1>
<p class="font-body-base text-on-surface-variant opacity-70">Enterprise Suite</p>
</div>
<nav class="flex-1 space-y-2 px-4">
<a class="flex items-center gap-4 px-4 py-3 rounded-xl style_inactive_navigation font-medium hover:bg-surface-container-high hover:text-primary transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="analytics">analytics</span>
<span>Analytics</span>
</a>
<!-- Active Tab: Events (assuming registration is part of Events/Inquiries) -->
<a class="flex items-center gap-4 px-4 py-3 rounded-xl text-primary font-bold border-r-4 border-primary bg-primary/10 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="event">event</span>
<span>Events</span>
</a>
<a class="flex items-center gap-4 px-4 py-3 rounded-xl style_inactive_navigation font-medium hover:bg-surface-container-high hover:text-primary transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="mail">mail</span>
<span>Inquiries</span>
</a>
<a class="flex items-center gap-4 px-4 py-3 rounded-xl style_inactive_navigation font-medium hover:bg-surface-container-high hover:text-primary transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="folder_copy">folder_copy</span>
<span>Projects</span>
</a>
<a class="flex items-center gap-4 px-4 py-3 rounded-xl style_inactive_navigation font-medium hover:bg-surface-container-high hover:text-primary transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="rate_review">rate_review</span>
<span>Feedback</span>
</a>
</nav>
<div class="mt-auto px-4 space-y-2 pb-gutter">
<a class="flex items-center gap-4 px-4 py-3 rounded-xl style_inactive_navigation font-medium hover:bg-surface-container-high hover:text-primary transition-all" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span>Settings</span>
</a>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="ml-72 flex-1 relative min-h-screen">
<!-- Background Animation -->

<!-- TopNavBar Anchor -->
<header class="fixed top-0 right-0 w-[calc(100%-18rem)] z-50 bg-surface/40 backdrop-blur-2xl border-b border-white/10 shadow-sm flex justify-between items-center px-gutter h-16">
<div class="flex items-center gap-4">
<span class="font-headline-md text-headline-md font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Aether Dash</span>
<div class="hidden md:flex items-center bg-surface-container-high/50 rounded-full px-4 py-1 border border-white/5 focus-within:ring-2 focus-within:ring-primary/50 transition-all">
<span class="material-symbols-outlined text-sm opacity-50 mr-2" data-icon="search">search</span>
<input class="bg-transparent border-none text-label-mono focus:ring-0 w-48" placeholder="Search Registrations..." type="text"/>
</div>
</div>
<div class="flex items-center gap-6">
<button class="relative hover:text-secondary transition-colors">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
<span class="absolute -top-1 -right-1 w-2 h-2 bg-error rounded-full"></span>
</button>
<div class="flex items-center gap-3 pl-4 border-l border-white/10">
<div class="text-right">
<p class="font-label-mono text-label-mono text-on-surface">Admin Root</p>
<p class="text-[10px] opacity-50 uppercase tracking-widest">Administrator</p>
</div>
<img alt="Administrator Profile" class="w-10 h-10 rounded-full border-2 border-primary/20" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4dDINhun4d-67Dw2-oL3K6wvpyKvKOU3jIe6WMik_i7IMIrd04JIaytIwWNOowBoJ-eELl5A907MfdNCv_OCpPjSYfhvIAKD82p_L3cHQtc3FzrvUTKDbfEM8i2CFNfhc8dyObTzdETReb0xdXOkY9Ggw2LBzUOiRZOWHg3rpnce7cScT0JofvjcHRXClf97MzIuzyqHSf1u9LtGG0TqXaFZrJ3A7pFWzA_WRTF5MSGD9wryhhDI2SNn0QxvPd6l4Q54oYh3fnzcB"/>
</div>
</div>
</header>
<!-- Page Content -->
<section class="pt-32 px-gutter pb-section-gap max-w-5xl mx-auto relative z-10">
<div class="flex justify-between items-end mb-12">
<div>
<h2 class="font-headline-md text-headline-md text-on-surface mb-2">Registration Manager</h2>
<p class="font-body-base text-on-surface-variant">Create or modify high-tier event access records.</p>
</div>
<div class="flex bg-surface-container-high p-1 rounded-xl border border-white/10">
<button class="px-6 py-2 rounded-lg font-medium transition-all duration-200 bg-primary text-on-primary shadow-lg" id="toggleTeam" onclick="switchMode('team')">Team</button>
<button class="px-6 py-2 rounded-lg font-medium transition-all duration-200 text-on-surface-variant hover:text-on-surface" id="toggleIndividual" onclick="switchMode('individual')">Individual</button>
</div>
</div>
<!-- Main Form Card -->
<div class="glass-card rounded-3xl p-gutter bg-surface-container-low border border-outline/20">
<form class="space-y-10" id="registrationForm">
<!-- Section: Core Details -->
<div class="space-y-6">
<div class="flex items-center gap-3 border-b border-white/5 pb-4">
<span class="material-symbols-outlined text-primary" data-icon="assignment_ind">assignment_ind</span>
<h3 class="font-headline-md text-body-base font-bold tracking-wide uppercase opacity-90">Registration Details</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<!-- Field: Team Name (Team Only) -->
<div class="space-y-2" id="teamNameField">
<label class="font-label-mono text-label-mono text-on-surface-variant ml-1">TEAM NAME</label>
<input class="w-full bg-surface-container-low border border-outline-variant rounded-xl px-4 py-3 text-on-surface form-input-focus transition-all" placeholder="e.g. Cyberdyne Systems" type="text"/>
</div>
<!-- Field: Full Name (Individual Only) -->
<div class="space-y-2 hidden" id="fullNameField">
<label class="font-label-mono text-label-mono text-on-surface-variant ml-1">FULL NAME</label>
<input class="w-full bg-surface-container-low border border-outline-variant rounded-xl px-4 py-3 text-on-surface form-input-focus transition-all" placeholder="John Connor" type="text"/>
</div>
<div class="space-y-2">
<label class="font-label-mono text-label-mono text-on-surface-variant ml-1">EVENT SELECTION</label>
<select class="w-full bg-surface-container-low border border-outline-variant rounded-xl px-4 py-3 text-on-surface form-input-focus transition-all appearance-none cursor-pointer">
<option>Global AI Summit 2024</option>
<option>Quantum Computing Workshop</option>
<option>Neural Network Expo</option>
<option>Blockchain Innovation Fair</option>
</select>
</div>
<div class="space-y-2" id="emailField">
<label class="font-label-mono text-label-mono text-on-surface-variant ml-1" id="emailLabel">TEAM LEAD EMAIL</label>
<input class="w-full bg-surface-container-low border border-outline-variant rounded-xl px-4 py-3 text-on-surface form-input-focus transition-all" placeholder="lead@aether.ai" type="email"/>
</div>
<div class="space-y-2" id="teamSizeField">
<label class="font-label-mono text-label-mono text-on-surface-variant ml-1">TEAM SIZE</label>
<input class="w-full bg-surface-container-low border border-outline-variant rounded-xl px-4 py-3 text-on-surface form-input-focus transition-all" max="20" min="2" onchange="updateMemberRows(this.value)" type="number" value="3"/>
</div>
<div class="space-y-2 hidden" id="passTypeField">
<label class="font-label-mono text-label-mono text-on-surface-variant ml-1">PASS TYPE</label>
<select class="w-full bg-surface-container-low border border-outline-variant rounded-xl px-4 py-3 text-on-surface form-input-focus transition-all appearance-none cursor-pointer">
<option>Free Pass (Limited)</option>
<option>Standard Delegate</option>
<option>VIP All-Access</option>
</select>
</div>
</div>
</div>
<!-- Section: Team Members Dynamic Repeater -->
<div class="space-y-6" id="memberSection">
<div class="flex items-center justify-between border-b border-white/5 pb-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary" data-icon="groups">groups</span>
<h3 class="font-headline-md text-body-base font-bold tracking-wide uppercase opacity-90">Team Members</h3>
</div>
<span class="font-label-mono text-[10px] text-on-surface-variant bg-surface-container-high px-3 py-1 rounded-full border border-white/5">DYNAMIC ROSTER</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="memberRepeater">
<!-- Rows injected by JS -->
</div>
</div>
<!-- Form Actions -->
<div class="pt-8 flex items-center justify-end gap-4 border-t border-white/5">
<button class="px-8 py-3 rounded-xl font-medium text-on-surface-variant hover:bg-white/5 transition-all" type="button">Discard Changes</button>
<button class="px-10 py-3 rounded-xl font-bold text-on-primary btn-gradient flex items-center gap-2" type="submit">
<span class="material-symbols-outlined text-base" data-icon="check_circle">check_circle</span>
                            Confirm Registration
                        </button>
</div>
</form>
</div>
<!-- Contextual Info Cards (Bento Style) -->
<div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="glass-card p-6 rounded-2xl border border-white/5">
<span class="material-symbols-outlined text-tertiary mb-4" data-icon="security">security</span>
<h4 class="font-body-base font-bold text-on-surface mb-1">Encrypted Records</h4>
<p class="text-sm text-on-surface-variant opacity-70">All registration data is hashed and stored in our secure neural vault.</p>
</div>
<div class="glass-card p-6 rounded-2xl border border-white/5">
<span class="material-symbols-outlined text-secondary mb-4" data-icon="auto_awesome">auto_awesome</span>
<h4 class="font-body-base font-bold text-on-surface mb-1">Auto-Generation</h4>
<p class="text-sm text-on-surface-variant opacity-70">QR passes and digital badges will be generated instantly upon confirmation.</p>
</div>
<div class="glass-card p-6 rounded-2xl border border-white/5">
<span class="material-symbols-outlined text-primary mb-4" data-icon="monitoring">monitoring</span>
<h4 class="font-body-base font-bold text-on-surface mb-1">Quota Check</h4>
<p class="text-sm text-on-surface-variant opacity-70">Aether AI automatically balances attendance limits against venue capacity.</p>
</div>
</div>
</section>
</main>
<script>
        function switchMode(mode) {
            const teamBtn = document.getElementById('toggleTeam');
            const individualBtn = document.getElementById('toggleIndividual');
            const teamNameField = document.getElementById('teamNameField');
            const fullNameField = document.getElementById('fullNameField');
            const teamSizeField = document.getElementById('teamSizeField');
            const passTypeField = document.getElementById('passTypeField');
            const memberSection = document.getElementById('memberSection');
            const emailLabel = document.getElementById('emailLabel');

            if (mode === 'team') {
                teamBtn.classList.add('bg-primary', 'text-on-primary', 'shadow-lg');
                teamBtn.classList.remove('text-on-surface-variant');
                individualBtn.classList.remove('bg-primary', 'text-on-primary', 'shadow-lg');
                individualBtn.classList.add('text-on-surface-variant');

                teamNameField.classList.remove('hidden');
                fullNameField.classList.add('hidden');
                teamSizeField.classList.remove('hidden');
                passTypeField.classList.add('hidden');
                memberSection.classList.remove('hidden');
                emailLabel.innerText = 'TEAM LEAD EMAIL';
            } else {
                individualBtn.classList.add('bg-primary', 'text-on-primary', 'shadow-lg');
                individualBtn.classList.remove('text-on-surface-variant');
                teamBtn.classList.remove('bg-primary', 'text-on-primary', 'shadow-lg');
                teamBtn.classList.add('text-on-surface-variant');

                teamNameField.classList.add('hidden');
                fullNameField.classList.remove('hidden');
                teamSizeField.classList.add('hidden');
                passTypeField.classList.remove('hidden');
                memberSection.classList.add('hidden');
                emailLabel.innerText = 'PARTICIPANT EMAIL';
            }
        }

        function updateMemberRows(count) {
            const container = document.getElementById('memberRepeater');
            container.innerHTML = '';
            for (let i = 1; i <= count; i++) {
                const div = document.createElement('div');
                div.className = 'space-y-2 group';
                div.innerHTML = `
                    <label class="font-label-mono text-[10px] text-on-surface-variant ml-1 flex items-center gap-2 group-focus-within:text-secondary transition-colors">
                        MEMBER #${i} NAME
                        <span class="w-1 h-1 bg-secondary rounded-full"></span>
                    </label>
                    <div class="relative">
                        <input type="text" placeholder="Full Member Name" class="w-full bg-surface-container-high/30 border border-outline-variant rounded-xl px-4 py-3 text-on-surface form-input-focus transition-all pl-10">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-sm opacity-30" data-icon="person_add">person_add</span>
                    </div>
                `;
                container.appendChild(div);
            }
        }

        // Initialize with default team size
        updateMemberRows(3);

        // Simple form interception
        document.getElementById('registrationForm').addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = e.target.querySelector('button[type="submit"]');
            const originalHtml = btn.innerHTML;
            btn.innerHTML = '<span class="material-symbols-outlined animate-spin" data-icon="sync">sync</span> Processing...';
            btn.disabled = true;
            
            setTimeout(() => {
                btn.innerHTML = '<span class="material-symbols-outlined" data-icon="done_all">done_all</span> Registration Saved';
                btn.classList.remove('btn-gradient');
                btn.classList.add('bg-success-container', 'text-on-success-container');
                setTimeout(() => {
                    btn.innerHTML = originalHtml;
                    btn.disabled = false;
                    btn.classList.add('btn-gradient');
                }, 3000);
            }, 1500);
        });
    </script>
</body></html>