<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students | School Management System</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- PRIMARY COLOR: shudhu ei ek line bodlalei pura page-er rong bodle jabe -->
  <style>
    :root { --primary: 79 70 229; }
    body  { font-family: 'Plus Jakarta Sans', sans-serif; }
    #menu::-webkit-scrollbar { width: 6px; }
    #menu::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 99px; }
  </style>
  <script>
    tailwind.config = { theme: { extend: { colors: { primary: 'rgb(var(--primary) / <alpha-value>)' } } } }
  </script>

  <style type="text/tailwindcss">
    @layer components {
      .card  { @apply bg-white rounded-2xl border border-slate-200/70 shadow-sm p-5 sm:p-6; }
      .chip  { @apply text-xs font-semibold text-primary bg-primary/10 px-2.5 py-1 rounded-full whitespace-nowrap; }
      .nav-link { @apply flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition cursor-pointer; }
      .nav-link.active { @apply bg-primary/10 text-primary font-semibold; }
      /* Form input (shob jaygay ek-i style) */
      .inp { @apply w-full h-11 rounded-xl bg-slate-50 border border-slate-200 px-3.5 text-sm placeholder-slate-400 transition
                    focus:outline-none focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/15; }
      textarea.inp { @apply h-auto py-2.5; }
      .lbl { @apply block text-xs font-semibold text-slate-600 mb-1.5; }
      .err { @apply text-xs text-rose-600 mt-1 hidden; }
      .btn { @apply inline-flex items-center justify-center gap-2 h-11 px-4 rounded-xl text-sm font-semibold transition; }
      .btn-primary { @apply bg-primary text-white shadow-lg shadow-primary/30 hover:bg-primary/90 active:scale-[0.98]; }
      .btn-ghost   { @apply bg-white border border-slate-200 text-slate-700 hover:bg-slate-50; }
      .icon-btn    { @apply w-9 h-9 inline-flex items-center justify-center rounded-lg text-slate-500 hover:bg-primary/10 hover:text-primary transition; }
    }
  </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased">

  <div id="overlay" class="fixed inset-0 z-30 bg-slate-900/40 backdrop-blur-sm hidden lg:hidden"></div>

  <!-- ================= SIDEBAR =================
       (Laravel-e eta ekbar layout file-e likhle shob page-e ashbe) -->
  <aside id="sidebar" class="fixed inset-y-0 left-0 z-40 w-72 max-w-[85%] bg-white border-r border-slate-200 flex flex-col -translate-x-full lg:translate-x-0 transition-transform duration-300">
    <div class="h-16 shrink-0 flex items-center justify-between px-5 border-b border-slate-100">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-xl bg-primary text-white flex items-center justify-center shadow-md shadow-primary/30"><i data-lucide="graduation-cap" class="w-5 h-5"></i></div>
        <span class="font-extrabold tracking-tight text-lg">Your School</span>
      </div>
      <button id="closeMenu" class="lg:hidden p-2 -mr-2 text-slate-500" aria-label="Close menu"><i data-lucide="x" class="w-5 h-5"></i></button>
    </div>
    <nav id="menu" class="flex-1 overflow-y-auto px-3 py-4 space-y-1"></nav>
    <div class="shrink-0 border-t border-slate-100 p-4 flex items-center gap-3">
      <div class="w-10 h-10 rounded-full bg-primary text-white font-bold flex items-center justify-center text-sm">KH</div>
      <div class="min-w-0 flex-1"><p class="text-sm font-semibold truncate">Karim Hossain</p><p class="text-xs text-slate-500 truncate">Head Administrator</p></div>
      <a href="login.html" title="Logout" class="p-2 text-slate-400 hover:text-primary transition"><i data-lucide="log-out" class="w-5 h-5"></i></a>
    </div>
  </aside>

  <div class="lg:pl-72">

    <!-- Top bar -->
    <header class="sticky top-0 z-20 h-16 bg-white/85 backdrop-blur border-b border-slate-200 flex items-center gap-3 px-4 sm:px-6">
      <button id="openMenu" class="lg:hidden p-2 -ml-2 text-slate-600" aria-label="Open menu"><i data-lucide="menu" class="w-6 h-6"></i></button>
      <nav class="flex items-center gap-2 text-sm text-slate-500">
        <a href="dashboard.html" class="hover:text-primary hidden sm:block">Dashboard</a>
        <i data-lucide="chevron-right" class="w-4 h-4 hidden sm:block"></i>
        <span class="font-semibold text-slate-900">Students</span>
      </nav>
      <div class="flex-1"></div>
      <button class="relative p-2.5 rounded-xl hover:bg-slate-100 text-slate-600 transition" aria-label="Notifications">
        <i data-lucide="bell" class="w-5 h-5"></i>
        <span class="absolute top-2 right-2.5 w-2 h-2 rounded-full bg-primary ring-2 ring-white"></span>
      </button>
    </header>

    <main class="p-4 sm:p-6 lg:p-8 max-w-7xl mx-auto">

      <!-- Page title + buttons -->
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
          <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Students</h1>
          <p class="mt-1 text-slate-500 text-sm sm:text-base">Shob student-er list, filter o management ek jaygay.</p>
        </div>
        <div class="flex gap-2">
          <button id="exportBtn" class="btn btn-ghost flex-1 sm:flex-none"><i data-lucide="download" class="w-4 h-4"></i>Export</button>
          <button id="addBtn" class="btn btn-primary flex-1 sm:flex-none"><i data-lucide="plus" class="w-4 h-4"></i>Add Student</button>
        </div>
      </div>

      <!-- Mini stats -->
      <div id="miniStats" class="mt-6 grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4"></div>

      <!-- ================= SEARCH + FILTER ================= -->
      <section class="card !p-4 sm:!p-5 mt-5">
        <div class="flex flex-col gap-3 md:flex-row md:items-center">

          <!-- Live search -->
          <div class="relative flex-1">
            <i data-lucide="search" class="w-4 h-4 absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400"></i>
            <input id="search" type="text" autocomplete="off" class="inp !pl-10 !pr-20"
                   placeholder="Search name, ID, roll, phone, guardian...">
            <span class="hidden sm:flex absolute right-3 top-1/2 -translate-y-1/2 items-center gap-1" id="slashHint">
              <kbd class="text-[11px] font-semibold text-slate-400 border border-slate-200 rounded-md px-1.5 py-0.5">/</kbd>
            </span>
            <button id="clearSearch" type="button" class="hidden absolute right-3 top-1/2 -translate-y-1/2 p-1 text-slate-400 hover:text-primary" aria-label="Clear search">
              <i data-lucide="x-circle" class="w-5 h-5"></i>
            </button>
          </div>

          <div class="flex gap-2">
            <!-- Mobile-e Filters button -->
            <button id="openFilters" class="btn btn-ghost md:hidden flex-1 relative">
              <i data-lucide="sliders-horizontal" class="w-4 h-4"></i>Filters
              <span id="filterBadge" class="hidden absolute -top-1.5 -right-1.5 min-w-5 h-5 px-1 rounded-full bg-primary text-white text-[11px] font-bold items-center justify-center"></span>
            </button>
            <select id="sortSel" class="inp !w-auto flex-1 md:flex-none font-medium">
              <option value="new">Newest first</option>
              <option value="az">Name A to Z</option>
              <option value="za">Name Z to A</option>
              <option value="roll">Roll (low to high)</option>
              <option value="class">Class (low to high)</option>
            </select>
          </div>
        </div>

        <!-- Filter panel: mobile-e niche theke uthe ashe, boro screen-e shobshomoy dekha jay -->
        <div id="filterPanel"
             class="fixed inset-x-0 bottom-0 z-40 max-h-[88vh] overflow-y-auto bg-white rounded-t-3xl p-5 shadow-2xl
                    translate-y-full transition-transform duration-300
                    md:static md:translate-y-0 md:max-h-none md:overflow-visible md:rounded-none md:p-0 md:shadow-none md:mt-4">
          <div class="md:hidden flex items-center justify-between mb-4">
            <h3 class="font-bold text-lg">Filters</h3>
            <button id="closeFilters" class="p-2 -mr-2 text-slate-500" aria-label="Close"><i data-lucide="x" class="w-5 h-5"></i></button>
          </div>
          <div id="filterFields" class="grid grid-cols-2 gap-3 md:grid-cols-4 xl:grid-cols-7"></div>
          <div class="md:hidden mt-5 grid grid-cols-2 gap-3">
            <button id="resetMobile" class="btn btn-ghost">Reset</button>
            <button id="applyMobile" class="btn btn-primary">Show results</button>
          </div>
        </div>

        <!-- Active filter chips -->
        <div id="chips" class="mt-4 hidden flex-wrap items-center gap-2"></div>

        <p class="mt-3 text-xs text-slate-400 flex items-center gap-1.5">
          <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-primary"></i>
          Filter, search o page automatic save hoy. Edit kore ferot ashleo ek-i jaygay thakben.
        </p>
      </section>

      <!-- ================= TABLE ================= -->
      <section class="card !p-0 mt-5 overflow-hidden">

        <!-- Bulk action bar -->
        <div id="bulkBar" class="hidden items-center justify-between gap-3 bg-primary/10 px-4 sm:px-6 py-3">
          <p class="text-sm font-semibold text-primary"><span id="selCount">0</span> selected</p>
          <div class="flex items-center gap-2">
            <button id="bulkExport" class="btn btn-ghost !h-9 !px-3"><i data-lucide="download" class="w-4 h-4"></i><span class="hidden sm:inline">Export</span></button>
            <button id="bulkDelete" class="btn btn-ghost !h-9 !px-3 !text-rose-600"><i data-lucide="trash-2" class="w-4 h-4"></i><span class="hidden sm:inline">Delete</span></button>
            <button id="bulkClear" class="btn !h-9 !px-3 text-primary hover:bg-primary/10">Clear</button>
          </div>
        </div>

        <!-- Desktop table -->
        <div class="hidden md:block overflow-x-auto">
          <table class="w-full text-sm">
            <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-500">
              <tr>
                <th class="pl-6 pr-2 py-3.5 w-10"><input id="selAll" type="checkbox" class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary"></th>
                <th class="px-3 py-3.5 text-left font-semibold">Student</th>
                <th class="px-3 py-3.5 text-left font-semibold">Class</th>
                <th class="px-3 py-3.5 text-left font-semibold">Roll</th>
                <th class="px-3 py-3.5 text-left font-semibold">Guardian</th>
                <th class="px-3 py-3.5 text-left font-semibold">Gender</th>
                <th class="px-3 py-3.5 text-left font-semibold">Fee</th>
                <th class="px-3 py-3.5 text-left font-semibold">Status</th>
                <th class="pl-3 pr-6 py-3.5 text-right font-semibold">Action</th>
              </tr>
            </thead>
            <tbody id="rows" class="divide-y divide-slate-100"></tbody>
          </table>
        </div>

        <!-- Mobile cards -->
        <div id="cards" class="md:hidden divide-y divide-slate-100"></div>

        <!-- Empty state -->
        <div id="empty" class="hidden px-6 py-16 text-center">
          <div class="mx-auto w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center"><i data-lucide="search-x" class="w-8 h-8"></i></div>
          <h3 class="mt-4 text-lg font-bold">Kono student pawa jayni</h3>
          <p class="mt-1 text-sm text-slate-500">Search ba filter bodle abar chesta korun.</p>
          <button id="emptyReset" class="btn btn-primary mt-5">Reset filters</button>
        </div>

        <!-- Pagination -->
        <div class="border-t border-slate-100 px-4 sm:px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-3">
          <div class="flex items-center gap-3 text-sm text-slate-500">
            <span id="pageInfo"></span>
            <select id="perSel" class="h-9 rounded-lg border border-slate-200 bg-white px-2 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-primary/15 focus:border-primary">
              <option value="10">10 / page</option><option value="25">25 / page</option><option value="50">50 / page</option>
            </select>
          </div>
          <div id="pager" class="flex items-center gap-1"></div>
        </div>
      </section>

      <p class="mt-10 text-center text-xs text-slate-400">&copy; 2026 Your School Name &middot; School Management System</p>
    </main>
  </div>

  <!-- Filter-er mobile overlay -->
  <div id="filterOverlay" class="fixed inset-0 z-30 bg-slate-900/40 backdrop-blur-sm hidden md:hidden"></div>

  <!-- ================= ADD / EDIT MODAL ================= -->
  <div id="modal" class="fixed inset-0 z-50 hidden">
    <div id="modalBg" class="absolute inset-0 bg-slate-900/50 backdrop-blur-sm"></div>
    <div class="absolute inset-x-0 bottom-0 md:inset-0 md:flex md:items-center md:justify-center md:p-6 pointer-events-none">
      <form id="studentForm" novalidate
            class="pointer-events-auto w-full md:max-w-3xl max-h-[94vh] flex flex-col bg-white rounded-t-3xl md:rounded-2xl shadow-2xl">

        <!-- Header -->
        <div class="shrink-0 flex items-center justify-between px-5 sm:px-7 py-4 border-b border-slate-100">
          <div>
            <h2 id="modalTitle" class="text-lg sm:text-xl font-extrabold">Add New Student</h2>
            <p class="text-xs text-slate-500 mt-0.5">* chihnito ghor gulo obosshoi purn korte hobe</p>
          </div>
          <button type="button" data-close class="p-2 -mr-2 text-slate-500 hover:text-primary" aria-label="Close"><i data-lucide="x" class="w-5 h-5"></i></button>
        </div>

        <!-- Body (scroll hoy) -->
        <div class="flex-1 overflow-y-auto px-5 sm:px-7 py-5 space-y-7">

          <!-- Basic info -->
          <div>
            <h3 class="flex items-center gap-2 text-sm font-bold text-primary mb-4"><i data-lucide="user" class="w-4 h-4"></i>Basic Information</h3>
            <div class="flex items-center gap-4 mb-4">
              <div id="photoPreview" class="w-20 h-20 rounded-2xl bg-primary/10 text-primary flex items-center justify-center overflow-hidden shrink-0">
                <i data-lucide="camera" class="w-7 h-7"></i>
              </div>
              <div>
                <label class="btn btn-ghost !h-9 cursor-pointer text-xs">Upload photo<input id="photoInput" name="photo" type="file" accept="image/*" class="hidden"></label>
                <p class="text-xs text-slate-400 mt-1.5">JPG ba PNG, max 2MB</p>
              </div>
            </div>
            <div class="grid sm:grid-cols-2 gap-4">
              <div><label class="lbl">Full Name *</label><input name="name" class="inp" placeholder="e.g. Rahim Uddin"><p class="err" data-err="name"></p></div>
              <div><label class="lbl">Name (Bangla)</label><input name="nameBn" class="inp" placeholder="রহিম উদ্দিন"></div>
              <div><label class="lbl">Student ID</label><input name="code" class="inp !bg-slate-100 text-slate-500" readonly></div>
              <div><label class="lbl">Gender *</label>
                <select name="gender" class="inp"><option value="">Select</option><option>Male</option><option>Female</option></select>
                <p class="err" data-err="gender"></p></div>
              <div><label class="lbl">Date of Birth</label><input name="dob" type="date" class="inp"></div>
              <div><label class="lbl">Blood Group</label>
                <select name="blood" class="inp"><option value="">Select</option></select></div>
              <div><label class="lbl">Religion</label>
                <select name="religion" class="inp"><option>Islam</option><option>Hinduism</option><option>Buddhism</option><option>Christianity</option><option>Other</option></select></div>
            </div>
          </div>

          <!-- Academic -->
          <div>
            <h3 class="flex items-center gap-2 text-sm font-bold text-primary mb-4"><i data-lucide="book-open" class="w-4 h-4"></i>Academic Information</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
              <div><label class="lbl">Class *</label><select name="cls" class="inp"><option value="">Select</option></select><p class="err" data-err="cls"></p></div>
              <div><label class="lbl">Section *</label><select name="section" class="inp"><option value="">Select</option></select><p class="err" data-err="section"></p></div>
              <div><label class="lbl">Roll No *</label><input name="roll" type="number" min="1" class="inp" placeholder="e.g. 12"><p class="err" data-err="roll"></p></div>
              <div><label class="lbl">Admission Date *</label><input name="admissionDate" type="date" class="inp"><p class="err" data-err="admissionDate"></p></div>
              <div><label class="lbl">Status</label>
                <select name="status" class="inp"><option value="active">Active</option><option value="inactive">Inactive</option><option value="transferred">Transferred</option></select></div>
            </div>
          </div>

          <!-- Guardian -->
          <div>
            <h3 class="flex items-center gap-2 text-sm font-bold text-primary mb-4"><i data-lucide="users" class="w-4 h-4"></i>Guardian Information</h3>
            <div class="grid sm:grid-cols-2 gap-4">
              <div><label class="lbl">Father's Name *</label><input name="father" class="inp"><p class="err" data-err="father"></p></div>
              <div><label class="lbl">Mother's Name</label><input name="mother" class="inp"></div>
              <div><label class="lbl">Guardian Phone *</label><input name="phone" type="tel" inputmode="numeric" maxlength="11" class="inp" placeholder="01XXXXXXXXX"><p class="err" data-err="phone"></p></div>
              <div><label class="lbl">Email</label><input name="email" type="email" class="inp" placeholder="optional"><p class="err" data-err="email"></p></div>
              <div class="sm:col-span-2"><label class="lbl">Address</label><textarea name="address" rows="2" class="inp" placeholder="Gram / Road, Thana, Zila"></textarea></div>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <div class="shrink-0 flex flex-col-reverse sm:flex-row sm:justify-end gap-2 px-5 sm:px-7 py-4 border-t border-slate-100 bg-slate-50/60 rounded-b-2xl">
          <button type="button" data-close class="btn btn-ghost">Cancel</button>
          <button type="submit" id="saveBtn" class="btn btn-primary"><i data-lucide="check" class="w-4 h-4"></i><span>Save Student</span></button>
        </div>
      </form>
    </div>
  </div>

  <!-- ================= DELETE CONFIRM ================= -->
  <div id="confirmBox" class="fixed inset-0 z-[60] hidden items-center justify-center p-5">
    <div id="confirmBg" class="absolute inset-0 bg-slate-900/50 backdrop-blur-sm"></div>
    <div class="relative w-full max-w-sm bg-white rounded-2xl shadow-2xl p-6 text-center">
      <div class="mx-auto w-14 h-14 rounded-2xl bg-rose-50 text-rose-600 flex items-center justify-center"><i data-lucide="trash-2" class="w-7 h-7"></i></div>
      <h3 class="mt-4 text-lg font-bold">Delete korben?</h3>
      <p id="confirmText" class="mt-1 text-sm text-slate-500"></p>
      <div class="mt-6 grid grid-cols-2 gap-3">
        <button id="confirmNo" class="btn btn-ghost">Cancel</button>
        <button id="confirmYes" class="btn bg-rose-600 text-white hover:bg-rose-700">Delete</button>
      </div>
    </div>
  </div>

  <!-- Toast -->
  <div id="toast" class="fixed bottom-5 left-1/2 -translate-x-1/2 z-[70] hidden max-w-[92%]">
    <div class="flex items-center gap-2.5 bg-slate-900 text-white text-sm font-medium px-4 py-3 rounded-xl shadow-xl">
      <i data-lucide="check-circle-2" class="w-4 h-4 text-white shrink-0"></i><span id="toastText"></span>
    </div>
  </div>

