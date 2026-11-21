<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in | School Management System</title>

  <!-- Tailwind CSS (CDN): kono install lagbe na -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!--
    =====================================================
    PRIMARY COLOR: shudhu ei ek jayga theke color bodlan
    Format: "R G B" (space diye). Example:
      Blue   = 37 99 235
      Indigo = 79 70 229
      Green  = 5 150 105
      Red    = 220 38 38
      Purple = 124 58 237
    =====================================================
  -->
  <style>
    :root { --primary: 79 70 229; }
    body  { font-family: 'Plus Jakarta Sans', sans-serif; }

    /* Bam panel-er halka dot pattern (primary color-er upor) */
    .dots {
      background-image: radial-gradient(rgba(255,255,255,.18) 1.2px, transparent 1.2px);
      background-size: 22px 22px;
    }
  </style>

  <script>
    tailwind.config = {
      theme: { extend: { colors: { primary: 'rgb(var(--primary) / <alpha-value>)' } } }
    }
  </script>
</head>

<body class="bg-white text-slate-800 antialiased">

  <div class="min-h-screen grid lg:grid-cols-2">

    <!-- ================= BAM PANEL (shudhu boro screen) ================= -->
    <aside class="hidden lg:flex relative overflow-hidden bg-primary text-white">

      <!-- Dot pattern + niche theke gora kalo shade -->
      <div class="absolute inset-0 dots"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-white/10"></div>

      <!-- Sajanor circle -->
      <div class="absolute -top-32 -right-32 w-[28rem] h-[28rem] rounded-full border border-white/20"></div>
      <div class="absolute -top-16 -right-16 w-[20rem] h-[20rem] rounded-full border border-white/20"></div>

      <div class="relative z-10 flex flex-col justify-between w-full p-14">

        <!-- Logo -->
        <div class="flex items-center gap-3">
          <div class="w-11 h-11 rounded-xl bg-white text-primary flex items-center justify-center shadow-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6m-6-8.5V16c0 1.1 2.7 3 6 3s6-1.9 6-3v-4.5"/>
            </svg>
          </div>
          <span class="text-lg font-bold tracking-tight">Your School Name</span>
        </div>

        <!-- Headline -->
        <div class="max-w-lg">
          <h1 class="text-5xl font-extrabold leading-[1.1] tracking-tight">
            Run your school<br>with confidence.
          </h1>
          <p class="mt-5 text-lg text-white/80 leading-relaxed">
            Attendance, result, fee o notice, shob kichu ek dashboard theke shohoje manage korun.
          </p>

          <!-- Stats (nijer school-er number boshan) -->
          <div class="mt-10 grid grid-cols-3 gap-4">
            <div class="rounded-2xl bg-white/10 backdrop-blur-sm border border-white/15 p-4">
              <p class="text-2xl font-bold">1,200+</p>
              <p class="text-xs text-white/70 mt-1">Students</p>
            </div>
            <div class="rounded-2xl bg-white/10 backdrop-blur-sm border border-white/15 p-4">
              <p class="text-2xl font-bold">80+</p>
              <p class="text-xs text-white/70 mt-1">Teachers</p>
            </div>
            <div class="rounded-2xl bg-white/10 backdrop-blur-sm border border-white/15 p-4">
              <p class="text-2xl font-bold">98%</p>
              <p class="text-xs text-white/70 mt-1">Attendance</p>
            </div>
          </div>
        </div>

        <p class="text-sm text-white/60">&copy; 2026 Your School Name</p>
      </div>
    </aside>

    <!-- ================= DAN DIK: FORM ================= -->
    <main class="flex flex-col">

      <!-- Mobile banner (boro screen-e hide) -->
      <div class="lg:hidden relative bg-primary text-white px-6 pt-10 pb-24 rounded-b-[2rem] overflow-hidden">
        <div class="absolute inset-0 dots"></div>
        <div class="relative flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-white text-primary flex items-center justify-center">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6m-6-8.5V16c0 1.1 2.7 3 6 3s6-1.9 6-3v-4.5"/>
            </svg>
          </div>
          <span class="text-lg font-bold">Your School Name</span>
        </div>
      </div>

      <!-- Form area -->
      <div class="flex-1 flex items-start lg:items-center justify-center px-5 sm:px-10 pb-10 lg:py-12">

        <!-- Mobile-e card banner-er upor uthe thakbe (-mt-16) -->
        <div class="w-full max-w-md -mt-16 lg:mt-0 bg-white rounded-3xl shadow-xl shadow-slate-900/10 lg:shadow-none border border-slate-100 lg:border-0 p-7 sm:p-9 lg:p-0">

          <h2 class="text-3xl font-extrabold tracking-tight text-slate-900">Sign in</h2>
          <p class="mt-2 text-slate-500">Apnar email o password diye login korun.</p>

          <!-- action = form submit hole kon PHP file-e jabe -->
          <form action="dashboard.php" method="POST" class="mt-8 space-y-5">

            <!-- Email -->
            <div>
              <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
              <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5l9 6 9-6M4.5 5.5h15A1.5 1.5 0 0121 7v10a1.5 1.5 0 01-1.5 1.5h-15A1.5 1.5 0 013 17V7a1.5 1.5 0 011.5-1.5z"/>
                  </svg>
                </span>
                <input type="email" id="email" name="email" required autocomplete="email"
                  placeholder="name@school.com"
                  class="w-full h-12 rounded-xl bg-slate-50 border border-slate-200 pl-12 pr-4 text-sm
                         placeholder-slate-400 transition
                         focus:outline-none focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/15">
              </div>
            </div>

            <!-- Password -->
            <div>
              <div class="flex items-center justify-between mb-2">
                <label for="password" class="block text-sm font-semibold text-slate-700">Password</label>
              </div>
              <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V7.5a4.5 4.5 0 10-9 0v3M6 10.5h12a1.5 1.5 0 011.5 1.5v7.5A1.5 1.5 0 0118 21H6a1.5 1.5 0 01-1.5-1.5V12A1.5 1.5 0 016 10.5z"/>
                  </svg>
                </span>
                <input type="password" id="password" name="password" required autocomplete="current-password"
                  placeholder="Enter your password"
                  class="w-full h-12 rounded-xl bg-slate-50 border border-slate-200 pl-12 pr-12 text-sm
                         placeholder-slate-400 transition
                         focus:outline-none focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/15">
                <!-- Show / hide button -->
                <button type="button" id="togglePassword" aria-label="Show password"
                  class="absolute inset-y-0 right-0 flex items-center pr-4 text-slate-400 hover:text-primary transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.5 12S6 5.5 12 5.5 21.5 12 21.5 12 18 18.5 12 18.5 2.5 12 2.5 12z"/>
                    <circle cx="12" cy="12" r="3"/>
                  </svg>
                </button>

                
                <a href="forgot-password.php" class="text-sm font-semibold text-primary hover:underline">Forgot password?</a>
              </div>
            </div>

            <!-- Login button -->
            <button type="submit"
              class="w-full h-12 rounded-xl bg-primary text-white font-semibold
                     shadow-lg shadow-primary/30 transition
                     hover:bg-primary/90 hover:shadow-xl hover:shadow-primary/40
                     active:scale-[0.98] focus:outline-none focus:ring-4 focus:ring-primary/30">
              Sign in
            </button>
          </form>

          <p class="mt-8 text-center text-sm text-slate-500">
            Login-e shomossha hole school office-e jogajog korun.
          </p>
        </div>
      </div>
    </main>

  </div>

  <!-- Password show/hide -->
  <script>
    const input = document.getElementById('password');
    document.getElementById('togglePassword').addEventListener('click', () => {
      input.type = input.type === 'password' ? 'text' : 'password';
    });
  </script>

</body>
</html>