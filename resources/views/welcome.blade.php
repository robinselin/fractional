<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fractional.sh — Fractional AI + Product Co-founder</title>

  <meta name="description" content="I help founders ship the right product, faster — with AI wired into your product, your workflows, and your team.">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://fractional.sh">
  <meta property="og:title" content="fractional.sh — Fractional AI + Product Co-founder">
  <meta property="og:description" content="I help founders ship the right product, faster — with AI wired into your product, your workflows, and your team.">
  <meta property="og:image" content="https://fractional.sh/og-image.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="fractional.sh — Fractional AI + Product Co-founder">
  <meta name="twitter:description" content="I help founders ship the right product, faster — with AI wired into your product, your workflows, and your team.">
  <meta name="twitter:image" content="https://fractional.sh/og-image.png">

  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @font-face {
      font-family: 'ConstructMono';
      src: url('/fonts/ConstructMono.otf') format('opentype');
      font-weight: normal;
      font-style: normal;
      font-display: swap;
    }
    @keyframes terminal-blink {
      0%, 49% { opacity: 1; }
      50%, 100% { opacity: 0; }
    }
    .animate-blink {
      animation: terminal-blink 1s step-end infinite;
    }
    html {
      scroll-behavior: smooth;
    }
    h1, h2, h3 {
      font-family: 'ConstructMono', ui-monospace, monospace;
      text-transform: uppercase;
      letter-spacing: -0.02em;
    }
  </style>
