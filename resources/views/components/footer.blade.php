<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<footer class="relative bg-black/60 backdrop-blur-md border-t border-white/20 py-16 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Main Footer Content -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- Company Info -->
            <div class="space-y-6" data-aos="fade-right" data-aos-delay="200">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/ikonrasaumbi.png') }}"
                         alt="Rasa Umbi Logo"
                         class="h-12 w-auto object-contain drop-shadow-lg">
                    <h3 class="text-2xl font-bold text-white" style="font-family: 'Cormorant Garamond', serif;">
                        Rasa Umbi
                    </h3>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Menghadirkan kekayaan rasa asli Indonesia melalui produk-produk berkualitas tinggi yang terbuat dari umbi-umbian nusantara.
                </p>

                <!-- Social Media -->
                <div class="flex space-x-4">
                    <a href="#" class="bg-white/10 hover:bg-orange-500 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-facebook-f text-white text-lg"></i>
                    </a>
                    <a href="#" class="bg-white/10 hover:bg-pink-600 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-instagram text-white text-lg"></i>
                    </a>
                    <a href="#" class="bg-white/10 hover:bg-green-500 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-whatsapp text-white text-lg"></i>
                    </a>
                    <a href="#" class="bg-white/10 hover:bg-red-600 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-youtube text-white text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-6" data-aos="fade-right" data-aos-delay="400">
                <h4 class="text-xl font-bold text-white" style="font-family: 'Cormorant Garamond', serif;">
                    Quick Links
                </h4>
                <ul class="space-y-3">
                    <li>
                        <a href="/" class="text-gray-300 hover:text-[#A52A2A] transition-colors duration-300 flex items-center group">
                            <i class="fas fa-home mr-2 group-hover:text-[#A52A2A]"></i>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="/about" class="text-gray-300 hover:text-[#A52A2A] transition-colors duration-300 flex items-center group">
                            <i class="fas fa-info-circle mr-2 group-hover:text-[#A52A2A]"></i>
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="/products" class="text-gray-300 hover:text-[#A52A2A] transition-colors duration-300 flex items-center group">
                            <i class="fas fa-shopping-bag mr-2 group-hover:text-[#A52A2A]"></i>
                            Produk
                        </a>
                    </li>
                    <li>
                        <a href="/blog" class="text-gray-300 hover:text-[#A52A2A] transition-colors duration-300 flex items-center group">
                            <i class="fas fa-newspaper mr-2 group-hover:text-[#A52A2A]"></i>
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="/contact" class="text-gray-300 hover:text-[#A52A2A] transition-colors duration-300 flex items-center group">
                            <i class="fas fa-envelope mr-2 group-hover:text-[#A52A2A]"></i>
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Products -->
            <div class="space-y-6" data-aos="fade-left" data-aos-delay="600">
                <h4 class="text-xl font-bold text-white" style="font-family: 'Cormorant Garamond', serif;">
                    Produk Unggulan
                </h4>
                <ul class="space-y-3">
                    <li>
                        <a href="/products/1" class="text-gray-300 hover:text-[#A52A2A] transition-colors duration-300 flex items-center group">
                            <i class="fas fa-cube mr-2 group-hover:text-[#A52A2A]"></i>
                            Gula Aren Kristal
                        </a>
                    </li>
                    <li>
                        <a href="/products/2" class="text-gray-300 hover:text-[#A52A2A] transition-colors duration-300 flex items-center group">
                            <i class="fas fa-tint mr-2 group-hover:text-[#A52A2A]"></i>
                            Gula Aren Cair
                        </a>
                    </li>
                    <li>
                        <a href="/products/3" class="text-gray-300 hover:text-[#A52A2A] transition-colors duration-300 flex items-center group">
                            <i class="fas fa-box mr-2 group-hover:text-[#A52A2A]"></i>
                            Gula Aren Stick
                        </a>
                    </li>
                    <li>
                        <a href="/products/4" class="text-gray-300 hover:text-[#A52A2A] transition-colors duration-300 flex items-center group">
                            <i class="fas fa-magic mr-2 group-hover:text-[#A52A2A]"></i>
                            Gula Aren Bubuk
                        </a>
                    </li>
                    <li>
                        <a href="/products/premium" class="text-gray-300 hover:text-[#A52A2A] transition-colors duration-300 flex items-center group">
                            <i class="fas fa-crown mr-2 group-hover:text-[#A52A2A]"></i>
                            Paket Premium
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="space-y-6" data-aos="fade-left" data-aos-delay="800">
                <h4 class="text-xl font-bold text-white" style="font-family: 'Cormorant Garamond', serif;">
                    Hubungi Kami
                </h4>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt text-[#A52A2A] mt-1"></i>
                        <div>
                            <p class="text-gray-300 text-sm">
                                Jl. Raya Umbi No. 123<br>
                                Jakarta Selatan, Indonesia<br>
                                12345
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <i class="fas fa-phone text-[#A52A2A]"></i>
                        <a href="tel:+6282112345678" class="text-gray-300 hover:text-white transition-colors duration-300">
                            +62 821-1234-5678
                        </a>
                    </div>

                    <div class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-[#A52A2A]"></i>
                        <a href="mailto:info@rasaumbi.com" class="text-gray-300 hover:text-white transition-colors duration-300">
                            info@rasaumbi.com
                        </a>
                    </div>

                    <div class="flex items-center space-x-3">
                        <i class="fas fa-clock text-[#A52A2A]"></i>
                        <div class="text-gray-300 text-sm">
                            <p>Sen-Jum: 08:00-17:00</p>
                            <p>Sabtu: 08:00-15:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-white/20 pt-8" data-aos="fade-down" data-aos-delay="1200">
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0">
                <!-- Copyright -->
                <div class="text-gray-400 text-sm text-center md:text-left">
                    <p>&copy; {{ date('Y') }} Rasa Umbi. Seluruh hak cipta dilindungi.</p>
                    <p class="mt-1">Dibuat dengan <i class="fas fa-heart text-red-500 mx-1"></i> untuk Indonesia</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <button onclick="scrollToTop()"
            class="fixed bottom-8 right-8 bg-[#A52A2A] hover:from-[#A52A2A] hover:to-red-700 text-white p-4 rounded-full shadow-lg transition-all duration-300 transform hover:scale-110 z-50"
            id="scrollToTopBtn">
        <i class="fas fa-arrow-up"></i>
    </button>
</footer>

<script>
// Scroll to Top Functionality
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Show/Hide Scroll to Top Button
window.addEventListener('scroll', function() {
    const scrollBtn = document.getElementById('scrollToTopBtn');
    if (window.pageYOffset > 300) {
        scrollBtn.style.opacity = '1';
        scrollBtn.style.pointerEvents = 'auto';
    } else {
        scrollBtn.style.opacity = '0';
        scrollBtn.style.pointerEvents = 'none';
    }
});

// Initialize scroll button as hidden
document.addEventListener('DOMContentLoaded', function() {
    const scrollBtn = document.getElementById('scrollToTopBtn');
    scrollBtn.style.opacity = '0';
    scrollBtn.style.pointerEvents = 'none';
    scrollBtn.style.transition = 'opacity 0.3s ease';
});
</script>
