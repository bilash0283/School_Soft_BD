<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard | School Management System</title>

  <!-- Tailwind CSS (CDN): install lagbe na -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Lucide icons: https://lucide.dev/icons theke icon-er naam nin -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- ===== PRIMARY COLOR =====
       Shudhu ei ek line bodlalei pura dashboard-er rong bodle jabe.
       Indigo = 79 70 229 | Blue = 37 99 235 | Green = 5 150 105 | Purple = 124 58 237 -->
  <style>
    :root { --primary: 79 70 229; }
    body  { font-family: 'Plus Jakarta Sans', sans-serif; }
  </style>


  <style type="text/tailwindcss">
    @layer components {
      .card        { @apply bg-white rounded-2xl border border-slate-200/70 shadow-sm p-5 sm:p-6; }
      .panel-title { @apply text-base font-bold text-slate-900; }
      .chip        { @apply text-xs font-semibold text-primary bg-primary/10 px-2.5 py-1 rounded-full whitespace-nowrap; }
      .nav-link    { @apply flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition cursor-pointer; }
      .nav-link.active { @apply bg-primary/10 text-primary font-semibold; }
    }
  </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased">

  <!-- Mobile-e sidebar khulle pichone kalo parda (overlay) -->
  <div id="overlay" class="fixed inset-0 z-30 bg-slate-900/40 backdrop-blur-sm hidden lg:hidden"></div>

  <!-- ====== SIDEBAR ======= -->
  <?php include 'includes/sidebar.php'; ?>
  <!-- == END SIDEBAR ======= -->

  <!-- Sidebar-er jonno bam pashe 72 (18rem) jaygа khali rakha (lg:pl-72) -->
  <div class="lg:pl-72 min-h-screen flex flex-col">
    <!-- ======= HEADER ======= -->
    <?php include 'includes/top_header.php'; ?>
    <!-- ======= END HEADER =========== -->


    <!-- ========= MAIN CONTENT ========= -->
    <main class="flex-1 p-4 sm:p-6 lg:p-8 w-full max-w-7xl mx-auto">
      <?php include 'pages/main_content.php'; ?>
    </main>
    <!-- ======= END MAIN CONTENT =========== -->

    

    <!-- ======= FOOTER ========== -->
    <?php include 'includes/top_footer.php'; ?>
    <!-- ==== END FOOTER ======== -->
  </div>

  <!-- ===== JS ===== -->
  <script src="assets/js/main.js"></script>
</body>
</html>