</head>
<body class="min-h-screen bg-zinc-950 text-zinc-50 selection:bg-emerald-500/30 selection:text-emerald-200 font-sans overflow-x-hidden relative">

  <!-- Topo Contour Canvas (hero only) -->
  <canvas id="topo-canvas" class="fixed top-0 left-0 w-full z-0 pointer-events-none" style="height: 100vh; -webkit-mask-image: linear-gradient(to bottom, black 50%, transparent 100%); mask-image: linear-gradient(to bottom, black 50%, transparent 100%);"></canvas>

  <!-- Urgency Banner -->
  <div id="urgency-banner" class="fixed top-0 w-full z-50 bg-emerald-500 text-zinc-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-2 flex justify-center items-center gap-2 sm:gap-3 font-mono text-[10px] sm:text-sm tracking-wide">
      <span class="w-1.5 h-1.5 rounded-full bg-zinc-950 animate-pulse shrink-0"></span>
      <span><strong>1 spot open for {{ 'Q' . ceil(now()->month / 3) . ' ' . now()->year }}</strong><span class="hidden sm:inline"> — currently booked through {{ now()->endOfQuarter()->translatedFormat('F') }}</span></span>
      <button data-cal-link="robin-white/20min" data-cal-namespace="20min" data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":"true"}' class="underline underline-offset-2 hover:no-underline font-bold ml-1 shrink-0 cursor-pointer">Grab it →</button>
    </div>
  </div>

  <!-- Navigation / Header -->
  <header id="main-header" class="fixed top-[32px] sm:top-[36px] w-full z-50 transition-all duration-300 border-b bg-transparent border-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3 sm:py-4 grid grid-cols-3 items-center">
      <div class="flex items-center gap-4 sm:gap-6">
        <div class="font-bold tracking-tighter text-lg sm:text-xl flex items-center gap-2" style="font-family: 'ConstructMono', monospace;">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-500 sm:w-5 sm:h-5"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" x2="20" y1="19" y2="19" class="animate-blink"></line></svg>
          fractional.sh
        </div>
      </div>
      <div class="hidden lg:block text-center text-xs font-mono text-zinc-500 uppercase tracking-widest">Fractional AI + Product Co-founder</div>
      <div class="flex items-center justify-end">
        <button data-cal-link="robin-white/20min" data-cal-namespace="20min" data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":"true"}' class="text-xs sm:text-sm font-mono hover:text-emerald-400 transition-colors cursor-pointer">
          Book a Call ↗
        </button>
      </div>
    </div>
  </header>

  <main class="relative z-10 pt-40 lg:pt-56 pb-24 max-w-7xl mx-auto px-6">

    <!-- HERO SECTION -->
    <section class="mb-40">
      <div class="flex flex-col md:flex-row gap-6 mb-8">
        <div class="inline-flex items-center gap-2 px-2.5 py-1 border border-zinc-800 bg-zinc-900/50 backdrop-blur-sm rounded-full font-mono text-[10px] text-zinc-400 uppercase tracking-widest w-fit">
          Fractional AI + Product Co-founder
        </div>
        <div class="inline-flex items-center gap-2 px-2.5 py-1 border border-zinc-800 bg-zinc-900/50 backdrop-blur-sm rounded-full font-mono text-[10px] text-zinc-400 uppercase tracking-widest w-fit">
          15 Years Shipping Products
        </div>
        <div class="inline-flex items-center gap-2 px-2.5 py-1 border border-zinc-800 bg-zinc-900/50 backdrop-blur-sm rounded-full font-mono text-[10px] text-zinc-400 uppercase tracking-widest w-fit">
          <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
          Status: Accepting Clients
        </div>
      </div>

      <h1 class="text-5xl md:text-7xl lg:text-8xl font-normal leading-[0.95] mb-12" style="letter-spacing: -0.03em;">
        Cut through the AI noise. <span class="text-emerald-500">Ship what matters.</span>
      </h1>

      <div class="grid md:grid-cols-2 gap-12 items-end">
        <p class="text-xl md:text-2xl text-zinc-400 leading-relaxed max-w-2xl font-light drop-shadow-md">
          I help founders ship the right product, faster — with AI wired into your product, your workflows, and your team. <span class="text-zinc-100 font-medium drop-shadow-md">Not with a slide deck. By showing up and building it with you.</span>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 md:justify-end">
          <button data-cal-link="robin-white/20min" data-cal-namespace="20min" data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":"true"}' class="inline-flex items-center justify-center gap-2 px-6 py-4 font-mono text-sm uppercase tracking-wider transition-all duration-300 bg-zinc-100 text-zinc-950 hover:bg-emerald-400 hover:text-zinc-950 cursor-pointer">
            Book a Call
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
          </button>
          <a href="sms:+17143159146?&body=Hey%20Robin%2C%20found%20you%20on%20fractional.sh%20%E2%80%94%20trying%20to%20figure%20out%20where%20AI%20fits%20in%20our%20company%2C%20and%20I%20might%20need%20some%20help." class="inline-flex items-center justify-center gap-2 px-6 py-4 font-mono text-sm uppercase tracking-wider transition-all duration-300 bg-zinc-900/50 border border-zinc-700 text-zinc-100 hover:border-zinc-300 hover:bg-zinc-900 backdrop-blur-sm">
            Text Me
          </a>
        </div>
      </div>
    </section>

    <!-- 01 THE PROBLEM -->
    <section class="mb-32 scroll-mt-32" id="problem">
      <div class="flex items-center gap-4 mb-12 pb-4 border-b border-zinc-800/60">
        <span class="font-mono text-emerald-500 text-sm tracking-widest">01</span>
        <h2 class="font-mono text-zinc-400 text-sm tracking-widest uppercase">The Problem</h2>
      </div>
      <div class="grid lg:grid-cols-2 gap-16">
        <h3 class="text-3xl md:text-4xl font-medium leading-tight">
          You know AI changes everything. You're just not sure what to do about it.
        </h3>
        <div class="space-y-8 text-lg text-zinc-400 font-light leading-relaxed">
          <ul class="space-y-4">
            <li class="flex items-start gap-3">
              <span class="text-emerald-500 mt-1 shrink-0">></span>
              <span>Your best people are stuck in process, not building</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-emerald-500 mt-1 shrink-0">></span>
              <span>You're in meetings that shouldn't need you</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-emerald-500 mt-1 shrink-0">></span>
              <span>Your competitors are shipping faster with smaller teams</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-emerald-500 mt-1 shrink-0">></span>
              <span>The tools exist — you just don't have someone to wire them in</span>
            </li>
          </ul>
          <p class="pl-6 border-l-2 border-emerald-500 text-zinc-200">
            You don't need a 6-month "AI strategy" from a consulting firm. You need someone who's shipped this before — who shows up, makes decisions, and builds.
          </p>
        </div>
      </div>
    </section>

    <!-- 02 OPERATOR -->
    <section class="mb-32 scroll-mt-32" id="about">
      <div class="flex items-center gap-4 mb-12 pb-4 border-b border-zinc-800/60">
        <span class="font-mono text-emerald-500 text-sm tracking-widest">02</span>
        <h2 class="font-mono text-zinc-400 text-sm tracking-widest uppercase">Operator</h2>
      </div>
      <div class="grid md:grid-cols-12 gap-12 items-start">
        <div class="md:col-span-4 lg:col-span-3">
          <div class="relative group">
            <!-- Outer frame -->
            <div class="aspect-square border-2 border-zinc-700 p-[3px]">
              <!-- Inner frame -->
              <div class="w-full h-full border border-zinc-600 overflow-hidden relative">
                <img src="/images/robin-white.jpg" alt="Robin White" class="w-full h-full object-cover" />
                <!-- Crosshair marks -->
                <div class="absolute inset-0 pointer-events-none">
                  <div class="absolute top-0 left-1/2 -translate-x-px w-[1px] h-4 bg-emerald-500/40"></div>
                  <div class="absolute bottom-0 left-1/2 -translate-x-px w-[1px] h-4 bg-emerald-500/40"></div>
                  <div class="absolute left-0 top-1/2 -translate-y-px w-4 h-[1px] bg-emerald-500/40"></div>
                  <div class="absolute right-0 top-1/2 -translate-y-px w-4 h-[1px] bg-emerald-500/40"></div>
                </div>
                <!-- Corner brackets -->
                <div class="absolute top-2 left-2 w-4 h-4 border-t border-l border-emerald-500/30"></div>
                <div class="absolute top-2 right-2 w-4 h-4 border-t border-r border-emerald-500/30"></div>
                <div class="absolute bottom-2 left-2 w-4 h-4 border-b border-l border-emerald-500/30"></div>
                <div class="absolute bottom-2 right-2 w-4 h-4 border-b border-r border-emerald-500/30"></div>
                <!-- Hover overlay -->
                <div class="absolute inset-0 bg-emerald-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
              </div>
            </div>
            <!-- ID label + socials below -->
            <div class="flex justify-between items-center mt-3 font-mono text-[10px] tracking-[0.2em] uppercase">
              <div>
                <span class="text-emerald-500">ID: Robin_White</span>
                <div class="text-zinc-500 mt-1">Irvine, CA · {{ now('America/Los_Angeles')->format('T') }}</div>
              </div>
              <div class="flex items-center gap-3">
                <a href="https://www.linkedin.com/in/robinswhite/" target="_blank" rel="noopener noreferrer" class="text-zinc-600 hover:text-emerald-400 transition-colors">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
                <a href="https://x.com/robinwhite" target="_blank" rel="noopener noreferrer" class="text-zinc-600 hover:text-emerald-400 transition-colors">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="md:col-span-8 lg:col-span-9 text-xl md:text-2xl text-zinc-300 font-light leading-relaxed space-y-8">
          <p>
            I'm Robin White. I've spent 15 years building products — from IC to CTO to Chief Innovation Officer. I've shipped across industries, led engineering teams, and built my own companies along the way.
          </p>
          <p>
            Now I work with a handful of founders as a fractional AI + product co-founder.
          </p>
          <p class="text-lg text-zinc-400">
            That means I sit in your meetings, scope your features, find where AI creates real leverage, and help your team ship — fast.
          </p>
        </div>
      </div>
    </section>

    <!-- 03 ENGAGEMENTS -->
    <section class="mb-32 scroll-mt-32" id="engagements">
      <div class="flex items-center gap-4 mb-12 pb-4 border-b border-zinc-800/60">
        <span class="font-mono text-emerald-500 text-sm tracking-widest">03</span>
        <h2 class="font-mono text-zinc-400 text-sm tracking-widest uppercase">Engagements</h2>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="border border-emerald-500/30 bg-emerald-950/40 backdrop-blur-sm p-8 flex flex-col relative overflow-hidden group hover:border-emerald-500/60 transition-all duration-300">
          <div class="absolute top-0 left-0 w-full h-1 bg-emerald-500"></div>
          <div class="font-mono text-sm text-emerald-500 mb-4 uppercase tracking-widest border-b border-zinc-800 pb-4">1 Week Embed</div>
          <h3 class="text-2xl font-medium mb-2">AI Kickstart</h3>
          <div class="font-mono text-lg mb-6">$7–10K</div>
          <p class="text-zinc-400 font-light text-sm leading-relaxed flex-grow">
            One week, embedded with your team. I audit your workflows, find where AI creates real leverage, scope the first win, and build it. You walk away with a working prototype and a clear roadmap.
          </p>
        </div>

        <!-- Card 2 -->
        <div class="border border-emerald-500/30 bg-emerald-950/40 backdrop-blur-sm p-8 flex flex-col relative overflow-hidden group hover:border-emerald-500/60 transition-all duration-300">
          <div class="absolute top-0 left-0 w-full h-1 bg-emerald-500"></div>
          <div class="font-mono text-sm text-emerald-500 mb-4 uppercase tracking-widest border-b border-zinc-800 pb-4">~8 Hrs/Wk</div>
          <h3 class="text-2xl font-medium mb-2">Fractional Co-founder</h3>
          <div class="font-mono text-lg mb-6">$10K<span class="text-zinc-500 text-sm">/MO</span></div>
          <p class="text-zinc-400 font-light text-sm leading-relaxed flex-grow">
            Ongoing product and AI leadership. I join your standups, scope features, make the hard calls on your roadmap, and keep your team shipping. The experienced founder in the room you can't justify hiring full-time.
          </p>
        </div>

        <!-- Card 3 -->
        <div class="border border-emerald-500/30 bg-emerald-950/40 backdrop-blur-sm p-8 flex flex-col relative overflow-hidden group hover:border-emerald-500/60 transition-all duration-300">
          <div class="absolute top-0 left-0 w-full h-1 bg-emerald-500"></div>
          <div class="font-mono text-sm text-emerald-500 mb-4 uppercase tracking-widest border-b border-zinc-800 pb-4">Project-Based</div>
          <h3 class="text-2xl font-medium mb-2">Product Sprint</h3>
          <div class="font-mono text-lg mb-6">$15–25K</div>
          <p class="text-zinc-400 font-light text-sm leading-relaxed flex-grow">
            You have something specific — a feature, an AI integration, an internal tool. I scope it tight, build it fast, and ship it in weeks. No committees, no scope creep.
          </p>
        </div>
      </div>
    </section>

    <!-- 04 CAPABILITIES -->
    <section class="mb-32 scroll-mt-32" id="capabilities">
      <div class="flex items-center gap-4 mb-12 pb-4 border-b border-zinc-800/60">
        <span class="font-mono text-emerald-500 text-sm tracking-widest">04</span>
        <h2 class="font-mono text-zinc-400 text-sm tracking-widest uppercase">Capabilities</h2>
      </div>
      <div class="space-y-0 divide-y divide-zinc-800/60">
        <div class="grid md:grid-cols-12 gap-6 md:gap-12 py-10 first:pt-0 group">
          <div class="md:col-span-4">
            <h3 class="text-2xl md:text-3xl font-medium tracking-tight">Product</h3>
          </div>
          <div class="md:col-span-8">
            <p class="text-lg text-zinc-400 font-light leading-relaxed">
              I know what to build, what to cut, and how to ship it in weeks instead of months. I've done zero-to-one more times than most people have done zero.
            </p>
          </div>
        </div>
        <div class="grid md:grid-cols-12 gap-6 md:gap-12 py-10 group">
          <div class="md:col-span-4">
            <h3 class="text-2xl md:text-3xl font-medium tracking-tight">AI Integration</h3>
          </div>
          <div class="md:col-span-8">
            <p class="text-lg text-zinc-400 font-light leading-relaxed">
              Not theory. I run my own companies on AI daily — engineering workflows, automation, internal tooling. I know what actually works and what's hype.
            </p>
          </div>
        </div>
        <div class="grid md:grid-cols-12 gap-6 md:gap-12 py-10 group">
          <div class="md:col-span-4">
            <h3 class="text-2xl md:text-3xl font-medium tracking-tight">Speed</h3>
          </div>
          <div class="md:col-span-8">
            <p class="text-lg text-zinc-400 font-light leading-relaxed">
              Most delays aren't technical — they're indecision. I make the calls other people committee to death.
            </p>
          </div>
        </div>
        <div class="grid md:grid-cols-12 gap-6 md:gap-12 py-10 group">
          <div class="md:col-span-4">
            <h3 class="text-2xl md:text-3xl font-medium tracking-tight">Efficiency</h3>
          </div>
          <div class="md:col-span-8">
            <p class="text-lg text-zinc-400 font-light leading-relaxed">
              I find the 20% of your workflow eating 80% of your time and eliminate it. AI, automation, or just better decisions — whatever gets you unstuck fastest.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- 05 OPERATING PRINCIPLES -->
    <section class="mb-32 scroll-mt-32" id="principles">
      <div class="flex items-center gap-4 mb-12 pb-4 border-b border-zinc-800/60">
        <span class="font-mono text-emerald-500 text-sm tracking-widest">05</span>
        <h2 class="font-mono text-zinc-400 text-sm tracking-widest uppercase">Operating Principles</h2>
      </div>
      <div class="border-2 border-zinc-700 p-[3px]">
        <div class="border border-zinc-600 bg-zinc-950 p-8 md:p-16 relative">
          <!-- Corner brackets -->
          <div class="absolute top-3 left-3 w-5 h-5 border-t border-l border-emerald-500/30"></div>
          <div class="absolute top-3 right-3 w-5 h-5 border-t border-r border-emerald-500/30"></div>
          <div class="absolute bottom-3 left-3 w-5 h-5 border-b border-l border-emerald-500/30"></div>
          <div class="absolute bottom-3 right-3 w-5 h-5 border-b border-r border-emerald-500/30"></div>

          <div class="font-mono text-xs text-emerald-500 tracking-[0.2em] uppercase mb-8">// Operating Directive</div>
          <h2 class="text-3xl md:text-5xl font-medium mb-8 tracking-tight text-white">This isn't consulting.</h2>
          <div class="font-mono text-sm md:text-base uppercase tracking-widest text-zinc-500 mb-8 border-b border-zinc-800 pb-8">
            No decks. No frameworks. No 90-day discovery phase.
          </div>
          <p class="text-xl md:text-3xl font-light leading-snug text-zinc-300">
            I show up, I build, and things ship. If I'm not adding obvious value, fire me.<br>
            <span class="font-medium mt-4 block text-white">No contracts, no guilt.</span>
          </p>
        </div>
      </div>
    </section>

    <!-- 06 FIT CHECK -->
    <section class="mb-32 scroll-mt-32" id="fit">
      <div class="flex items-center gap-4 mb-12 pb-4 border-b border-zinc-800/60">
        <span class="font-mono text-emerald-500 text-sm tracking-widest">06</span>
        <h2 class="font-mono text-zinc-400 text-sm tracking-widest uppercase">Fit Check</h2>
      </div>
      <div class="grid md:grid-cols-2 gap-8 lg:gap-16">

        <!-- Good Fit -->
        <div class="border border-emerald-900/50 bg-emerald-950/40 backdrop-blur-sm p-8">
          <div class="font-mono text-emerald-500 mb-8 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 16 4-4-4-4"></path><path d="m6 8-4 4 4 4"></path><path d="m14.5 4-5 16"></path></svg>
            ↳ [ DEPLOY IF ]
          </div>
          <ul class="space-y-6">
            <li class="flex items-start gap-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-500 shrink-0 mt-1"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
              <span class="text-zinc-300 text-lg font-light">You know AI matters but aren't sure where to start</span>
            </li>
            <li class="flex items-start gap-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-500 shrink-0 mt-1"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
              <span class="text-zinc-300 text-lg font-light">Your dev team is drowning in AI tool options</span>
            </li>
            <li class="flex items-start gap-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-500 shrink-0 mt-1"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
              <span class="text-zinc-300 text-lg font-light">You want a product founder in the room — not a contractor</span>
            </li>
            <li class="flex items-start gap-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-500 shrink-0 mt-1"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
              <span class="text-zinc-300 text-lg font-light">Speed is your competitive advantage</span>
            </li>
          </ul>
        </div>

        <!-- Bad Fit -->
        <div class="border border-red-900/30 bg-red-950/20 backdrop-blur-sm p-8">
          <div class="font-mono text-red-500 mb-8 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg>
            ↳ [ ABORT IF ]
          </div>
          <ul class="space-y-6">
            <li class="flex items-start gap-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500/70 shrink-0 mt-1"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg>
              <span class="text-zinc-400 text-lg font-light">You're looking for a chatbot vendor</span>
            </li>
            <li class="flex items-start gap-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500/70 shrink-0 mt-1"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg>
              <span class="text-zinc-400 text-lg font-light">You want a strategy PDF</span>
            </li>
            <li class="flex items-start gap-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500/70 shrink-0 mt-1"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg>
              <span class="text-zinc-400 text-lg font-light">Your team isn't ready to actually build</span>
            </li>
            <li class="flex items-start gap-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500/70 shrink-0 mt-1"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg>
              <span class="text-zinc-400 text-lg font-light">Every decision needs three sign-offs</span>
            </li>
          </ul>
        </div>

      </div>
    </section>

  </main>

  <!-- FOOTER & QUALIFIER FORM -->
  <footer class="border-t border-zinc-800 bg-zinc-900/60 backdrop-blur-md relative z-10" id="contact">
    <div class="max-w-7xl mx-auto px-6 py-24">
      <div class="text-center mb-24">
        <div class="font-mono text-4xl md:text-6xl text-zinc-800 mb-8">※</div>
        <h2 class="text-5xl md:text-7xl font-medium tracking-tight mb-8">Let's talk.</h2>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6 mb-8">
          <button data-cal-link="robin-white/20min" data-cal-namespace="20min" data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":"true"}' class="inline-flex items-center gap-2 px-8 py-4 font-mono text-sm uppercase tracking-wider transition-all duration-300 bg-zinc-100 text-zinc-950 hover:bg-emerald-400 hover:text-zinc-950 cursor-pointer">
            Book a Call
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
          </button>
        </div>
        <p class="text-zinc-500 font-mono text-sm mb-4">
          or text <a href="sms:+17143159146?&body=Hey%20Robin%2C%20found%20you%20on%20fractional.sh%20%E2%80%94%20trying%20to%20figure%20out%20where%20AI%20fits%20in%20our%20company%2C%20and%20I%20might%20need%20some%20help." class="text-zinc-300 hover:text-emerald-400 transition-colors">+1 714-315-9146</a>
        </p>
        <p class="text-zinc-500 text-lg font-light max-w-lg mx-auto">
          30-minute call. No pitch. Just figuring out if there's a fit.
        </p>
      </div>

      <div class="pt-12 border-t border-zinc-800 flex flex-col md:flex-row justify-between items-center gap-6 font-mono text-xs text-zinc-500 uppercase tracking-widest">
        <div class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" x2="20" y1="19" y2="19"></line></svg>
          fractional.sh
        </div>
        <div class="flex items-center gap-4">
          <span>◆</span>
          <a href="mailto:robin@fractional.sh" class="hover:text-emerald-400 transition-colors">robin@fractional.sh</a>
          <span>◆</span>
          <a href="sms:+17143159146?&body=Hey%20Robin%2C%20found%20you%20on%20fractional.sh%20%E2%80%94%20trying%20to%20figure%20out%20where%20AI%20fits%20in%20our%20company%2C%20and%20I%20might%20need%20some%20help." class="hover:text-emerald-400 transition-colors">+1 714-315-9146</a>
          <span>◆</span>
        </div>
        <div>© 2026</div>
      </div>
    </div>
  </footer>

  <!-- Interactive Scripts -->
  <script>
    // --- Scroll & Header Setup ---
    document.addEventListener('DOMContentLoaded', () => {
      const header = document.getElementById('main-header');

      const handleScroll = () => {
        if (window.scrollY > 50) {
          header.classList.add('bg-zinc-950/80', 'backdrop-blur-md', 'border-zinc-800');
          header.classList.remove('bg-transparent', 'border-transparent');
        } else {
          header.classList.remove('bg-zinc-950/80', 'backdrop-blur-md', 'border-zinc-800');
          header.classList.add('bg-transparent', 'border-transparent');
        }
      };

      window.addEventListener('scroll', handleScroll);
      handleScroll();
    });


    // --- Topographic Contour Background (hero only) ---
    document.addEventListener('DOMContentLoaded', () => {
      const canvas = document.getElementById('topo-canvas');
      const ctx = canvas.getContext('2d');
      const dpr = Math.min(window.devicePixelRatio, 2);

      const CELL = 10;
      const LEVELS = 12;

      let width, height, gridW, gridH;

      function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        canvas.width = width * dpr;
        canvas.height = height * dpr;
        canvas.style.width = width + 'px';
        canvas.style.height = height + 'px';
        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
        gridW = Math.ceil(width / CELL) + 1;
        gridH = Math.ceil(height / CELL) + 1;
      }

      resize();

      // Layered sine noise (no library needed)
      function noise(x, y, t) {
        return (
          Math.sin(x * 0.007 + t * 0.12) * 0.6 +
          Math.sin(y * 0.005 - t * 0.08) * 0.6 +
          Math.sin((x + y) * 0.004 + t * 0.06) * 0.5 +
          Math.sin(x * 0.012 - y * 0.008 + t * 0.1) * 0.35 +
          Math.cos(x * 0.003 + y * 0.005 - t * 0.04) * 0.7 +
          Math.sin(x * 0.02 + t * 0.15) * 0.15 +
          Math.cos(y * 0.018 - t * 0.09) * 0.15
        );
      }

      // Linear interpolation helper
      function lerp(a, b, threshold) {
        const d = b - a;
        return d === 0 ? 0.5 : (threshold - a) / d;
      }

      function drawContours(t) {
        // Sample scalar field
        const field = new Float32Array(gridW * gridH);
        for (let j = 0; j < gridH; j++) {
          for (let i = 0; i < gridW; i++) {
            field[j * gridW + i] = noise(i * CELL, j * CELL, t);
          }
        }

        for (let level = 0; level < LEVELS; level++) {
          const threshold = -2.0 + (level / LEVELS) * 4.0;

          // Alternate: most lines zinc, every 4th line slightly emerald
          const isAccent = level % 4 === 0;
          const color = isAccent
            ? 'rgba(16, 185, 129, 0.12)'
            : 'rgba(161, 161, 170, 0.1)';
          const lineW = isAccent ? 1.0 : 0.6;

          ctx.beginPath();

          for (let j = 0; j < gridH - 1; j++) {
            for (let i = 0; i < gridW - 1; i++) {
              const tl = field[j * gridW + i];
              const tr = field[j * gridW + i + 1];
              const br = field[(j + 1) * gridW + i + 1];
              const bl = field[(j + 1) * gridW + i];

              let c = 0;
              if (tl > threshold) c |= 8;
              if (tr > threshold) c |= 4;
              if (br > threshold) c |= 2;
              if (bl > threshold) c |= 1;

              if (c === 0 || c === 15) continue;

              const x = i * CELL;
              const y = j * CELL;
              const s = CELL;

              const top    = x + lerp(tl, tr, threshold) * s;
              const right  = y + lerp(tr, br, threshold) * s;
              const bottom = x + lerp(bl, br, threshold) * s;
              const left   = y + lerp(tl, bl, threshold) * s;

              switch (c) {
                case 1: case 14: ctx.moveTo(x, left); ctx.lineTo(bottom, y + s); break;
                case 2: case 13: ctx.moveTo(bottom, y + s); ctx.lineTo(x + s, right); break;
                case 3: case 12: ctx.moveTo(x, left); ctx.lineTo(x + s, right); break;
                case 4: case 11: ctx.moveTo(top, y); ctx.lineTo(x + s, right); break;
                case 5:
                  ctx.moveTo(x, left); ctx.lineTo(top, y);
                  ctx.moveTo(bottom, y + s); ctx.lineTo(x + s, right); break;
                case 6: case 9: ctx.moveTo(top, y); ctx.lineTo(bottom, y + s); break;
                case 7: case 8: ctx.moveTo(x, left); ctx.lineTo(top, y); break;
                case 10:
                  ctx.moveTo(top, y); ctx.lineTo(x + s, right);
                  ctx.moveTo(x, left); ctx.lineTo(bottom, y + s); break;
              }
            }
          }

          ctx.strokeStyle = color;
          ctx.lineWidth = lineW;
          ctx.stroke();
        }
      }

      function animate(time) {
        requestAnimationFrame(animate);
        ctx.clearRect(0, 0, width, height);
        drawContours(time * 0.001);
      }

      requestAnimationFrame(animate);
      window.addEventListener('resize', resize);
    });
  </script>

  <!-- Cal.com popup embed -->
  <script type="text/javascript">
    (function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if(typeof namespace === "string"){cal.ns[namespace] = cal.ns[namespace] || api;p(cal.ns[namespace], ar);p(cal, ["initNamespace", namespace]);} else p(cal, ar); return;} p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
    Cal("init", "20min", {origin:"https://app.cal.com"});
    Cal.ns["20min"]("ui", {"hideEventTypeDetails":false,"layout":"month_view","theme":"dark","cssVarsPerTheme":{"dark":{"cal-brand":"#10b981"}}});
  </script>
</body>
</html>