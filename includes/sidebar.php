<aside id="sidebar"
    class="fixed inset-y-0 left-0 z-40 w-72 max-w-[85%] bg-white border-r border-slate-200 flex flex-col
           -translate-x-full lg:translate-x-0 transition-transform duration-300">

    <!-- Sidebar: Logo -->
    <div class="h-16 shrink-0 flex items-center justify-between px-5 border-b border-slate-100">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-xl bg-primary text-white flex items-center justify-center shadow-md shadow-primary/30">
          <i data-lucide="graduation-cap" class="w-5 h-5"></i>
        </div>
        <span class="font-extrabold tracking-tight text-lg">Your School</span>
      </div>
      <!-- Mobile-e menu bondho korar button -->
      <button id="closeMenu" class="lg:hidden p-2 -mr-2 text-slate-500" aria-label="Close menu">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>
    </div>

    <!-- Sidebar: Menu list (scroll hoy) -->
    <nav class="flex-1 overflow-y-auto px-3 pb-6">

      <!-- Group: Main -->
      <p class="px-3 mt-6 mb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">Main</p>
      <a href="#" class="nav-link active">
        <i data-lucide="layout-dashboard" class="w-5 h-5 shrink-0"></i><span>Dashboard</span>
      </a>

      <!-- Group: Academic -->
      <p class="px-3 mt-6 mb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">Academic</p>

      <!-- Dropdown menu example (data-toggle dile click-e khole/bondho hoy) -->
      <div>
        <button type="button" class="nav-link w-full" data-toggle>
          <i data-lucide="graduation-cap" class="w-5 h-5 shrink-0"></i>
          <span class="flex-1 text-left">Students</span>
          <i data-lucide="chevron-down" class="chev w-4 h-4 transition-transform"></i>
        </button>

        <div class="submenu hidden ml-5 pl-3 border-l border-slate-200 mt-1 mb-1 space-y-0.5">
          <a href="dashboard.php?page=all_students" class="nav-link !py-2 !text-[13px]">All Students</a>
          <a href="#" class="nav-link !py-2 !text-[13px]">New Admission</a>
          <a href="#" class="nav-link !py-2 !text-[13px]">Promotion</a>
          <a href="#" class="nav-link !py-2 !text-[13px]">ID Cards</a>
        </div>
        
      </div>

      <div>
        <button type="button" class="nav-link w-full" data-toggle>
          <i data-lucide="users" class="w-5 h-5 shrink-0"></i>
          <span class="flex-1 text-left">Teachers & Staff</span>
          <i data-lucide="chevron-down" class="chev w-4 h-4 transition-transform"></i>
        </button>
        <div class="submenu hidden ml-5 pl-3 border-l border-slate-200 mt-1 mb-1 space-y-0.5">
          <a href="#" class="nav-link !py-2 !text-[13px]">Teacher List</a>
          <a href="#" class="nav-link !py-2 !text-[13px]">Staff List</a>
          <a href="#" class="nav-link !py-2 !text-[13px]">Payroll</a>
        </div>
      </div>

      <!-- Dropdown chhara shadharon menu -->
      <a href="#" class="nav-link"><i data-lucide="book-open" class="w-5 h-5 shrink-0"></i><span>Classes & Subjects</span></a>
      <a href="#" class="nav-link"><i data-lucide="calendar-check" class="w-5 h-5 shrink-0"></i><span>Attendance</span></a>
      <a href="#" class="nav-link"><i data-lucide="clock" class="w-5 h-5 shrink-0"></i><span>Class Routine</span></a>
      <a href="#" class="nav-link"><i data-lucide="file-text" class="w-5 h-5 shrink-0"></i><span>Exams & Results</span></a>

      <!-- Group: Finance -->
      <p class="px-3 mt-6 mb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">Finance</p>
      <a href="#" class="nav-link"><i data-lucide="wallet" class="w-5 h-5 shrink-0"></i><span>Fees & Accounts</span></a>
      <a href="#" class="nav-link"><i data-lucide="receipt" class="w-5 h-5 shrink-0"></i><span>Expenses</span></a>

      <!-- Group: Campus -->
      <p class="px-3 mt-6 mb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">Campus</p>
      <a href="#" class="nav-link"><i data-lucide="library" class="w-5 h-5 shrink-0"></i><span>Library</span></a>
      <a href="#" class="nav-link"><i data-lucide="bus" class="w-5 h-5 shrink-0"></i><span>Transport</span></a>
      <a href="#" class="nav-link"><i data-lucide="megaphone" class="w-5 h-5 shrink-0"></i><span>Notice Board</span></a>

      <!-- Group: System -->
      <p class="px-3 mt-6 mb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">System</p>
      <a href="#" class="nav-link"><i data-lucide="bar-chart-3" class="w-5 h-5 shrink-0"></i><span>Reports</span></a>
      <a href="#" class="nav-link"><i data-lucide="shield-check" class="w-5 h-5 shrink-0"></i><span>Users & Roles</span></a>
      <a href="#" class="nav-link"><i data-lucide="settings" class="w-5 h-5 shrink-0"></i><span>Settings</span></a>
    </nav>

    <!-- Sidebar: Niche user card + logout -->
    <div class="shrink-0 border-t border-slate-100 p-4 flex items-center gap-3">
      <div class="w-10 h-10 rounded-full bg-primary text-white font-bold flex items-center justify-center text-sm">KH</div>
      <div class="min-w-0 flex-1">
        <p class="text-sm font-semibold truncate">Karim Hossain</p>
        <p class="text-xs text-slate-500 truncate">Head Administrator</p>
      </div>
      <a href="login.html" title="Logout" class="p-2 text-slate-400 hover:text-primary transition">
        <i data-lucide="log-out" class="w-5 h-5"></i>
      </a>
    </div>
  </aside>