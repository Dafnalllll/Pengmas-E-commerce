@section('title', 'Rasa Umbi || Login')
@push('head')
    <title>Login | Rasa Umbi</title>
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
@endpush

<x-guest-layout>
    <div class="fixed inset-0 min-h-screen w-full flex items-center justify-center bg-[#F8F3E7]">
        <div 
            class="w-full max-w-md mx-auto bg-[#E0E0E0] rounded-xl shadow-none p-8 flex flex-col items-center"
            data-aos="zoom-in"
            data-aos-duration="900"
        >
            <!-- Logo -->
            <img src="/img/ikonrasaumbi.png" alt="Rasa Umbi Logo" class="h-16 mb-2" data-aos="fade-down" data-aos-delay="200">
            <h2 class="text-2xl font-bold text-[#1A120B] mb-6" data-aos="fade-up" data-aos-delay="400">Login</h2>
            
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="w-full flex flex-col gap-4">
                @csrf

                <!-- Email Address -->
                <div class="relative">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#A52A2A]">
                        <!-- Heroicons: Envelope -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8V8a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        </svg>
                    </span>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                        class="block w-full pl-12 pr-4 py-3 rounded-xl border border-[#5C4B36] bg-transparent text-[#1A120B]
                            focus:border-2 focus:border-[#A52A2A] focus:outline-none focus:ring-0 placeholder:text-[#5C4B36]" placeholder="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="relative">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#A52A2A]">
                        <!-- Simple Lock Icon SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <rect x="6" y="10" width="12" height="8" rx="2" />
                            <path d="M8 10V7a4 4 0 018 0v3" fill="none" stroke="currentColor" stroke-width="2"/>
                            <circle cx="12" cy="14" r="1.5" fill="#fff"/>
                        </svg>
                    </span>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="block w-full pl-12 pr-4 py-3 rounded-xl border border-[#5C4B36] bg-transparent text-[#1A120B]
                            focus:border-2 focus:border-[#A52A2A] focus:outline-none focus:ring-0 placeholder:text-[#5C4B36]" placeholder="Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mt-2">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#A52A2A] shadow-sm focus:ring-[#A52A2A] cursor-pointer" name="remember">
                    <label for="remember_me" class="ml-2 text-sm text-[#5C4B36]">Remember me</label>
                </div>

                <!-- Login Button -->
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-[#5C4B36] hover:text-[#A0522D] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#A0522D]" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif

                    <x-primary-button 
                        class="ml-3 px-6 py-2 rounded-xl font-bold bg-[#A52A2A] hover:bg-[#A52A2A] focus:bg-[#A52A2A] active:bg-[#A52A2A] text-white 
                               border-2  active:border-[#A52A2A] hover:border-[#A52A2A] 
                               focus:outline-none focus:ring-0 focus:ring-transparent"
                    >
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>

            <!-- Divider -->
            <div class="flex items-center w-full my-8">
                <hr class="flex-grow border-t border-[#5C4B36]" />
                <span class="mx-4 text-[#5C4B36] font-semibold">atau</span>
                <hr class="flex-grow border-t border-[#5C4B36]" />
            </div>

            <!-- Social Login Icons -->
            <div class="flex space-x-6 justify-center mt-4">
                <!-- Google Logo -->
                <a href="#" class="hover:opacity-80 hover:scale-110 transition-transform duration-200">
                    <img src="/img/google.png" alt="Google Login" class="h-5 w-5 object-contain" />
                </a>
                <!-- Facebook Logo -->
                <a href="#" class="hover:opacity-80 hover:scale-110 transition-transform duration-200">
                    <img src="/img/facebook.png" alt="Facebook Login" class="h-5 w-5 object-contain" />
                </a>
            </div>
        </div>
    </div>
    <!-- Font Awesome CDN for icons -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init();
    });
    </script>
</x-guest-layout>
