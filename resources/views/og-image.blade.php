<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OG Image Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&display=swap');

        * { margin: 0; padding: 0; box-sizing: border-box; }

        .og-card {
            width: 1200px;
            height: 630px;
            font-family: 'JetBrains Mono', monospace;
            position: relative;
            overflow: hidden;
        }

        .scanlines {
            background-image: repeating-linear-gradient(
                0deg,
                transparent,
                transparent 2px,
                rgba(255, 255, 255, 0.008) 2px,
                rgba(255, 255, 255, 0.008) 4px
            );
        }

        .corner-tl::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 28px; height: 28px;
            border-top: 2px solid #10b981;
            border-left: 2px solid #10b981;
        }
    </style>
</head>
<body class="bg-zinc-800 flex items-center justify-center min-h-screen p-8">

    <div class="og-card bg-[#0a0a0b] scanlines flex flex-col">

        {{-- Top bar --}}
        <div class="flex justify-between items-center px-14 pt-10">
            <div class="relative corner-tl pl-5 pt-1">
                <span class="text-white text-lg font-bold tracking-tight uppercase">fractional.sh</span>
            </div>
            <div class="flex items-center gap-2.5">
                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                <span class="text-emerald-500 text-xs font-medium tracking-[0.2em] uppercase">Accepting Clients</span>
            </div>
        </div>

        {{-- Main content --}}
        <div class="flex flex-1 px-14 pt-8 pb-6 gap-12">

            {{-- Left: Typography --}}
            <div class="flex-1 flex flex-col justify-between">

                {{-- Green accent bar + Headline --}}
                <div>
                    <div class="w-10 h-[3px] bg-emerald-500 mb-8"></div>
                    <h1 class="text-[64px] font-bold text-white leading-[1.05] tracking-tight uppercase" style="letter-spacing: -0.02em;">
                        Fractional AI +<br>Product <span class="text-emerald-500">Co-founder</span>
                    </h1>

                    <p class="text-[15px] text-zinc-500 leading-relaxed mt-8 max-w-[520px] font-normal">
                        15 years building software. I help founders ship the right product, faster — with AI wired into your product, your workflows, and your team.
                    </p>
                </div>

                {{-- Badges --}}
                <div class="flex gap-3">
                    <span class="px-3 py-1.5 border border-zinc-700 text-zinc-400 text-[10px] tracking-[0.15em] uppercase">Est. 2011</span>
                    <span class="px-3 py-1.5 border border-zinc-700 text-zinc-400 text-[10px] tracking-[0.15em] uppercase">IC → CTO → Founder</span>
                    <span class="px-3 py-1.5 border border-emerald-600 text-emerald-500 text-[10px] tracking-[0.15em] uppercase">Robin White</span>
                </div>
            </div>

            {{-- Right: Military-style photo --}}
            <div class="flex flex-col items-center justify-center">
                <div class="relative">
                    {{-- Outer frame --}}
                    <div class="w-[200px] h-[200px] border-2 border-zinc-700 p-[3px]">
                        {{-- Inner frame --}}
                        <div class="w-full h-full border border-zinc-600 overflow-hidden relative">
                            <img src="/images/robin-white.jpg" alt="Robin White" class="w-full h-full object-cover grayscale-[20%]" />
                            {{-- Crosshair overlay --}}
                            <div class="absolute inset-0 pointer-events-none">
                                <div class="absolute top-0 left-1/2 w-[1px] h-3 bg-emerald-500/30"></div>
                                <div class="absolute bottom-0 left-1/2 w-[1px] h-3 bg-emerald-500/30"></div>
                                <div class="absolute left-0 top-1/2 w-3 h-[1px] bg-emerald-500/30"></div>
                                <div class="absolute right-0 top-1/2 w-3 h-[1px] bg-emerald-500/30"></div>
                            </div>
                        </div>
                    </div>
                    {{-- ID label --}}
                    <div class="text-center mt-3 text-[10px] text-zinc-600 tracking-[0.2em] uppercase">
                        ID: Robin_White
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer bar --}}
        <div class="flex justify-between items-center px-14 pb-8 pt-2">
            <span class="text-[11px] text-zinc-600 tracking-[0.15em] uppercase">fractional.sh</span>
            <div class="flex items-center gap-4">
                <span class="text-[11px] text-zinc-600 tracking-[0.15em] uppercase">Fractional AI + Product Co-founder</span>
                <div class="w-3 h-3 border-r border-b border-zinc-700"></div>
            </div>
        </div>

    </div>

</body>
</html>
