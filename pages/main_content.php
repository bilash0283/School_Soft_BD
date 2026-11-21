

      <!-- ---------- 3.1 GREETING (shuvechchha + ajker tarikh) ---------- -->
      <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-2">
        <div>
          <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Welcome back, Karim 👋</h1>
          <p class="mt-1 text-slate-500 text-sm sm:text-base">Here's what's happening at your school today.</p>
        </div>
        <div class="flex items-center gap-2 text-sm text-slate-500">
          <i data-lucide="calendar" class="w-4 h-4"></i><span id="today"></span>
        </div>
      </div>


      <!-- ---------- 3.2 STAT CARDS (upore 4 ta summary box) ----------
           Ekta card copy kore icon, number, label bodlalei notun card hobe. -->
      <div class="mt-6 grid grid-cols-2 xl:grid-cols-4 gap-3 sm:gap-5">

        <!-- Card 1: Total students -->
        <div class="card !p-4 sm:!p-5">
          <div class="flex items-start justify-between">
            <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
              <i data-lucide="graduation-cap" class="w-5 h-5"></i>
            </div>
            <span class="chip">+32</span>
          </div>
          <p class="mt-4 text-xl sm:text-2xl xl:text-3xl font-extrabold tracking-tight">1,248</p>
          <p class="text-xs sm:text-sm text-slate-500 mt-1">Total Students</p>
        </div>

        <!-- Card 2: Teachers & staff -->
        <div class="card !p-4 sm:!p-5">
          <div class="flex items-start justify-between">
            <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
              <i data-lucide="users" class="w-5 h-5"></i>
            </div>
            <span class="chip">+2</span>
          </div>
          <p class="mt-4 text-xl sm:text-2xl xl:text-3xl font-extrabold tracking-tight">96</p>
          <p class="text-xs sm:text-sm text-slate-500 mt-1">Teachers & Staff</p>
        </div>

        <!-- Card 3: Attendance -->
        <div class="card !p-4 sm:!p-5">
          <div class="flex items-start justify-between">
            <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
              <i data-lucide="calendar-check" class="w-5 h-5"></i>
            </div>
            <span class="chip">Today</span>
          </div>
          <p class="mt-4 text-xl sm:text-2xl xl:text-3xl font-extrabold tracking-tight">94.2%</p>
          <p class="text-xs sm:text-sm text-slate-500 mt-1">Today's Attendance</p>
        </div>

        <!-- Card 4: Fee this month -->
        <div class="card !p-4 sm:!p-5">
          <div class="flex items-start justify-between">
            <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
              <i data-lucide="wallet" class="w-5 h-5"></i>
            </div>
            <span class="chip">+8%</span>
          </div>
          <p class="mt-4 text-xl sm:text-2xl xl:text-3xl font-extrabold tracking-tight">৳4,85,000</p>
          <p class="text-xs sm:text-sm text-slate-500 mt-1">Fee This Month</p>
        </div>
      </div>


      <!-- ---------- 3.3 QUICK ACTIONS (druto kaj-er button) ----------
           Mobile-e left-right scroll kore, boro screen-e 4 column grid. -->
      <div class="mt-6">
        <h2 class="panel-title mb-3">Quick Actions</h2>
        <div class="flex gap-3 overflow-x-auto pb-2 -mx-4 px-4 sm:mx-0 sm:px-0 sm:grid sm:grid-cols-4 sm:overflow-visible">

          <button class="shrink-0 w-44 sm:w-auto flex items-center gap-3 bg-white border border-slate-200/70 rounded-2xl p-3.5 shadow-sm hover:border-primary hover:shadow-md hover:shadow-primary/10 transition text-left">
            <span class="w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center shrink-0"><i data-lucide="user-plus" class="w-5 h-5"></i></span>
            <span class="text-sm font-semibold leading-tight">Add Student</span>
          </button>

          <button class="shrink-0 w-44 sm:w-auto flex items-center gap-3 bg-white border border-slate-200/70 rounded-2xl p-3.5 shadow-sm hover:border-primary hover:shadow-md hover:shadow-primary/10 transition text-left">
            <span class="w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center shrink-0"><i data-lucide="clipboard-check" class="w-5 h-5"></i></span>
            <span class="text-sm font-semibold leading-tight">Take Attendance</span>
          </button>

          <button class="shrink-0 w-44 sm:w-auto flex items-center gap-3 bg-white border border-slate-200/70 rounded-2xl p-3.5 shadow-sm hover:border-primary hover:shadow-md hover:shadow-primary/10 transition text-left">
            <span class="w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center shrink-0"><i data-lucide="wallet" class="w-5 h-5"></i></span>
            <span class="text-sm font-semibold leading-tight">Collect Fee</span>
          </button>

          <button class="shrink-0 w-44 sm:w-auto flex items-center gap-3 bg-white border border-slate-200/70 rounded-2xl p-3.5 shadow-sm hover:border-primary hover:shadow-md hover:shadow-primary/10 transition text-left">
            <span class="w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center shrink-0"><i data-lucide="megaphone" class="w-5 h-5"></i></span>
            <span class="text-sm font-semibold leading-tight">Publish Notice</span>
          </button>
        </div>
      </div>


      <!-- ---------- 3.4 PANELS (2 ta column: bam boro, dan chhoto) ----------
           Mobile-e ek column, boro screen-e 3 bhager 2:1. -->
      <div class="mt-6 grid gap-5 lg:grid-cols-3">

        <!-- ===== BAM COLUMN (2 bhag jaygа) ===== -->
        <div class="lg:col-span-2 space-y-5">

          <!-- Panel: Weekly Attendance chart
               Bar-er height = style="height:XX%". Shudhu % bodlan. -->
          <section class="card">
            <div class="flex items-start justify-between gap-3 mb-5">
              <div>
                <h3 class="panel-title">Weekly Attendance</h3>
                <p class="text-sm text-slate-500">Student attendance rate this week</p>
              </div>
              <span class="chip">Avg 90.8%</span>
            </div>

            <div class="flex gap-3 sm:gap-6">
              <!-- Ekta bar = ekta din. Copy kore notun din jog korun. -->
              <div class="flex-1 flex flex-col items-center gap-2">
                <span class="text-xs font-semibold text-slate-600">91%</span>
                <div class="w-full h-36 rounded-xl bg-primary/10 flex items-end overflow-hidden">
                  <div class="w-full rounded-xl bg-primary" style="height:91%"></div>
                </div>
                <span class="text-xs text-slate-500">Sun</span>
              </div>
              <div class="flex-1 flex flex-col items-center gap-2">
                <span class="text-xs font-semibold text-slate-600">95%</span>
                <div class="w-full h-36 rounded-xl bg-primary/10 flex items-end overflow-hidden">
                  <div class="w-full rounded-xl bg-primary" style="height:95%"></div>
                </div>
                <span class="text-xs text-slate-500">Mon</span>
              </div>
              <div class="flex-1 flex flex-col items-center gap-2">
                <span class="text-xs font-semibold text-slate-600">88%</span>
                <div class="w-full h-36 rounded-xl bg-primary/10 flex items-end overflow-hidden">
                  <div class="w-full rounded-xl bg-primary" style="height:88%"></div>
                </div>
                <span class="text-xs text-slate-500">Tue</span>
              </div>
              <div class="flex-1 flex flex-col items-center gap-2">
                <span class="text-xs font-semibold text-slate-600">96%</span>
                <div class="w-full h-36 rounded-xl bg-primary/10 flex items-end overflow-hidden">
                  <div class="w-full rounded-xl bg-primary" style="height:96%"></div>
                </div>
                <span class="text-xs text-slate-500">Wed</span>
              </div>
              <div class="flex-1 flex flex-col items-center gap-2">
                <span class="text-xs font-semibold text-slate-600">84%</span>
                <div class="w-full h-36 rounded-xl bg-primary/10 flex items-end overflow-hidden">
                  <div class="w-full rounded-xl bg-primary" style="height:84%"></div>
                </div>
                <span class="text-xs text-slate-500">Thu</span>
              </div>
            </div>
          </section>

          <!-- Panel: Fee Collection chart (height % = ahe-r maser sapekkhe) -->
          <section class="card">
            <div class="flex items-start justify-between gap-3 mb-5">
              <div>
                <h3 class="panel-title">Fee Collection</h3>
                <p class="text-sm text-slate-500">Last 6 months (in thousand taka)</p>
              </div>
              <span class="chip">৳4,85,000 this month</span>
            </div>

            <div class="flex gap-3 sm:gap-6">
              <div class="flex-1 flex flex-col items-center gap-2">
                <span class="text-xs font-semibold text-slate-600">৳410k</span>
                <div class="w-full h-36 rounded-xl bg-primary/10 flex items-end overflow-hidden">
                  <div class="w-full rounded-xl bg-primary" style="height:85%"></div>
                </div>
                <span class="text-xs text-slate-500">Jun</span>
              </div>
              <div class="flex-1 flex flex-col items-center gap-2">
                <span class="text-xs font-semibold text-slate-600">৳455k</span>
                <div class="w-full h-36 rounded-xl bg-primary/10 flex items-end overflow-hidden">
                  <div class="w-full rounded-xl bg-primary" style="height:94%"></div>
                </div>
                <span class="text-xs text-slate-500">Jul</span>
              </div>
              <div class="flex-1 flex flex-col items-center gap-2">
                <span class="text-xs font-semibold text-slate-600">৳392k</span>
                <div class="w-full h-36 rounded-xl bg-primary/10 flex items-end overflow-hidden">
                  <div class="w-full rounded-xl bg-primary" style="height:81%"></div>
                </div>
                <span class="text-xs text-slate-500">Aug</span>
              </div>
              <div class="flex-1 flex flex-col items-center gap-2">
                <span class="text-xs font-semibold text-slate-600">৳470k</span>
                <div class="w-full h-36 rounded-xl bg-primary/10 flex items-end overflow-hidden">
                  <div class="w-full rounded-xl bg-primary" style="height:97%"></div>
                </div>
                <span class="text-xs text-slate-500">Sep</span>
              </div>
              <div class="flex-1 flex flex-col items-center gap-2">
                <span class="text-xs font-semibold text-slate-600">৳438k</span>
                <div class="w-full h-36 rounded-xl bg-primary/10 flex items-end overflow-hidden">
                  <div class="w-full rounded-xl bg-primary" style="height:90%"></div>
                </div>
                <span class="text-xs text-slate-500">Oct</span>
              </div>
              <div class="flex-1 flex flex-col items-center gap-2">
                <span class="text-xs font-semibold text-slate-600">৳485k</span>
                <div class="w-full h-36 rounded-xl bg-primary/10 flex items-end overflow-hidden">
                  <div class="w-full rounded-xl bg-primary" style="height:100%"></div>
                </div>
                <span class="text-xs text-slate-500">Nov</span>
              </div>
            </div>
          </section>

          <!-- Panel: Recent Admissions (list) -->
          <section class="card">
            <div class="flex items-center justify-between mb-4">
              <h3 class="panel-title">Recent Admissions</h3>
              <a href="#" class="text-sm font-semibold text-primary hover:underline">View all</a>
            </div>
            <ul class="divide-y divide-slate-100">
              <li class="flex items-center gap-3 py-3">
                <div class="w-10 h-10 rounded-full bg-primary/10 text-primary font-bold text-sm flex items-center justify-center">RU</div>
                <div class="flex-1 min-w-0">
                  <p class="font-semibold text-sm truncate">Rahim Uddin</p>
                  <p class="text-xs text-slate-500">Class 6 &middot; Section A</p>
                </div>
                <span class="chip">Paid</span>
              </li>
              <li class="flex items-center gap-3 py-3">
                <div class="w-10 h-10 rounded-full bg-primary/10 text-primary font-bold text-sm flex items-center justify-center">NJ</div>
                <div class="flex-1 min-w-0">
                  <p class="font-semibold text-sm truncate">Nusrat Jahan</p>
                  <p class="text-xs text-slate-500">Class 3 &middot; Section B</p>
                </div>
                <span class="chip">Paid</span>
              </li>
              <li class="flex items-center gap-3 py-3">
                <div class="w-10 h-10 rounded-full bg-primary/10 text-primary font-bold text-sm flex items-center justify-center">TA</div>
                <div class="flex-1 min-w-0">
                  <p class="font-semibold text-sm truncate">Tanvir Ahmed</p>
                  <p class="text-xs text-slate-500">Class 9 &middot; Section A</p>
                </div>
                <!-- Pending = dhushor (grey) label -->
                <span class="text-xs font-semibold text-slate-500 bg-slate-100 px-2.5 py-1 rounded-full">Pending</span>
              </li>
            </ul>
          </section>
        </div>


        <!-- ===== DAN COLUMN (1 bhag jaygа) ===== -->
        <div class="space-y-5">

          <!-- Panel: Notice Board -->
          <section class="card">
            <div class="flex items-center justify-between mb-4">
              <h3 class="panel-title">Notice Board</h3>
              <a href="#" class="text-sm font-semibold text-primary hover:underline">All</a>
            </div>
            <ul class="space-y-4">
              <li class="flex gap-3">
                <div class="w-9 h-9 shrink-0 rounded-xl bg-primary/10 text-primary flex items-center justify-center"><i data-lucide="megaphone" class="w-4 h-4"></i></div>
                <div>
                  <p class="text-sm font-semibold leading-snug">Half-yearly exam routine published</p>
                  <p class="text-xs text-slate-500 mt-0.5">2 hours ago</p>
                </div>
              </li>
              <li class="flex gap-3">
                <div class="w-9 h-9 shrink-0 rounded-xl bg-primary/10 text-primary flex items-center justify-center"><i data-lucide="megaphone" class="w-4 h-4"></i></div>
                <div>
                  <p class="text-sm font-semibold leading-snug">School closed on Tuesday (public holiday)</p>
                  <p class="text-xs text-slate-500 mt-0.5">Yesterday</p>
                </div>
              </li>
              <li class="flex gap-3">
                <div class="w-9 h-9 shrink-0 rounded-xl bg-primary/10 text-primary flex items-center justify-center"><i data-lucide="megaphone" class="w-4 h-4"></i></div>
                <div>
                  <p class="text-sm font-semibold leading-snug">Parents' meeting for Class 6 to 8</p>
                  <p class="text-xs text-slate-500 mt-0.5">3 days ago</p>
                </div>
              </li>
            </ul>
          </section>

          <!-- Panel: Upcoming Exams (prothom-ta gaড় rong, baki halka) -->
          <section class="card">
            <h3 class="panel-title mb-4">Upcoming Exams</h3>
            <ul class="space-y-3">
              <li class="flex items-center gap-3">
                <div class="w-12 h-12 shrink-0 rounded-xl bg-primary text-white flex flex-col items-center justify-center leading-none">
                  <span class="text-base font-extrabold">24</span><span class="text-[10px] uppercase mt-0.5">Nov</span>
                </div>
                <div><p class="text-sm font-semibold">Bangla 1st Paper</p><p class="text-xs text-slate-500">Class 8 &middot; 10:00 AM</p></div>
              </li>
              <li class="flex items-center gap-3">
                <div class="w-12 h-12 shrink-0 rounded-xl bg-primary/10 text-primary flex flex-col items-center justify-center leading-none">
                  <span class="text-base font-extrabold">26</span><span class="text-[10px] uppercase mt-0.5">Nov</span>
                </div>
                <div><p class="text-sm font-semibold">Mathematics</p><p class="text-xs text-slate-500">Class 8 &middot; 10:00 AM</p></div>
              </li>
              <li class="flex items-center gap-3">
                <div class="w-12 h-12 shrink-0 rounded-xl bg-primary/10 text-primary flex flex-col items-center justify-center leading-none">
                  <span class="text-base font-extrabold">28</span><span class="text-[10px] uppercase mt-0.5">Nov</span>
                </div>
                <div><p class="text-sm font-semibold">English 1st Paper</p><p class="text-xs text-slate-500">Class 8 &middot; 10:00 AM</p></div>
              </li>
            </ul>
          </section>

          <!-- Panel: Fee Due -->
          <section class="card">
            <div class="flex items-center justify-between mb-4">
              <h3 class="panel-title">Fee Due</h3>
              <span class="chip">৳2,10,000</span>
            </div>
            <ul class="divide-y divide-slate-100">
              <li class="flex items-center justify-between py-3">
                <div><p class="text-sm font-semibold">Sabbir Hossain</p><p class="text-xs text-slate-500">Class 8-A</p></div>
                <span class="text-sm font-bold">৳2,500</span>
              </li>
              <li class="flex items-center justify-between py-3">
                <div><p class="text-sm font-semibold">Mim Akter</p><p class="text-xs text-slate-500">Class 6-B</p></div>
                <span class="text-sm font-bold">৳3,000</span>
              </li>
              <li class="flex items-center justify-between py-3">
                <div><p class="text-sm font-semibold">Arif Chowdhury</p><p class="text-xs text-slate-500">Class 9-A</p></div>
                <span class="text-sm font-bold">৳4,200</span>
              </li>
            </ul>
          </section>
        </div>
      </div>