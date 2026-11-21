    tailwind.config = {
      theme: { extend: { colors: { primary: 'rgb(var(--primary) / <alpha-value>)' } } }
    }
    
    // Chhoto shortcut: $('id') = document.getElementById('id')
    const $ = (id) => document.getElementById(id);

    // (a) Icon-gulo ke asol icon-e bodle deya
    lucide.createIcons();

    // (b) Ajker tarikh header/greeting-e boshano
    $('today').textContent = new Date().toLocaleDateString('en-GB', {
      weekday: 'long', day: 'numeric', month: 'long', year: 'numeric'
    });

    // (c) Sidebar dropdown: click korle submenu khole/bondho hoy
    document.querySelectorAll('[data-toggle]').forEach((btn) => {
      btn.addEventListener('click', () => {
        btn.nextElementSibling.classList.toggle('hidden');        // submenu dekhano/lukano
        btn.querySelector('.chev').classList.toggle('rotate-180'); // teer ghurano
      });
    });

    // (d) Sidebar-er link-e click korle "active" rong shorano
    document.querySelectorAll('#sidebar a.nav-link').forEach((link) => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelectorAll('#sidebar a.nav-link').forEach((l) => l.classList.remove('active'));
        link.classList.add('active');
        closeSidebar(); // mobile-e click korle menu bondho
      });
    });

    // (e) Mobile sidebar khola / bondho
    function openSidebar()  { $('sidebar').classList.remove('-translate-x-full'); $('overlay').classList.remove('hidden'); }
    function closeSidebar() { $('sidebar').classList.add('-translate-x-full');    $('overlay').classList.add('hidden'); }
    $('openMenu').addEventListener('click', openSidebar);
    $('closeMenu').addEventListener('click', closeSidebar);
    $('overlay').addEventListener('click', closeSidebar);

