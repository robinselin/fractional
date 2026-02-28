<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OG Image Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @font-face {
            font-family: 'ConstructMono';
            src: url('/fonts/ConstructMono.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        .og-card {
            width: 1200px;
            height: 630px;
            font-family: 'ConstructMono', monospace;
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

    <div class="og-card bg-[#0a0a0b] scanlines flex flex-col" style="position: relative;">
        <canvas id="topo-bg" style="position: absolute; top: 0; left: 0; width: 1200px; height: 630px; pointer-events: none; -webkit-mask-image: linear-gradient(to bottom, black 40%, transparent 90%); mask-image: linear-gradient(to bottom, black 40%, transparent 90%);"></canvas>

        {{-- Top bar --}}
        <div class="flex justify-between items-center px-14 pt-10">
            <div class="flex items-center gap-2 font-bold tracking-tighter text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-500"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" x2="20" y1="19" y2="19"></line></svg>
                <span class="text-white">fractional.sh</span>
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
                    <h1 class="text-[64px] font-normal text-white leading-[1.05] tracking-tight uppercase" style="letter-spacing: -0.02em;">
                        Fractional AI +<br>Product <span class="text-emerald-500">Co-founder</span>
                    </h1>

                    <p class="text-[17px] text-zinc-400 leading-relaxed mt-8 max-w-[520px] font-light">
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

<script>
    const canvas = document.getElementById('topo-bg');
    const ctx = canvas.getContext('2d');
    const W = 1200, H = 630, CELL = 10, LEVELS = 12;
    canvas.width = W * 2;
    canvas.height = H * 2;
    ctx.setTransform(2, 0, 0, 2, 0, 0);
    const gridW = Math.ceil(W / CELL) + 1;
    const gridH = Math.ceil(H / CELL) + 1;

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

    function lerp(a, b, threshold) {
        const d = b - a;
        return d === 0 ? 0.5 : (threshold - a) / d;
    }

    const field = new Float32Array(gridW * gridH);
    const t = 1.5;
    for (let j = 0; j < gridH; j++) {
        for (let i = 0; i < gridW; i++) {
            field[j * gridW + i] = noise(i * CELL, j * CELL, t);
        }
    }

    for (let level = 0; level < LEVELS; level++) {
        const threshold = -2.0 + (level / LEVELS) * 4.0;
        const isAccent = level % 4 === 0;
        ctx.strokeStyle = isAccent ? 'rgba(16, 185, 129, 0.12)' : 'rgba(161, 161, 170, 0.1)';
        ctx.lineWidth = isAccent ? 1.0 : 0.6;
        ctx.beginPath();
        for (let j = 0; j < gridH - 1; j++) {
            for (let i = 0; i < gridW - 1; i++) {
                const idx = j * gridW + i;
                const a = field[idx], b = field[idx + 1];
                const c = field[idx + gridW + 1], d2 = field[idx + gridW];
                let config = 0;
                if (a >= threshold) config |= 1;
                if (b >= threshold) config |= 2;
                if (c >= threshold) config |= 4;
                if (d2 >= threshold) config |= 8;
                if (config === 0 || config === 15) continue;
                const x = i * CELL, y = j * CELL;
                const segments = [];
                switch (config) {
                    case 1: case 14: segments.push([x, y + CELL * lerp(a, d2, threshold), x + CELL * lerp(a, b, threshold), y]); break;
                    case 2: case 13: segments.push([x + CELL * lerp(a, b, threshold), y, x + CELL, y + CELL * lerp(b, c, threshold)]); break;
                    case 4: case 11: segments.push([x + CELL, y + CELL * lerp(b, c, threshold), x + CELL * lerp(d2, c, threshold), y + CELL]); break;
                    case 8: case 7: segments.push([x + CELL * lerp(d2, c, threshold), y + CELL, x, y + CELL * lerp(a, d2, threshold)]); break;
                    case 3: case 12: segments.push([x, y + CELL * lerp(a, d2, threshold), x + CELL, y + CELL * lerp(b, c, threshold)]); break;
                    case 6: case 9: segments.push([x + CELL * lerp(a, b, threshold), y, x + CELL * lerp(d2, c, threshold), y + CELL]); break;
                    case 5: segments.push([x, y + CELL * lerp(a, d2, threshold), x + CELL * lerp(a, b, threshold), y]); segments.push([x + CELL, y + CELL * lerp(b, c, threshold), x + CELL * lerp(d2, c, threshold), y + CELL]); break;
                    case 10: segments.push([x + CELL * lerp(a, b, threshold), y, x + CELL, y + CELL * lerp(b, c, threshold)]); segments.push([x + CELL * lerp(d2, c, threshold), y + CELL, x, y + CELL * lerp(a, d2, threshold)]); break;
                }
                for (const s of segments) { ctx.moveTo(s[0], s[1]); ctx.lineTo(s[2], s[3]); }
            }
        }
        ctx.stroke();
    }
</script>
</body>
</html>
