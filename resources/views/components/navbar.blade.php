<head>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <style>
        html, body {
            overflow-x: hidden;
        }

        /* Nav link hover animation */
        .nav-link {
            position: relative;
            transition: transform .18s ease, color .18s ease, opacity .18s ease;
            will-change: transform, color;
        }

        .nav-link:after {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%) scaleX(0);
            transform-origin: center;
            bottom: -6px;
            height: 3px;
            width: 60%;
            border-radius: 8px;
            background: #A52A2A; /* Ubah warna underline jadi merah */
            transition: transform .22s cubic-bezier(.2,.9,.2,1), opacity .22s;
            opacity: 0;
        }

        .nav-link:hover {
            transform: translateY(-4px);
            color: #A52A2A !important; /* Ubah warna teks hover jadi merah */
        }

        .nav-link:hover:after {
            transform: translateX(-50%) scaleX(1);
            opacity: 1;
        }

        /* Slight glow for active/hover on desktop */
        @media (hover: hover) and (pointer: fine) {
            .nav-link:hover {
                text-shadow: 0 2px 8px rgba(0,0,0,0.25);
            }
        }

        /* mobile menu links: keep readable spacing */
        #nav-menu a {
            display: block;
        }

        /* Highlight underline for active nav */
        .nav-link.after\:!bg-\[\#da540c\]::after,
        .nav-link.after\:!bg-\[\#A52A2A\]::after {
            background: #A52A2A !important;
        }
        .nav-link.after\:opacity-100::after {
            opacity: 1 !important;
        }
        .nav-link.after\:scale-x-100::after {
            transform: translateX(-50%) scaleX(1) !important;
        }
    </style>
</head>
<nav
    class="fixed top-0 left-0 w-full z-50  flex items-center justify-between px-4 sm:px-6 md:px-10 lg:px-20 py-4"
    data-aos="fade-down"
    data-aos-duration="800"
>
    <!-- Logo -->
    <div class="flex items-center space-x-4">
        <img src="/img/ikonrasaumbi.png" alt="Rasa Umbi Logo" class="h-10 w-auto drop-shadow-lg">
    </div>
    <!-- Hamburger Button -->
    <button id="nav-toggle" class="md:hidden text-white focus:outline-none text-2xl">
        <i class="fas fa-bars"></i>
    </button>
    <!-- Menu -->
    <ul id="nav-menu"
        class="hidden md:flex flex-col md:flex-row md:space-x-8 absolute md:static top-full left-0 right-0 md:left-auto md:right-auto bg-black/80 md:bg-transparent shadow md:shadow-none transition-all duration-300"
        style="max-width:100vw;"
    >
        <li>
            <a href="{{ route('welcome') }}"
               class="nav-link block px-6 py-3 md:p-0 font-bold transition
               {{ request()->routeIs('welcome') ? 'text-[#A52A2A] font-extrabold after:!bg-[#A52A2A] after:opacity-100 after:scale-x-100' : 'text-white/80 hover:text-[#A52A2A]' }}">
               HOME
            </a>
        </li>
        <!-- PRODUCT -->
        <li>
            <a href="{{ route('products') }}"
               class="nav-link block px-6 py-3 md:p-0 font-semibold transition
               {{ request()->routeIs('products') ? 'text-[#A52A2A] font-extrabold after:!bg-[#A52A2A] after:opacity-100 after:scale-x-100' : 'text-white/80 hover:text-[#A52A2A]' }}">
               PRODUCT
            </a>
        </li>
        <!-- BLOG -->
        <li>
            <a href="{{ route('blogs') }}"
               class="nav-link block px-6 py-3 md:p-0 font-semibold transition
               {{ request()->routeIs('blogs') ? 'text-[#A52A2A] font-extrabold after:!bg-[#A52A2A] after:opacity-100 after:scale-x-100' : 'text-white/80 hover:text-[#A52A2A]' }}">
               BLOG
            </a>
        </li>
        <li>
            <a href="{{ route('sop') }}"
               class="nav-link block px-6 py-3 md:p-0 font-semibold transition
               {{ request()->routeIs('sop') ? 'text-[#A52A2A] font-extrabold after:!bg-[#A52A2A] after:opacity-100 after:scale-x-100' : 'text-white/80 hover:text-[#A52A2A]' }}">
               SOP
            </a>
        </li>
        <li>
            <a href="{{ route('contact') }}"
               class="nav-link block px-6 py-3 md:p-0 font-semibold transition
               {{ request()->routeIs('contact') ? 'text-[#A52A2A] font-extrabold after:!bg-[#A52A2A] after:opacity-100 after:scale-x-100' : 'text-white/80 hover:text-[#A52A2A]' }}">
               CONTACT
            </a>
        </li>
    </ul>
</nav>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    AOS.init();
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    navToggle.addEventListener('click', function() {
      navMenu.classList.toggle('hidden');
    });
    document.querySelectorAll('#nav-menu a').forEach(link => {
      link.addEventListener('click', () => {
        if(window.innerWidth < 768) navMenu.classList.add('hidden');
      });
    });

    // SCROLL CHANGE NAVBAR BG
    const navbar = document.querySelector('nav');
    window.addEventListener('scroll', function() {
      if(window.scrollY > 40) {
        navbar.classList.remove('bg-black/40');
        navbar.classList.add('bg-gray-800', 'shadow-lg');
      } else {
        navbar.classList.remove('bg-gray-800', 'shadow-lg'); // <-- hapus abu-abu!
       
      }
    });
  });
</script>
