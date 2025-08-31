<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\components\navbar.blade.php -->
<head>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">
</head>
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<nav 
    class="fixed top-0 left-0 w-full z-50 bg-[#A52A2A] bg-opacity-90 flex items-center justify-between px-20 py-4 shadow-md"
    data-aos="fade-down"
    data-aos-duration="800"
>
    <!-- Logo, Judul, Tagline -->
    <div class="flex items-center space-x-4">
        <img src="/img/ikonrasaumbi.png" alt="Rasa Umbi Logo" class="h-12 w-auto drop-shadow-lg">
        
    </div>
    <!-- Menu -->
    <ul class="flex space-x-8">
        <li>
            <a href="/" class="font-bold text-white hover:text-[#FFD6C0] transition">HOME</a>
        </li>
        <li>
            <a href="/product" class="font-semibold text-white/80 hover:text-[#FFD6C0] transition">PRODUCT</a>
        </li>
        <li>
            <a href="/recipe" class="font-semibold text-white/80 hover:text-[#FFD6C0] transition">RECIPE</a>
        </li>
        <li>
            <a href="/blogs" class="font-semibold text-white/80 hover:text-[#FFD6C0] transition">BLOGS</a>
        </li>
        <li>
            <a href="/contact" class="font-semibold text-white/80 hover:text-[#FFD6C0] transition">CONTACT US</a>
        </li>
    </ul>
</nav>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    AOS.init();
  });
</script>