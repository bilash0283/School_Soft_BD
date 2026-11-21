<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduManage | Sign in</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['"Plus Jakarta Sans"', 'ui-sans-serif', 'system-ui', 'sans-serif'] },
          colors: {
            brand: { 50:'#eef2ff',100:'#e0e7ff',200:'#c7d2fe',300:'#a5b4fc',400:'#818cf8',500:'#6366f1',600:'#4f46e5',700:'#4338ca',800:'#3730a3',900:'#1e1b4b' }
          },
          keyframes: {
            float: { '0%,100%': { transform: 'translateY(0) rotate(0deg)' }, '50%': { transform: 'translateY(-22px) rotate(4deg)' } },
            floatSlow: { '0%,100%': { transform: 'translate(0,0) scale(1)' }, '50%': { transform: 'translate(30px,-30px) scale(1.1)' } },
            fadeUp: { '0%': { opacity: 0, transform: 'translateY(24px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
            fadeIn: { '0%': { opacity: 0 }, '100%': { opacity: 1 } },
            slideIn: { '0%': { opacity: 0, transform: 'translateX(-30px)' }, '100%': { opacity: 1, transform: 'translateX(0)' } },
            gradient: { '0%,100%': { backgroundPosition: '0% 50%' }, '50%': { backgroundPosition: '100% 50%' } },
            shine: { '0%': { transform: 'translateX(-120%) skewX(-20deg)' }, '100%': { transform: 'translateX(320%) skewX(-20deg)' } },
            pulseRing: { '0%': { transform: 'scale(.9)', opacity: .6 }, '100%': { transform: 'scale(1.8)', opacity: 0 } },
            shake: { '0%,100%': { transform: 'translateX(0)' }, '20%,60%': { transform: 'translateX(-6px)' }, '40%,80%': { transform: 'translateX(6px)' } },
            grow: { '0%': { width: '0%' }, '100%': { width: '100%' } }
          },
          animation: {
            float: 'float 7s ease-in-out infinite',
            floatSlow: 'floatSlow 14s ease-in-out infinite',
            fadeUp: 'fadeUp .8s cubic-bezier(.22,1,.36,1) both',
            fadeIn: 'fadeIn 1s ease both',
            slideIn: 'slideIn .9s cubic-bezier(.22,1,.36,1) both',
            gradient: 'gradient 12s ease infinite',
            shine: 'shine 3s ease-in-out infinite',
            pulseRing: 'pulseRing 2s ease-out infinite',
            shake: 'shake .45s ease'
          }
        }
      }
    }
  </script>
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; }
    .grid-bg {
      background-image: linear-gradient(rgba(255,255,255,.06) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(255,255,255,.06) 1px, transparent 1px);
      background-size: 44px 44px;
      mask-image: radial-gradient(ellipse at center, black 30%, transparent 75%);
      -webkit-mask-image: radial-gradient(ellipse at center, black 30%, transparent 75%);
    }
    .glass { background: rgba(255,255,255,.1); backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px); border: 1px solid rgba(255,255,255,.2); }
    .d1{animation-delay:.1s}.d2{animation-delay:.2s}.d3{animation-delay:.3s}.d4{animation-delay:.4s}.d5{animation-delay:.5s}.d6{animation-delay:.6s}.d7{animation-delay:.7s}
    /* Floating label inputs */
    .field input:focus ~ label,
    .field input:not(:placeholder-shown) ~ label {
      transform: translateY(-1.55rem) scale(.82);
      color: #4f46e5;
      background: #fff;
      padding: 0 .4rem;
    }
    .field input:focus ~ .icon { color: #4f46e5; }
    .slide { transition: opacity .7s ease, transform .7s ease; }
    .slide.hidden-slide { opacity: 0; transform: translateY(14px); position: absolute; inset: 0; pointer-events: none; }
    @media (prefers-reduced-motion: reduce) { *, *::before, *::after { animation: none !important; transition: none !important; } }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 antialiased overflow-x-hidden">

<div class="flex min-h-screen">

  <!-- ============ LEFT: Showcase ============ -->
  <aside class="relative hidden lg:flex lg:w-[55%] flex-col justify-between overflow-hidden bg-gradient-to-br from-brand-900 via-brand-700 to-violet-600 bg-[length:200%_200%] animate-gradient p-12 xl:p-16 text-white">
    <div class="grid-bg absolute inset-0"></div>

    <!-- Glow orbs -->
    <div class="absolute -top-32 -left-24 h-96 w-96 rounded-full bg-fuchsia-500/30 blur-3xl animate-floatSlow"></div>
    <div class="absolute bottom-[-8rem] right-[-6rem] h-[28rem] w-[28rem] rounded-full bg-sky-400/25 blur-3xl animate-floatSlow" style="animation-delay:-6s"></div>

    <!-- Floating shapes -->
    <div class="absolute top-[18%] right-[12%] h-16 w-16 rounded-2xl border border-white/30 bg-white/10 animate-float"></div>
    <div class="absolute top-[55%] left-[8%] h-10 w-10 rounded-full border border-white/30 bg-white/10 animate-float" style="animation-delay:-3s"></div>
    <div class="absolute bottom-[22%] right-[20%] h-8 w-8 rotate-45 border border-white/30 bg-white/10 animate-float" style="animation-delay:-5s"></div>

    <!-- Logo -->
    <div class="relative flex items-center gap-3 animate-slideIn">
      <div class="relative flex h-12 w-12 items-center justify-center rounded-2xl bg-white text-brand-700 shadow-xl">
        <span class="absolute inset-0 rounded-2xl bg-white/60 animate-pulseRing"></span>
        <svg class="relative h-7 w-7" fill="none" stroke="currentColor" stroke-width="1.9" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.42A12.08 12.08 0 0121 17.5M12 14l-6.16-3.42A12.08 12.08 0 003 17.5M12 14v7" />
        </svg>
      </div>
      <div>
        <p class="text-xl font-extrabold leading-none tracking-tight">EduManage</p>
        <p class="mt-1 text-xs font-medium text-brand-200">School Management System</p>
      </div>
    </div>

    <!-- Center content -->
    <div class="relative max-w-xl">
      <span class="inline-flex items-center gap-2 rounded-full glass px-4 py-1.5 text-xs font-semibold animate-fadeUp d1">
        <span class="h-2 w-2 rounded-full bg-emerald-400"></span> Trusted by 500+ schools
      </span>
      <h1 class="mt-6 text-4xl xl:text-5xl font-extrabold leading-[1.1] animate-fadeUp d2">
        Run your school<br />
        <span class="bg-gradient-to-r from-amber-200 via-pink-200 to-sky-200 bg-clip-text text-transparent">smarter, faster</span> &amp; simpler.
      </h1>
      <p class="mt-5 max-w-md text-base xl:text-lg text-brand-100 animate-fadeUp d3">
        Attendance, exams, fees and communication &mdash; everything your institution needs in one secure platform.
      </p>

      <!-- Mock dashboard cards -->
      <div class="relative mt-10 h-56 animate-fadeUp d4">
        <!-- Main card -->
        <div class="glass absolute left-0 top-0 w-72 rounded-2xl p-5 shadow-2xl animate-float">
          <div class="flex items-center justify-between">
            <p class="text-sm font-semibold">Today's Attendance</p>
            <span class="rounded-full bg-emerald-400/20 px-2 py-0.5 text-xs font-semibold text-emerald-200">+4.2%</span>
          </div>
          <p class="mt-2 text-3xl font-extrabold" data-count="96" data-suffix="%">0%</p>
          <div class="mt-4 flex h-16 items-end gap-1.5">
            <span class="w-full rounded-t bg-white/30" style="height:45%"></span>
            <span class="w-full rounded-t bg-white/30" style="height:62%"></span>
            <span class="w-full rounded-t bg-white/30" style="height:50%"></span>
            <span class="w-full rounded-t bg-white/40" style="height:78%"></span>
            <span class="w-full rounded-t bg-white/50" style="height:70%"></span>
            <span class="w-full rounded-t bg-white/70" style="height:88%"></span>
            <span class="w-full rounded-t bg-white" style="height:96%"></span>
          </div>
        </div>
        <!-- Side card 1 -->
        <div class="glass absolute right-0 top-4 w-52 rounded-2xl p-4 shadow-2xl animate-float" style="animation-delay:-2s">
          <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-300/90 text-lg">🎓</div>
            <div>
              <p class="text-xs text-brand-100">Total Students</p>
              <p class="text-lg font-bold" data-count="1280">0</p>
            </div>
          </div>
        </div>
        <!-- Side card 2 -->
        <div class="glass absolute right-10 bottom-0 w-56 rounded-2xl p-4 shadow-2xl animate-float" style="animation-delay:-4s">
          <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-300/90 text-lg">💰</div>
            <div class="flex-1">
              <p class="text-xs text-brand-100">Fee Collection</p>
              <div class="mt-1.5 h-1.5 w-full overflow-hidden rounded-full bg-white/20">
                <div class="h-full rounded-full bg-emerald-300 animate-[grow_2.2s_ease-out_both]" style="width:82%"></div>
              </div>
            </div>
            <span class="text-xs font-bold">82%</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimonial slider -->
    <div class="relative animate-fadeUp d6">
      <div class="relative h-24" id="slides">
        <div class="slide">
          <p class="text-lg font-medium leading-snug">“Report cards that took days now take minutes. Parents love the instant updates.”</p>
          <p class="mt-2 text-sm text-brand-200">— Principal, Greenfield Academy</p>
        </div>
        <div class="slide hidden-slide">
          <p class="text-lg font-medium leading-snug">“Attendance and fee tracking is finally in one place. It saved our office hours every week.”</p>
          <p class="mt-2 text-sm text-brand-200">— Administrator, Sunrise School</p>
        </div>
        <div class="slide hidden-slide">
          <p class="text-lg font-medium leading-snug">“Simple, fast and secure. Our teachers learned it in a single afternoon.”</p>
          <p class="mt-2 text-sm text-brand-200">— Head Teacher, Model High School</p>
        </div>
      </div>
      <div class="mt-2 flex gap-2" id="dots">
        <span class="h-1.5 w-8 rounded-full bg-white transition-all"></span>
        <span class="h-1.5 w-2 rounded-full bg-white/40 transition-all"></span>
        <span class="h-1.5 w-2 rounded-full bg-white/40 transition-all"></span>
      </div>
    </div>
  </aside>

  <!-- ============ RIGHT: Form ============ -->
  <main class="relative flex w-full lg:w-[45%] items-center justify-center overflow-hidden px-5 py-10 sm:px-10">
    <!-- soft bg decoration -->
    <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-brand-200/60 blur-3xl animate-floatSlow"></div>
    <div class="pointer-events-none absolute -bottom-24 -left-24 h-72 w-72 rounded-full bg-violet-200/60 blur-3xl animate-floatSlow" style="animation-delay:-7s"></div>

    <div class="relative w-full max-w-md">

      <!-- Mobile logo -->
      <div class="mb-8 flex flex-col items-center lg:hidden animate-fadeUp">
        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-brand-600 to-violet-600 text-white shadow-xl shadow-brand-600/30">
          <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="1.9" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.42A12.08 12.08 0 0121 17.5M12 14l-6.16-3.42A12.08 12.08 0 003 17.5M12 14v7" />
          </svg>
        </div>
        <p class="mt-3 text-2xl font-extrabold tracking-tight text-slate-900">EduManage</p>
        <p class="text-xs font-medium text-slate-500">School Management System</p>
      </div>

      <div id="card" class="rounded-3xl bg-white/90 p-6 shadow-2xl shadow-brand-900/10 ring-1 ring-slate-200/70 backdrop-blur sm:p-9 animate-fadeUp d1">

        <div class="animate-fadeUp d2">
          <h2 class="text-3xl font-extrabold tracking-tight text-slate-900">Welcome back <span class="inline-block origin-[70%_70%] animate-[float_3s_ease-in-out_infinite]">👋</span></h2>
          <p class="mt-2 text-sm text-slate-500">Please enter your details to access your dashboard.</p>
        </div>

        <form id="loginForm" class="mt-8 space-y-6" novalidate>

          <!-- Email -->
          <div class="field relative animate-fadeUp d3">
            <input id="email" type="text" placeholder=" " autocomplete="username"
              class="peer block w-full rounded-xl border border-slate-300 bg-white px-11 py-3.5 text-sm text-slate-900 shadow-sm outline-none transition focus:border-brand-500 focus:ring-4 focus:ring-brand-100" />
            <span class="icon pointer-events-none absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 transition-colors">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.24a2.25 2.25 0 01-1.07 1.92l-7.5 4.62a2.25 2.25 0 01-2.36 0l-7.5-4.62A2.25 2.25 0 012.25 6.99V6.75" /></svg>
            </span>
            <label for="email" class="pointer-events-none absolute left-11 top-1/2 -translate-y-1/2 origin-left text-sm text-slate-400 transition-all duration-200">Email or User ID</label>
          </div>

          <!-- Password -->
          <div class="animate-fadeUp d4">
            <div class="field relative">
              <input id="password" type="password" placeholder=" " autocomplete="current-password"
                class="peer block w-full rounded-xl border border-slate-300 bg-white px-11 py-3.5 pr-12 text-sm text-slate-900 shadow-sm outline-none transition focus:border-brand-500 focus:ring-4 focus:ring-brand-100" />
              <span class="icon pointer-events-none absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 transition-colors">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V7.5a4.5 4.5 0 10-9 0v3m-1.5 0h12a1.5 1.5 0 011.5 1.5v7.5A1.5 1.5 0 0118 21H6a1.5 1.5 0 01-1.5-1.5V12A1.5 1.5 0 016 10.5z" /></svg>
              </span>
              <label for="password" class="pointer-events-none absolute left-11 top-1/2 -translate-y-1/2 origin-left text-sm text-slate-400 transition-all duration-200">Password</label>
              <button type="button" id="togglePw" aria-label="Show password" class="absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-1.5 text-slate-400 transition hover:bg-slate-100 hover:text-slate-700">
                <svg id="eyeOn" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.04 12.32a1 1 0 010-.64C3.42 7.51 7.36 4.5 12 4.5s8.58 3.01 9.96 7.18a1 1 0 010 .64C20.58 16.49 16.64 19.5 12 19.5s-8.58-3.01-9.96-7.18z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                <svg id="eyeOff" class="hidden h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.22A10.48 10.48 0 001.93 12c1.39 4.18 5.33 7.18 9.97 7.18 1.99 0 3.85-.55 5.44-1.5M6.23 6.23A10.45 10.45 0 0112 4.82c4.64 0 8.58 3 9.97 7.18a10.52 10.52 0 01-4.29 5.41M6.23 6.23L3 3m3.23 3.23l3.65 3.65m7.89 7.89L21 21m-3.23-3.23l-3.65-3.65m0 0a3 3 0 10-4.24-4.24m4.24 4.24L9.88 9.88" /></svg>
              </button>
            </div>
            <p id="capsWarn" class="mt-1.5 hidden text-xs font-medium text-amber-600">⚠ Caps Lock is on</p>
          </div>

          <!-- Remember / Forgot -->
          <div class="flex items-center justify-between animate-fadeUp d5">
            <label class="flex cursor-pointer select-none items-center gap-2.5 text-sm text-slate-600">
              <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-brand-600 focus:ring-brand-500" />
              Remember me
            </label>
            <a href="#" class="text-sm font-semibold text-brand-600 transition hover:text-brand-800">Forgot password?</a>
          </div>

          <!-- Error -->
          <p id="error" class="hidden items-center gap-2 rounded-xl bg-red-50 px-4 py-3 text-sm font-medium text-red-600 ring-1 ring-red-100"></p>

          <!-- Submit -->
          <div class="animate-fadeUp d6">
            <button id="submitBtn" type="submit"
              class="group relative flex w-full items-center justify-center gap-2 overflow-hidden rounded-xl bg-gradient-to-r from-brand-600 via-brand-500 to-violet-600 bg-[length:200%_100%] px-4 py-3.5 text-sm font-bold text-white shadow-lg shadow-brand-600/30 transition-all duration-500 hover:bg-right hover:shadow-xl hover:shadow-brand-600/40 focus:outline-none focus:ring-4 focus:ring-brand-200 active:scale-[0.98] disabled:opacity-80">
              <span class="pointer-events-none absolute inset-y-0 left-0 w-1/4 bg-white/25 animate-shine"></span>
              <span id="btnText" class="relative">Sign in</span>
              <svg id="arrow" class="relative h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
              <svg id="spinner" class="relative hidden h-5 w-5 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path></svg>
            </button>
          </div>
        </form>

        <!-- Divider -->
        <!-- <div class="my-7 flex items-center gap-4 animate-fadeUp d7">
          <span class="h-px flex-1 bg-slate-200"></span>
          <span class="text-xs font-medium uppercase tracking-wider text-slate-400">or continue with</span>
          <span class="h-px flex-1 bg-slate-200"></span>
        </div> -->

        <!-- Social -->
        <!-- <div class="grid grid-cols-2 gap-3 animate-fadeUp d7">
          <button type="button" class="flex items-center justify-center gap-2.5 rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:border-slate-300 hover:shadow-md">
            <svg class="h-5 w-5" viewBox="0 0 48 48"><path fill="#EA4335" d="M24 9.5c3.5 0 6.6 1.2 9.1 3.6l6.8-6.8C35.8 2.4 30.3 0 24 0 14.6 0 6.5 5.4 2.6 13.2l7.9 6.1C12.4 13.6 17.7 9.5 24 9.5z"/><path fill="#4285F4" d="M46.5 24.5c0-1.6-.1-3.1-.4-4.5H24v9h12.7c-.6 3-2.3 5.5-4.8 7.2l7.5 5.8c4.4-4.1 7.1-10.1 7.1-17.5z"/><path fill="#FBBC05" d="M10.5 28.7a14.5 14.5 0 010-9.4l-7.9-6.1a24 24 0 000 21.6l7.9-6.1z"/><path fill="#34A853" d="M24 48c6.5 0 11.9-2.1 15.9-5.8l-7.5-5.8c-2.1 1.4-4.9 2.3-8.4 2.3-6.3 0-11.6-4.1-13.5-9.8l-7.9 6.1C6.5 42.6 14.6 48 24 48z"/></svg>
            Google
          </button>
          <button type="button" class="flex items-center justify-center gap-2.5 rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:border-slate-300 hover:shadow-md">
            <svg class="h-5 w-5" viewBox="0 0 24 24"><path fill="#F25022" d="M1 1h10v10H1z"/><path fill="#7FBA00" d="M13 1h10v10H13z"/><path fill="#00A4EF" d="M1 13h10v10H1z"/><path fill="#FFB900" d="M13 13h10v10H13z"/></svg>
            Microsoft
          </button>
        </div> -->

        <!-- <p class="mt-7 text-center text-sm text-slate-500 animate-fadeUp d7">
          Need an account? <a href="#" class="font-semibold text-brand-600 hover:text-brand-800">Contact school admin</a>
        </p> -->
      </div>

      <div class="mt-6 flex items-center justify-center gap-2 text-xs text-slate-400 animate-fadeIn">
        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.04A11.96 11.96 0 013.6 6a12 12 0 00-.15 2.25c0 5.6 3.82 10.3 9 11.62 5.18-1.32 9-6.02 9-11.62 0-.76-.05-1.5-.15-2.25A11.96 11.96 0 0112 2.71z"/></svg>
        256-bit encrypted •&nbsp; © <span id="year"></span> EduManage
      </div>
    </div>
  </main>
</div>

<script>
  document.getElementById('year').textContent = new Date().getFullYear();

  // Password toggle
  const pw = document.getElementById('password');
  document.getElementById('togglePw').addEventListener('click', () => {
    const show = pw.type === 'password';
    pw.type = show ? 'text' : 'password';
    document.getElementById('eyeOn').classList.toggle('hidden', show);
    document.getElementById('eyeOff').classList.toggle('hidden', !show);
  });

  // Caps lock warning
  pw.addEventListener('keyup', e => {
    document.getElementById('capsWarn').classList.toggle('hidden', !e.getModifierState('CapsLock'));
  });
  pw.addEventListener('blur', () => document.getElementById('capsWarn').classList.add('hidden'));

  // Animated counters
  document.querySelectorAll('[data-count]').forEach(el => {
    const target = +el.dataset.count, suffix = el.dataset.suffix || '';
    const start = performance.now(), dur = 1800;
    (function tick(now) {
      const p = Math.min((now - start) / dur, 1);
      const eased = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.round(target * eased).toLocaleString() + suffix;
      if (p < 1) requestAnimationFrame(tick);
    })(start);
  });

  // Testimonial slider
  const slides = document.querySelectorAll('#slides .slide');
  const dots = document.querySelectorAll('#dots span');
  let idx = 0;
  setInterval(() => {
    slides[idx].classList.add('hidden-slide');
    dots[idx].className = 'h-1.5 w-2 rounded-full bg-white/40 transition-all';
    idx = (idx + 1) % slides.length;
    slides[idx].classList.remove('hidden-slide');
    dots[idx].className = 'h-1.5 w-8 rounded-full bg-white transition-all';
  }, 4500);

  // Form submit (demo)
  const form = document.getElementById('loginForm');
  const errorBox = document.getElementById('error');
  const card = document.getElementById('card');

  function showError(msg) {
    errorBox.textContent = msg;
    errorBox.classList.remove('hidden');
    errorBox.classList.add('flex');
    card.classList.remove('animate-shake');
    void card.offsetWidth;
    card.classList.add('animate-shake');
  }

  form.addEventListener('submit', e => {
    e.preventDefault();
    const id = document.getElementById('email').value.trim();
    errorBox.classList.add('hidden'); errorBox.classList.remove('flex');

    if (!id || !pw.value) return showError('Please enter your ID and password.');

    const btn = document.getElementById('submitBtn');
    btn.disabled = true;
    document.getElementById('spinner').classList.remove('hidden');
    document.getElementById('arrow').classList.add('hidden');
    document.getElementById('btnText').textContent = 'Signing in...';

    // TODO: replace with your real API call
    setTimeout(() => {
      btn.disabled = false;
      document.getElementById('spinner').classList.add('hidden');
      document.getElementById('arrow').classList.remove('hidden');
      document.getElementById('btnText').textContent = 'Sign in';
      alert('Demo: login successful for ' + id);
    }, 1400);
  });
</script>
</body>
</html>