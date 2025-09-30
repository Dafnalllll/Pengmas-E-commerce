<section class="py-20 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-start">
            <!-- Contact Info -->
            <div class="space-y-8" data-aos="fade-right" data-aos-delay="500">
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20">
                    <h2 class="text-3xl font-bold text-white mb-6" style="font-family: 'Cormorant Garamond', serif;">
                        Informasi Kontak
                    </h2>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4 hover:scale-110 transition-all duration-300">
                            <div class="bg-[#A52A2A] p-3 rounded-full">
                                <i class="fas fa-map-marker-alt text-white text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold text-lg mb-1">Alamat</h3>
                                <p class="text-gray-200">Jl. Raya Umbi No. 123, Jakarta Selatan, Indonesia</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4 hover:scale-110 transition-all duration-300">
                            <div class="bg-[#A52A2A] p-3 rounded-full">
                                <i class="fas fa-phone text-white text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold text-lg mb-1">Telepon</h3>
                                <p class="text-gray-200">+62 821-1234-5678</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4 hover:scale-110 transition-all duration-300">
                            <div class="bg-[#A52A2A] p-3 rounded-full">
                                <i class="fas fa-envelope text-white text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold text-lg mb-1">Email</h3>
                                <p class="text-gray-200">info@rasaumbi.com</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4 hover:scale-110 transition-all duration-300">
                            <div class="bg-[#A52A2A] p-3 rounded-full ">
                                <i class="fas fa-clock text-white text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold text-lg mb-1">Jam Operasional</h3>
                                <p class="text-gray-200">Senin - Jumat: 08:00 - 17:00</p>
                                <p class="text-gray-200">Sabtu: 08:00 - 15:00</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-8">
                        <h3 class="text-white font-semibold text-lg mb-4">Ikuti Kami</h3>
                        <div class="flex space-x-4 ">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 p-3 rounded-full hover:scale-110 transition-all duration-300">
                                <i class="fab fa-facebook-f text-white text-lg"></i>
                            </a>
                            <a href="#" class="bg-pink-600 hover:bg-pink-700 p-3 rounded-full hover:scale-110 transition-all duration-300">
                                <i class="fab fa-instagram text-white text-lg"></i>
                            </a>
                            <a href="#" class="bg-green-600 hover:bg-green-700 p-3 rounded-full hover:scale-110 transition-all duration-300">
                                <i class="fab fa-whatsapp text-white text-lg"></i>
                            </a>
                            <a href="#" class="bg-red-600 hover:bg-red-700 p-3 rounded-full hover:scale-110 transition-all duration-300">
                                <i class="fab fa-youtube text-white text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20"
                 data-aos="fade-left" data-aos-delay="600">
                <h2 class="text-3xl font-bold text-white mb-6" style="font-family: 'Cormorant Garamond', serif;">
                    Kirim Pesan
                </h2>

                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-white font-medium mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20"
                                   placeholder="Masukkan nama lengkap">
                        </div>
                        <div>
                            <label for="email" class="block text-white font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20"
                                   placeholder="nama@email.com">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-white font-medium mb-2">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone"
                                   class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20"
                                   placeholder="+62 812-3456-7890">
                        </div>
                        <div>
                            <label for="subject" class="block text-white font-medium mb-2">Subjek</label>
                            <select id="subject" name="subject" required
                                    class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20">
                                <option value="" class="text-gray-800">Pilih subjek</option>
                                <option value="partnership" class="text-gray-800">Kemitraan</option>
                                <option value="wholesale" class="text-gray-800">Pembelian Grosir</option>
                                <option value="complaint" class="text-gray-800">Keluhan</option>
                                <option value="suggestion" class="text-gray-800">Saran</option>
                                <option value="other" class="text-gray-800">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-white font-medium mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="6" required
                                  class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 resize-none"
                                  placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-gradient-to-r from-[#A52A2A] to-red-600 hover:from-[#A52A2A] hover:to-red-700 text-white font-semibold py-4 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