<script>
/* =====================================================================
   1) SIDEBAR MENU (shortkhep)
   ===================================================================== */
const NAV = [
  ['Dashboard','layout-dashboard','dashboard.html'], ['Students','graduation-cap','#', true],
  ['Teachers & Staff','users'], ['Classes & Subjects','book-open'], ['Attendance','calendar-check'],
  ['Class Routine','clock'], ['Exams & Results','file-text'], ['Fees & Accounts','wallet'],
  ['Library','library'], ['Transport','bus'], ['Notice Board','megaphone'],
  ['Reports','bar-chart-3'], ['Settings','settings']
];
document.getElementById('menu').innerHTML = NAV.map(n =>
  `<a href="${n[2] || '#'}" class="nav-link ${n[3] ? 'active' : ''}"><i data-lucide="${n[1]}" class="w-5 h-5 shrink-0"></i><span>${n[0]}</span></a>`).join('');

/* =====================================================================
   2) SETTINGS: dropdown-er option gulo ekhane bodlan
   ===================================================================== */
const CLASSES  = ['1','2','3','4','5','6','7','8','9','10'];
const SECTIONS = ['A','B','C'];
const BLOODS   = ['A+','A-','B+','B-','O+','O-','AB+','AB-'];
const YEARS    = ['2026','2025','2024','2023'];
const LS_KEY   = 'studentsPageState';   // browser-e filter save-er naam

