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
            background: rgba(255,255,255,0.18);
            transition: transform .22s cubic-bezier(.2,.9,.2,1), opacity .22s;
            opacity: 0;
        }

        .nav-link:hover {
            transform: translateY(-4px);
            color: #ffedd5 !important; /* subtle light color on hover */
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
    </style>
</head>
<nav
    class="fixed top-0 left-0 w-full z-50 bg-black/40 flex items-center justify-between px-4 sm:px-6 md:px-10 lg:px-20 py-4"
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
            <a href="/" class="nav-link block px-6 py-3 md:p-0 font-bold text-white/80 hover:text-[#da540c] transition">HOME</a>
        </li>
        <li>
            <a href="/product" class="nav-link block px-6 py-3 md:p-0 font-semibold text-white/80 hover:text-[#da540c] transition">PRODUCT</a>
        </li>
        <li>
            <a href="/blog" class="nav-link block px-6 py-3 md:p-0 font-semibold text-white/80 hover:text-[#da540c] transition">BLOG</a>
        </li>
        <li>
            <a href="/standar-operasional-prosedur" class="nav-link block px-6 py-3 md:p-0 font-semibold text-white/80 hover:text-[#da540c] transition">SOP</a>
        </li>
        <li>
            <a href="/contact" class="nav-link block px-6 py-3 md:p-0 font-semibold text-white/80 hover:text-[#da540c] transition">CONTACT</a>
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
    // Optional: close menu when link clicked (on mobile)
    document.querySelectorAll('#nav-menu a').forEach(link => {
      link.addEventListener('click', () => {
        if(window.innerWidth < 768) navMenu.classList.add('hidden');
      });
    });
  });
</script>
