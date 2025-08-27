<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\components\navbar.blade.php -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<nav 
  class="fixed top-0 left-0 w-full z-50 bg-[#A52A2A] bg-opacity-90 flex items-center justify-between px-20 py-4 shadow-md"
  data-aos="fade-down"
  data-aos-duration="800"
>
    <!-- Logo -->
    <div class="flex items-center">
        <img src="/img/ikonrasaumbi.png" alt="Niranta Logo" class="h-12 mr-4">
        <span class="text-xs text-[#E0E0E0] font-[Playfair Display] font-medium">Rasa Umbi</span>
    </div>
    <!-- Menu -->
    <ul class="flex space-x-8">
        <li>
            <a href="/" class="font-bold text-[#1A120B] hover:text-black">HOME</a>
        </li>
        <li>
            <a href="/product" class="font-semibold text-[#5C4B36] hover:text-black">PRODUCT</a>
        </li>
        <li>
            <a href="/recipe" class="font-semibold text-[#5C4B36] hover:text-black">RECIPE</a>
        </li>
        <li>
            <a href="/blogs" class="font-semibold text-[#5C4B36] hover:text-black">BLOGS</a>
        </li>
        <li>
            <a href="/contact" class="font-semibold text-[#5C4B36] hover:text-black">CONTACT US</a>
        </li>
    </ul>
</nav>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    AOS.init();
  });
</script>