/* Filter-er list: notun filter jog korte ekhane ekta line likhun */
const FILTERS = [
  { key: 'cls',     label: 'Class',          opts: CLASSES.map(v => [v, 'Class ' + v]) },
  { key: 'section', label: 'Section',        opts: SECTIONS.map(v => [v, 'Section ' + v]) },
  { key: 'gender',  label: 'Gender',         opts: [['Male','Male'], ['Female','Female']] },
  { key: 'status',  label: 'Status',         opts: [['active','Active'], ['inactive','Inactive'], ['transferred','Transferred']] },
  { key: 'fee',     label: 'Fee Status',     opts: [['paid','Paid'], ['partial','Partial'], ['due','Due']] },
  { key: 'year',    label: 'Admission Year', opts: YEARS.map(v => [v, v]) },
  { key: 'blood',   label: 'Blood Group',    opts: BLOODS.map(v => [v, v]) },
];

/* =====================================================================
   3) DEMO DATA (real project-e eta database theke ashbe)
   ===================================================================== */
const BOYS   = ['Rahim','Karim','Tanvir','Sabbir','Arif','Imran','Mehedi','Rakib','Shakil','Nayeem','Fahim','Hasan','Jubayer','Mahmud','Sourav'];
const GIRLS  = ['Nusrat','Mim','Sadia','Tania','Farhana','Jannat','Sumaiya','Ritu','Maliha','Tasnim','Priya','Anika','Lamia','Nabila','Shirin'];
const LAST_M = ['Ahmed','Hossain','Rahman','Islam','Uddin','Chowdhury','Khan','Sarker','Mia','Talukder'];
const LAST_F = ['Akter','Khatun','Jahan','Begum','Sultana','Islam','Parvin','Chowdhury'];
const PLACES = ['Mirpur, Dhaka','Uttara, Dhaka','Mohammadpur, Dhaka','Savar, Dhaka','Narayanganj','Gazipur Sadar','Tongi, Gazipur'];

