<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkedIn Ad Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @font-face {
            font-family: 'ConstructMono';
            src: url('/fonts/ConstructMono.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        .ad-card {
            width: 1200px;
            height: 627px;
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
    </style>
</head>
<body class="bg-zinc-800 flex flex-col items-center justify-center min-h-screen p-8">

    <div class="ad-card bg-[#0a0a0b] scanlines flex" style="position: relative;">
        <canvas id="topo-bg" style="position: absolute; top: 0; left: 0; width: 1200px; height: 627px; pointer-events: none; opacity: 0.7; -webkit-mask-image: linear-gradient(to right, black 30%, transparent 60%); mask-image: linear-gradient(to right, black 30%, transparent 60%);"></canvas>

        {{-- Left: Photo + identity --}}
        <div class="relative z-10 flex flex-col justify-between w-[320px] shrink-0 p-14">
            {{-- Logo --}}
            <div class="flex items-center gap-2.5 text-xl tracking-wide">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-500"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" x2="20" y1="19" y2="19"></line></svg>
                <span class="text-white font-bold">fractional.sh</span>
            </div>

            {{-- Photo --}}
            <div class="flex flex-col items-center">
                <div class="relative">
                    <div class="w-[220px] h-[220px] border-2 border-zinc-700 p-[3px]">
                        <div class="w-full h-full border border-zinc-600 overflow-hidden relative">
                            <img src="/images/robin-white.jpg" alt="Robin White" class="w-full h-full object-cover" />
                            <div class="absolute inset-0 pointer-events-none">
                                <div class="absolute top-0 left-1/2 w-[1px] h-4 bg-emerald-500/30"></div>
                                <div class="absolute bottom-0 left-1/2 w-[1px] h-4 bg-emerald-500/30"></div>
                                <div class="absolute left-0 top-1/2 w-4 h-[1px] bg-emerald-500/30"></div>
                                <div class="absolute right-0 top-1/2 w-4 h-[1px] bg-emerald-500/30"></div>
                            </div>
                            <div class="absolute top-2 left-2 w-4 h-4 border-t border-l border-emerald-500/30"></div>
                            <div class="absolute top-2 right-2 w-4 h-4 border-t border-r border-emerald-500/30"></div>
                            <div class="absolute bottom-2 left-2 w-4 h-4 border-b border-l border-emerald-500/30"></div>
                            <div class="absolute bottom-2 right-2 w-4 h-4 border-b border-r border-emerald-500/30"></div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <div class="text-[11px] text-emerald-500 tracking-[0.2em] uppercase">Robin White</div>
                        <div class="flex items-center justify-center gap-1.5 mt-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            <span class="text-[9px] text-emerald-500/70 tracking-[0.15em] uppercase">Accepting Clients</span>
                        </div>
                    </div>
                </div>
            </div>

            <div></div>
        </div>

        {{-- Divider --}}
        <div class="w-[1px] bg-zinc-800 my-14 relative z-10"></div>

        {{-- Right: Headline --}}
        <div class="relative z-10 flex-1 flex flex-col justify-between p-14 pl-12">
            {{-- Tagline --}}
            <div class="text-[14px] text-zinc-500 tracking-[0.2em] uppercase">Fractional AI + Product Co-founder</div>

            {{-- Main headline --}}
            <div>
                <div class="w-10 h-[3px] bg-emerald-500 mb-8"></div>
                <h1 class="text-[56px] font-normal text-white leading-[1.1] uppercase max-w-[580px]" style="letter-spacing: -0.02em;">
                    Cut through the AI noise. <span class="text-emerald-500">Ship what matters.</span>
                </h1>
                <p class="text-[17px] text-zinc-400 leading-relaxed mt-8 max-w-[520px] font-light" style="font-family: system-ui, sans-serif;">
                    I help founders ship the right product, faster — with AI wired into your product, your workflows, and your team. <span class="text-zinc-200">Not with a slide deck. By showing up and building it with you.</span>
                </p>
            </div>

            {{-- Footer --}}
            <div class="flex items-center justify-between">
                <span class="text-[14px] text-zinc-600 tracking-[0.15em] uppercase">fractional.sh</span>
                <span class="px-5 py-2.5 border border-emerald-600 text-emerald-500 text-[14px] tracking-[0.15em] uppercase">Book a Call →</span>
            </div>
        </div>
    </div>

    <a href="{{ route('og-linkedin.download') }}" class="mt-10 inline-block px-6 py-3 bg-emerald-600 hover:bg-emerald-500 text-white font-mono text-sm uppercase tracking-wider transition-colors cursor-pointer">
        Download Horizontal PNG (1200 × 627)
    </a>

    {{-- ==================== 1:1 SQUARE FORMAT ==================== --}}
    <div class="mt-20 mb-4 text-zinc-400 font-mono text-sm uppercase tracking-widest">1:1 Square — 1200 × 1200</div>

    <div class="ad-card-square bg-[#0a0a0b] scanlines flex flex-col" style="width: 1200px; height: 1200px; font-family: 'ConstructMono', monospace; position: relative; overflow: hidden;">
        <canvas id="topo-bg-square" style="position: absolute; top: 0; left: 0; width: 1200px; height: 1200px; pointer-events: none; opacity: 0.7; -webkit-mask-image: linear-gradient(to bottom, black 40%, transparent 80%); mask-image: linear-gradient(to bottom, black 40%, transparent 80%);"></canvas>

        {{-- Top bar --}}
        <div class="relative z-10 flex justify-between items-center px-16 pt-14">
            <div class="flex items-center gap-2.5 text-[18px] tracking-[0.15em] uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-500"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" x2="20" y1="19" y2="19"></line></svg>
                <span class="text-white">fractional.sh</span>
            </div>
            <div class="text-[18px] text-zinc-500 tracking-[0.2em] uppercase">Fractional AI + Product Co-founder</div>
        </div>

        {{-- Center content: headline + desc + photo --}}
        <div class="relative z-10 flex-1 flex flex-col items-center justify-center px-16 text-center">
            <h1 class="text-[64px] font-normal text-white leading-[1.1] uppercase max-w-[900px]" style="letter-spacing: -0.02em;">
                Cut through the AI noise.<br><span class="text-emerald-500">Ship what matters.</span>
            </h1>
            <div class="w-10 h-[3px] bg-emerald-500 mt-8 mb-8 mx-auto"></div>
            <p class="text-[21px] text-zinc-400 leading-relaxed max-w-[850px] font-light" style="font-family: system-ui, sans-serif;">
                I help founders ship the right product, faster — with AI wired into your product, your workflows, and your team. <span class="text-zinc-200">Not with a slide deck. By showing up and building it with you.</span>
            </p>

            {{-- Photo --}}
            <div class="relative mt-20">
                <div class="w-[380px] h-[380px] border-2 border-zinc-700 p-[3px]">
                    <div class="w-full h-full border border-zinc-600 overflow-hidden relative">
                        <img src="/images/robin-white.jpg" alt="Robin White" class="w-full h-full object-cover" />
                        <div class="absolute inset-0 pointer-events-none">
                            <div class="absolute top-0 left-1/2 w-[1px] h-4 bg-emerald-500/30"></div>
                            <div class="absolute bottom-0 left-1/2 w-[1px] h-4 bg-emerald-500/30"></div>
                            <div class="absolute left-0 top-1/2 w-4 h-[1px] bg-emerald-500/30"></div>
                            <div class="absolute right-0 top-1/2 w-4 h-[1px] bg-emerald-500/30"></div>
                        </div>
                        <div class="absolute top-2 left-2 w-4 h-4 border-t border-l border-emerald-500/30"></div>
                        <div class="absolute top-2 right-2 w-4 h-4 border-t border-r border-emerald-500/30"></div>
                        <div class="absolute bottom-2 left-2 w-4 h-4 border-b border-l border-emerald-500/30"></div>
                        <div class="absolute bottom-2 right-2 w-4 h-4 border-b border-r border-emerald-500/30"></div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <div class="text-[18px] text-emerald-500 tracking-[0.2em] uppercase">Robin White</div>
                    <div class="flex items-center justify-center gap-2 mt-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        <span class="text-[14px] text-emerald-500/70 tracking-[0.15em] uppercase">Accepting Clients</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div class="relative z-10 flex items-center justify-between px-16 pb-14">
            <span class="text-[18px] text-zinc-600 tracking-[0.15em] uppercase">fractional.sh</span>
            <span class="px-6 py-3 border border-emerald-600 text-emerald-500 text-[18px] tracking-[0.15em] uppercase">Book a Call →</span>
        </div>
    </div>

    <a href="{{ route('og-linkedin.download', ['format' => 'square']) }}" class="mt-10 inline-block px-6 py-3 bg-emerald-600 hover:bg-emerald-500 text-white font-mono text-sm uppercase tracking-wider transition-colors cursor-pointer">
        Download Square PNG (1200 × 1200)
    </a>
<script>
    // --- Topo for square card ---
    (function() {
        const canvas = document.getElementById('topo-bg-square');
        const ctx = canvas.getContext('2d');
        const W = 1200, H = 1200, CELL = 10, LEVELS = 12;
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
        const t = 2.0;
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
    })();
</script>
<script>
    // --- Topo for horizontal card ---
    const canvas = document.getElementById('topo-bg');
    const ctx = canvas.getContext('2d');
    const W = 1200, H = 627, CELL = 10, LEVELS = 12;
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
