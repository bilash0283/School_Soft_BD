<header class="sticky top-0 z-20 h-16 bg-white/85 backdrop-blur border-b border-slate-200 flex items-center gap-3 px-4 sm:px-6">

      <!-- Mobile-e menu kholar button (boro screen-e lukano) -->
      <button id="openMenu" class="lg:hidden p-2 -ml-2 text-slate-600" aria-label="Open menu">
        <i data-lucide="menu" class="w-6 h-6"></i>
      </button>

      <!-- Search box (tablet o boro screen-e dekha jay) -->
      <div class="hidden md:flex relative w-full max-w-sm">
        <i data-lucide="search" class="w-4 h-4 absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400"></i>
        <input type="text" placeholder="Search student, teacher, class..."
          class="w-full h-10 rounded-xl bg-slate-100 border border-transparent pl-10 pr-4 text-sm
                 focus:outline-none focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/15 transition">
      </div>

      <!-- Faka jaygа: porer jinish-gulo dan pashe thelte -->
      <div class="flex-1"></div>

      <!-- Notification button (lal dot = notun notification) -->
      <button class="relative p-2.5 rounded-xl hover:bg-slate-100 text-slate-600 transition" aria-label="Notifications">
        <i data-lucide="bell" class="w-5 h-5"></i>
        <span class="absolute top-2 right-2.5 w-2 h-2 rounded-full bg-primary ring-2 ring-white"></span>
      </button>

      <!-- Profile avatar -->
      <div class="hidden sm:flex w-10 h-10 rounded-full bg-primary text-white font-bold items-center justify-center text-sm">KH</div>
    </header>