function makeRng(seed) {                       // same data protibar, tai random hoyeo stable
  return () => { seed |= 0; seed = seed + 0x6D2B79F5 | 0; let t = Math.imul(seed ^ seed >>> 15, 1 | seed);
    t = t + Math.imul(t ^ t >>> 7, 61 | t) ^ t; return ((t ^ t >>> 14) >>> 0) / 4294967296; };
}
function makeData(n) {
  const rand = makeRng(2026), pick = a => a[Math.floor(rand() * a.length)], rollOf = {}, out = [];
  const num = k => Math.floor(rand() * k);
  for (let i = 1; i <= n; i++) {
    const gender = rand() < 0.52 ? 'Male' : 'Female';
    const first = pick(gender === 'Male' ? BOYS : GIRLS), last = pick(gender === 'Male' ? LAST_M : LAST_F);
    const cls = CLASSES[num(10)], section = pick(SECTIONS), k = cls + section;
    rollOf[k] = (rollOf[k] || 0) + 1;
    const year = pick(YEARS), r = rand();
    out.push({
      id: i, code: 'STU-2026-' + String(i).padStart(4, '0'),
      name: first + ' ' + last, nameBn: '', gender, cls, section, roll: rollOf[k],
      dob: `${2026 - (Number(cls) + 5) - num(2)}-0${1 + num(9)}-${10 + num(18)}`,
      blood: pick(BLOODS), religion: 'Islam',
      admissionDate: `${year}-0${1 + num(9)}-${10 + num(18)}`,
      father: 'Md. ' + pick(BOYS) + ' ' + pick(LAST_M), mother: pick(GIRLS) + ' Begum',
      phone: '01' + pick(['3','5','6','7','8','9']) + Array.from({ length: 8 }, () => num(10)).join(''),
      email: '', address: pick(PLACES),
      status: r < 0.88 ? 'active' : r < 0.94 ? 'inactive' : 'transferred',
      fee: ['paid','paid','paid','partial','due'][num(5)]
    });
  }
  return out;
}
let students = makeData(64);

/* =====================================================================
   4) STATE: search + filter + page (URL o browser-e save hoy)
   ===================================================================== */
const DEFAULTS = { q: '', cls: '', section: '', gender: '', status: '', fee: '', year: '', blood: '', sort: 'new', page: 1, per: 10 };
let state = { ...DEFAULTS };
let selected = new Set();
let flashId = null;

const $   = id => document.getElementById(id);
const esc = s => String(s ?? '').replace(/[&<>"']/g, c => ({ '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;' }[c]));
const escRe = s => s.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
const initials = n => n.split(' ').filter(Boolean).map(w => w[0]).slice(0, 2).join('').toUpperCase();

function loadState() {
  let src = null;
  const p = new URLSearchParams(location.search);
  if ([...p.keys()].length) src = Object.fromEntries(p);                       // 1st: URL (link share kora jay)
  else { try { src = JSON.parse(localStorage.getItem(LS_KEY) || 'null'); } catch (e) {} }   // 2nd: browser memory
  if (!src) return false;
  Object.keys(DEFAULTS).forEach(k => {
    if (src[k] === undefined) return;
    state[k] = (k === 'page' || k === 'per') ? (Number(src[k]) || DEFAULTS[k]) : String(src[k]);
  });
  return true;
}
function saveState() {
  const p = new URLSearchParams();
  Object.keys(DEFAULTS).forEach(k => { if (state[k] !== DEFAULTS[k]) p.set(k, state[k]); });
  try { history.replaceState(null, '', p.toString() ? '?' + p : location.pathname); } catch (e) {}
  try { localStorage.setItem(LS_KEY, JSON.stringify(state)); } catch (e) {}
}

/* =====================================================================
   5) FILTER + SEARCH + SORT
   ===================================================================== */
let HL = null;   // search word highlight-er regex

function getFiltered() {
  const terms = state.q.toLowerCase().split(/\s+/).filter(Boolean);
  HL = terms.length ? new RegExp('(' + terms.map(escRe).join('|') + ')', 'gi') : null;

  const list = students.filter(s => {
    if (state.cls     && s.cls     !== state.cls)     return false;
    if (state.section && s.section !== state.section) return false;
    if (state.gender  && s.gender  !== state.gender)  return false;
    if (state.status  && s.status  !== state.status)  return false;
    if (state.fee     && s.fee     !== state.fee)     return false;
    if (state.blood   && s.blood   !== state.blood)   return false;
    if (state.year    && s.admissionDate.slice(0, 4) !== state.year) return false;
    if (terms.length) {
      const hay = [s.name, s.nameBn, s.code, s.roll, s.phone, s.father, s.mother].join(' ').toLowerCase();
      if (!terms.every(t => hay.includes(t))) return false;
    }
    return true;
  });

  const by = {
    new:   (a, b) => b.id - a.id,
    az:    (a, b) => a.name.localeCompare(b.name),
    za:    (a, b) => b.name.localeCompare(a.name),
    roll:  (a, b) => a.roll - b.roll,
    class: (a, b) => a.cls - b.cls || a.section.localeCompare(b.section) || a.roll - b.roll,
  };
  return list.sort(by[state.sort] || by.new);
}

function hl(text) {                           // match howa ongsho highlight
  text = String(text ?? '');
  if (!HL) return esc(text);
  return text.split(HL).map((part, i) => i % 2 ? `<mark class="bg-primary/20 text-inherit rounded px-0.5">${esc(part)}</mark>` : esc(part)).join('');
}

/* =====================================================================
   6) RENDER
   ===================================================================== */
const feeChip = f => ({
  paid:    '<span class="chip">Paid</span>',
  partial: '<span class="text-xs font-semibold text-primary border border-primary/30 px-2.5 py-1 rounded-full">Partial</span>',
  due:     '<span class="text-xs font-semibold text-rose-600 bg-rose-50 px-2.5 py-1 rounded-full">Due</span>'
}[f]);
const statusChip = s => ({
  active:      '<span class="inline-flex items-center gap-1.5 text-xs font-semibold text-primary"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Active</span>',
  inactive:    '<span class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500"><span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>Inactive</span>',
  transferred: '<span class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500"><span class="w-1.5 h-1.5 rounded-full border border-slate-400"></span>Transferred</span>'
}[s]);
const actions = s => `
  <button class="icon-btn" data-edit="${s.id}" title="Edit"><i data-lucide="pencil" class="w-4 h-4"></i></button>
  <button class="icon-btn hover:!bg-rose-50 hover:!text-rose-600" data-del="${s.id}" title="Delete"><i data-lucide="trash-2" class="w-4 h-4"></i></button>`;
const checkbox = s => `<input type="checkbox" data-sel="${s.id}" ${selected.has(s.id) ? 'checked' : ''} class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary">`;

function renderFilterFields() {
  $('filterFields').innerHTML = FILTERS.map(f => `
    <div><label class="lbl">${f.label}</label>
      <select data-filter="${f.key}" class="inp"><option value="">All</option>
        ${f.opts.map(o => `<option value="${esc(o[0])}">${esc(o[1])}</option>`).join('')}
      </select></div>`).join('');
}

function render() {
  const list = getFiltered();
  const pages = Math.max(1, Math.ceil(list.length / state.per));
  state.page = Math.min(Math.max(1, state.page), pages);              // page shimar baire gele thik kora
  const start = (state.page - 1) * state.per, view = list.slice(start, start + state.per);

  // filter dropdown gulor value sync
  document.querySelectorAll('[data-filter]').forEach(el => el.value = state[el.dataset.filter]);
  $('search').value = state.q; $('sortSel').value = state.sort; $('perSel').value = String(state.per);
  $('clearSearch').classList.toggle('hidden', !state.q); $('slashHint').classList.toggle('!hidden', !!state.q);

  // chips
  const active = FILTERS.filter(f => state[f.key]);
  const chips = [];
  if (state.q) chips.push(['q', 'Search: "' + state.q + '"']);
  active.forEach(f => chips.push([f.key, f.label + ': ' + (f.opts.find(o => o[0] === state[f.key]) || [0, state[f.key]])[1]]));
  $('chips').classList.toggle('hidden', !chips.length); $('chips').classList.toggle('flex', !!chips.length);
  $('chips').innerHTML = chips.map(c => `
    <span class="inline-flex items-center gap-1.5 bg-primary/10 text-primary text-xs font-semibold pl-3 pr-1.5 py-1.5 rounded-full">
      ${esc(c[1])}<button data-clear="${c[0]}" class="w-5 h-5 rounded-full hover:bg-primary/20 flex items-center justify-center" aria-label="Remove"><i data-lucide="x" class="w-3 h-3"></i></button>
    </span>`).join('') + `<button id="clearAll" class="text-xs font-semibold text-slate-500 hover:text-primary underline ml-1">Clear all</button>`;
  const badge = $('filterBadge'); badge.textContent = active.length; badge.classList.toggle('hidden', !active.length); badge.classList.toggle('flex', !!active.length);

  // mini stats
  const cnt = fn => students.filter(fn).length;
  $('miniStats').innerHTML = [
    ['graduation-cap', students.length, 'Total Students'], ['user-check', cnt(s => s.status === 'active'), 'Active'],
    ['user', cnt(s => s.gender === 'Male'), 'Boys'], ['user', cnt(s => s.gender === 'Female'), 'Girls']
  ].map(s => `<div class="card !p-4 flex items-center gap-3">
      <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0"><i data-lucide="${s[0]}" class="w-5 h-5"></i></div>
      <div><p class="text-xl font-extrabold leading-none">${s[1]}</p><p class="text-xs text-slate-500 mt-1">${s[2]}</p></div></div>`).join('');

  // desktop rows
  $('rows').innerHTML = view.map(s => `
    <tr class="hover:bg-slate-50 transition ${s.id === flashId ? 'bg-primary/10' : ''}">
      <td class="pl-6 pr-2 py-3.5">${checkbox(s)}</td>
      <td class="px-3 py-3.5"><div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-primary/10 text-primary font-bold text-xs flex items-center justify-center shrink-0">${esc(initials(s.name))}</div>
        <div class="min-w-0"><p class="font-semibold text-slate-900 truncate">${hl(s.name)}</p><p class="text-xs text-slate-500">${hl(s.code)}</p></div></div></td>
      <td class="px-3 py-3.5 font-medium">${s.cls}-${s.section}</td>
      <td class="px-3 py-3.5">${hl(s.roll)}</td>
      <td class="px-3 py-3.5"><p class="font-medium truncate max-w-[180px]">${hl(s.father)}</p><p class="text-xs text-slate-500">${hl(s.phone)}</p></td>
      <td class="px-3 py-3.5">${s.gender}</td>
      <td class="px-3 py-3.5">${feeChip(s.fee)}</td>
      <td class="px-3 py-3.5">${statusChip(s.status)}</td>
      <td class="pl-3 pr-6 py-3.5 text-right whitespace-nowrap">${actions(s)}</td>
    </tr>`).join('');

  // mobile cards
  $('cards').innerHTML = view.map(s => `
    <div class="p-4 ${s.id === flashId ? 'bg-primary/10' : ''}">
      <div class="flex items-start gap-3">
        <div class="pt-1">${checkbox(s)}</div>
        <div class="w-11 h-11 rounded-full bg-primary/10 text-primary font-bold text-sm flex items-center justify-center shrink-0">${esc(initials(s.name))}</div>
        <div class="min-w-0 flex-1">
          <p class="font-semibold text-slate-900">${hl(s.name)}</p>
          <p class="text-xs text-slate-500">${hl(s.code)} &middot; Roll ${hl(s.roll)}</p>
        </div>
        <span class="chip">${s.cls}-${s.section}</span>
      </div>
      <div class="mt-3 ml-[3.75rem] flex items-center justify-between gap-2 text-sm">
        <div class="min-w-0"><p class="truncate text-slate-700">${hl(s.father)}</p><p class="text-xs text-slate-500">${hl(s.phone)}</p></div>
        <div class="flex flex-col items-end gap-1.5 shrink-0">${feeChip(s.fee)}${statusChip(s.status)}</div>
      </div>
      <div class="mt-2 ml-[3.25rem] flex gap-1">${actions(s)}</div>
    </div>`).join('');

  $('empty').classList.toggle('hidden', list.length > 0);
  $('pager').parentElement.classList.toggle('hidden', list.length === 0);

  // pagination
  $('pageInfo').textContent = list.length ? `Showing ${start + 1}-${start + view.length} of ${list.length}` : '';
  $('pager').innerHTML = pagerHtml(state.page, pages);

  // select-all o bulk bar
  $('selAll').checked = view.length > 0 && view.every(s => selected.has(s.id));
  $('selCount').textContent = selected.size;
  $('bulkBar').classList.toggle('hidden', !selected.size); $('bulkBar').classList.toggle('flex', !!selected.size);

  lucide.createIcons();
  saveState();
}

function pagerHtml(cur, total) {
  const btn = (label, page, on, dis) => `<button data-page="${page}" ${dis ? 'disabled' : ''} class="min-w-9 h-9 px-2 rounded-lg text-sm font-semibold transition
      ${on ? 'bg-primary text-white shadow shadow-primary/30' : 'text-slate-600 hover:bg-primary/10 hover:text-primary'} disabled:opacity-40 disabled:pointer-events-none">${label}</button>`;
  let nums = [];
  for (let i = 1; i <= total; i++) if (i === 1 || i === total || Math.abs(i - cur) <= 1) nums.push(i);
  let html = btn('<i data-lucide="chevron-left" class="w-4 h-4 mx-auto"></i>', cur - 1, false, cur === 1), prev = 0;
  nums.forEach(n => { if (n - prev > 1) html += '<span class="px-1 text-slate-400">...</span>'; html += btn(n, n, n === cur); prev = n; });
  return html + btn('<i data-lucide="chevron-right" class="w-4 h-4 mx-auto"></i>', cur + 1, false, cur === total);
}

/* =====================================================================
   7) EVENTS: search, filter, sort, page
   ===================================================================== */
let timer;
$('search').addEventListener('input', e => {              // LIVE SEARCH (debounce: tipte tipte 150ms por update)
  clearTimeout(timer);
  timer = setTimeout(() => { state.q = e.target.value.trim(); state.page = 1; render(); }, 150);
});
$('clearSearch').onclick = () => { state.q = ''; state.page = 1; render(); $('search').focus(); };
document.addEventListener('keydown', e => {
  if (e.key === '/' && !/INPUT|TEXTAREA|SELECT/.test(document.activeElement.tagName)) { e.preventDefault(); $('search').focus(); }
  if (e.key === 'Escape') { closeForm(); closeFilters(); closeConfirm(); }
});

$('filterFields').addEventListener('change', e => {
  if (!e.target.dataset.filter) return;
  state[e.target.dataset.filter] = e.target.value; state.page = 1; render();
});
$('sortSel').onchange = e => { state.sort = e.target.value; state.page = 1; render(); };
$('perSel').onchange  = e => { state.per = Number(e.target.value); state.page = 1; render(); };

function resetFilters() {
  ['q','cls','section','gender','status','fee','year','blood'].forEach(k => state[k] = ''); state.page = 1; render();
}
$('chips').addEventListener('click', e => {
  if (e.target.closest('#clearAll')) return resetFilters();
  const c = e.target.closest('[data-clear]'); if (c) { state[c.dataset.clear] = ''; state.page = 1; render(); }
});
$('emptyReset').onclick = resetFilters;
$('resetMobile').onclick = () => { resetFilters(); };
$('applyMobile').onclick = closeFilters;
$('pager').addEventListener('click', e => { const b = e.target.closest('[data-page]'); if (b) { state.page = Number(b.dataset.page); render(); window.scrollTo({ top: 0, behavior: 'smooth' }); } });

/* Mobile filter sheet */
function openFilters()  { $('filterPanel').classList.remove('translate-y-full'); $('filterOverlay').classList.remove('hidden'); }
function closeFilters() { $('filterPanel').classList.add('translate-y-full');    $('filterOverlay').classList.add('hidden'); }
$('openFilters').onclick = openFilters; $('closeFilters').onclick = closeFilters; $('filterOverlay').onclick = closeFilters;

/* Selection */
document.addEventListener('change', e => {
  if (e.target.dataset.sel) { const id = Number(e.target.dataset.sel); e.target.checked ? selected.add(id) : selected.delete(id); render(); }
});
$('selAll').onchange = e => {
  const list = getFiltered().slice((state.page - 1) * state.per, state.page * state.per);
  list.forEach(s => e.target.checked ? selected.add(s.id) : selected.delete(s.id)); render();
};
$('bulkClear').onclick = () => { selected.clear(); render(); };

/* =====================================================================
   8) ADD / EDIT MODAL
   ===================================================================== */
const form = $('studentForm');
let editingId = null;

// dropdown fill
const fill = (name, arr, fmt = v => v) => form.elements[name].insertAdjacentHTML('beforeend', arr.map(v => `<option value="${v}">${fmt(v)}</option>`).join(''));
fill('blood', BLOODS); fill('cls', CLASSES, v => 'Class ' + v); fill('section', SECTIONS);

function openForm(id) {
  editingId = id || null;
  form.reset(); clearErrors();
  $('photoPreview').innerHTML = '<i data-lucide="camera" class="w-7 h-7"></i>';
  const s = id ? students.find(x => x.id === id) : null;
  $('modalTitle').textContent = s ? 'Edit Student' : 'Add New Student';
  $('saveBtn').querySelector('span').textContent = s ? 'Update Student' : 'Save Student';
  if (s) {
    Object.keys(s).forEach(k => { if (form.elements[k] && k !== 'photo') form.elements[k].value = s[k]; });
  } else {
    const next = Math.max(0, ...students.map(x => x.id)) + 1;
    form.elements.code.value = 'STU-2026-' + String(next).padStart(4, '0');
    form.elements.admissionDate.value = new Date().toISOString().slice(0, 10);
    // jodi filter-e class/section thake, form-e oi value age theke boshe jabe (shoman shomoy bachbe)
    if (state.cls) form.elements.cls.value = state.cls;
    if (state.section) form.elements.section.value = state.section;
  }
  $('modal').classList.remove('hidden'); document.body.classList.add('overflow-hidden');
  lucide.createIcons();
  setTimeout(() => form.elements.name.focus(), 50);
}
function closeForm() { $('modal').classList.add('hidden'); document.body.classList.remove('overflow-hidden'); }
document.querySelectorAll('[data-close]').forEach(b => b.onclick = closeForm);
$('modalBg').onclick = closeForm;
$('addBtn').onclick = () => openForm();

$('photoInput').addEventListener('change', e => {         // photo preview
  const f = e.target.files[0]; if (!f) return;
  if (f.size > 2 * 1024 * 1024) { toast('Photo 2MB-er cheye chhoto hote hobe'); e.target.value = ''; return; }
  const r = new FileReader(); r.onload = () => $('photoPreview').innerHTML = `<img src="${r.result}" class="w-full h-full object-cover" alt="">`; r.readAsDataURL(f);
});

function clearErrors() { form.querySelectorAll('[data-err]').forEach(p => { p.classList.add('hidden'); p.textContent = ''; }); form.querySelectorAll('.inp').forEach(i => i.classList.remove('!border-rose-400')); }
function validate(d) {
  const e = {};
  if (!d.name.trim()) e.name = 'Student-er naam din';
  if (!d.gender) e.gender = 'Gender select korun';
  if (!d.cls) e.cls = 'Class select korun';
  if (!d.section) e.section = 'Section select korun';
  if (!d.roll || Number(d.roll) < 1) e.roll = 'Roll number din';
  else if (students.some(s => s.id !== editingId && s.cls === d.cls && s.section === d.section && String(s.roll) === String(d.roll)))
    e.roll = `Class ${d.cls}-${d.section}-e roll ${d.roll} age theke ache`;
  if (!d.admissionDate) e.admissionDate = 'Admission date din';
  if (!d.father.trim()) e.father = "Father's naam din";
  if (!/^01[3-9]\d{8}$/.test(d.phone.trim())) e.phone = 'Shothik 11 digit-er number din (01XXXXXXXXX)';
  if (d.email && !/^\S+@\S+\.\S+$/.test(d.email)) e.email = 'Shothik email din';
  return e;
}

form.addEventListener('submit', ev => {
  ev.preventDefault(); clearErrors();
  const d = Object.fromEntries(new FormData(form));
  const errs = validate(d);
  Object.entries(errs).forEach(([k, msg]) => {
    const p = form.querySelector(`[data-err="${k}"]`); p.textContent = msg; p.classList.remove('hidden');
    form.elements[k].classList.add('!border-rose-400');
  });
  if (Object.keys(errs).length) { form.querySelector('[data-err]:not(.hidden)').scrollIntoView({ block: 'center', behavior: 'smooth' }); return; }

  const rec = { name: d.name.trim(), nameBn: d.nameBn.trim(), gender: d.gender, dob: d.dob, blood: d.blood, religion: d.religion,
    cls: d.cls, section: d.section, roll: Number(d.roll), admissionDate: d.admissionDate, status: d.status,
    father: d.father.trim(), mother: d.mother.trim(), phone: d.phone.trim(), email: d.email.trim(), address: d.address.trim() };

  if (editingId) {                                        // EDIT: filter o page ek-i thakbe
    Object.assign(students.find(s => s.id === editingId), rec);
    flashId = editingId; toast('Student update hoyeche');
  } else {                                                // ADD
    const id = Math.max(0, ...students.map(s => s.id)) + 1;
    students.push({ id, code: d.code, fee: 'due', ...rec });
    flashId = id; toast('Notun student add hoyeche');
  }
  closeForm(); render();
  setTimeout(() => { flashId = null; render(); }, 1800);

  if (!editingId && !getFiltered().some(s => s.id === flashId)) toast('Add hoyeche, kintu current filter-er karone list-e dekha jachche na');
});

/* Table-er Edit / Delete button */
document.addEventListener('click', e => {
  const ed = e.target.closest('[data-edit]'); if (ed) openForm(Number(ed.dataset.edit));
  const del = e.target.closest('[data-del]'); if (del) askDelete([Number(del.dataset.del)]);
});
$('bulkDelete').onclick = () => askDelete([...selected]);

/* Delete confirm */
let pendingDelete = [];
function askDelete(ids) {
  pendingDelete = ids;
  $('confirmText').textContent = ids.length === 1 ? `"${students.find(s => s.id === ids[0]).name}" ke delete kora hobe.` : `${ids.length} jon student delete kora hobe.`;
  $('confirmBox').classList.remove('hidden'); $('confirmBox').classList.add('flex');
}
function closeConfirm() { $('confirmBox').classList.add('hidden'); $('confirmBox').classList.remove('flex'); }
$('confirmNo').onclick = closeConfirm; $('confirmBg').onclick = closeConfirm;
$('confirmYes').onclick = () => {
  students = students.filter(s => !pendingDelete.includes(s.id)); pendingDelete.forEach(id => selected.delete(id));
  closeConfirm(); render(); toast('Delete hoyeche');
};

/* =====================================================================
   9) EXPORT CSV (filter kora list export hoy)
   ===================================================================== */
function exportCsv(list) {
  const head = ['Student ID','Name','Class','Section','Roll','Gender','Father','Mother','Phone','Fee','Status','Admission Date'];
  const rows = list.map(s => [s.code, s.name, s.cls, s.section, s.roll, s.gender, s.father, s.mother, s.phone, s.fee, s.status, s.admissionDate]);
  const csv = [head, ...rows].map(r => r.map(v => '"' + String(v).replace(/"/g, '""') + '"').join(',')).join('\n');
  const a = document.createElement('a');
  a.href = URL.createObjectURL(new Blob(['\ufeff' + csv], { type: 'text/csv;charset=utf-8;' }));
  a.download = 'students.csv'; a.click();
  toast(list.length + ' jon student export hoyeche');
}
$('exportBtn').onclick = () => exportCsv(getFiltered());
$('bulkExport').onclick = () => exportCsv(students.filter(s => selected.has(s.id)));

/* =====================================================================
   10) Toast, Mobile sidebar, Start
   ===================================================================== */
let toastTimer;
function toast(msg) {
  $('toastText').textContent = msg; $('toast').classList.remove('hidden'); lucide.createIcons();
  clearTimeout(toastTimer); toastTimer = setTimeout(() => $('toast').classList.add('hidden'), 2600);
}
const openSide  = () => { $('sidebar').classList.remove('-translate-x-full'); $('overlay').classList.remove('hidden'); };
const closeSide = () => { $('sidebar').classList.add('-translate-x-full');    $('overlay').classList.add('hidden'); };
$('openMenu').onclick = openSide; $('closeMenu').onclick = closeSide; $('overlay').onclick = closeSide;

renderFilterFields();
const restored = loadState();
render();
if (restored && (state.q || FILTERS.some(f => state[f.key]) || state.page > 1)) toast('Ager filter o page restore kora hoyeche');
</script>
</body>
</html>