<!-- filepath: d:\Pengmas-E-commerce\resources\views\components\sidebar.blade.php -->
<!-- Mobile Menu Button -->
<button id="mobile-menu-btn" class="lg:hidden fixed top-4 left-4 z-50 bg-gray-500 text-white p-2 rounded-lg shadow-lg">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>

<!-- Overlay -->
<div id="sidebar-overlay" class="lg:hidden fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

<!-- Sidebar -->
<div id="sidebar"
    class="fixed top-0 left-0 h-screen w-64 bg-gray-500 flex flex-col shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50 overflow-y-auto">
    <!-- Close Button (Mobile Only) -->
    <button id="close-sidebar" class="lg:hidden absolute top-4 right-4 text-white z-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Logo Section -->
    <div class="bg-gray-500 p-4 lg:p-6 text-center flex-shrink-0">
        <a href="{{ route('welcome') }}">
            <img src="/img/ikonrasaumbi.png" alt="Rasa Umbi Logo"
                class="h-16 lg:h-20 mx-auto mb-2 transition-transform duration-200 ease-in-out hover:scale-110 cursor-pointer">
        </a>
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 py-4 lg:py-6 overflow-y-auto">
        <ul class="space-y-2 font-[Carena]">
            <!-- Dashboard -->
            <li class="px-6 lg:px-8">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center py-3 text-[#F8F3E7] hover:text-red-500 font-medium transition-colors {{ request()->routeIs('admin.dashboard') ? 'text-red-500 border-l-4 border-red-500 -ml-1 pl-1' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>
            </li>

            <!-- Statistics -->
            <li class="px-6 lg:px-8">
                <a href="{{ route('admin.statistics') }}"
                    class="flex items-center py-3 text-[#F8F3E7] hover:text-red-500 font-medium transition-colors {{ request()->routeIs('admin.statistics') ? 'text-red-500 border-l-4 border-red-500 -ml-1 pl-1' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Statistics
                </a>
            </li>

            <!-- Monitoring -->
            <li class="px-6 lg:px-8">
                <a href="{{ route('admin.monitoring') }}"
                    class="flex items-center py-3 text-[#F8F3E7] hover:text-red-500 font-medium transition-colors {{ request()->routeIs('admin.monitoring') ? 'text-red-500 border-l-4 border-red-500 -ml-1 pl-1' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                    Monitoring
                </a>
            </li>

            <!-- Products -->
            <li class="px-6 lg:px-8">
                <a href="{{ route('admin.products') }}"
                    class="flex items-center py-3 text-[#F8F3E7] hover:text-red-500 font-medium transition-colors {{ request()->routeIs('admin.products*') ? 'text-red-500 border-l-4 border-red-500 -ml-1 pl-1' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    Product
                </a>
            </li>

            <!-- SOP -->
            <li class="px-6 lg:px-8">
                <a href="{{ route('admin.sops') }}"
                    class="flex items-center py-3 text-[#F8F3E7] hover:text-red-500 font-medium transition-colors {{ request()->routeIs('admin.sops*') ? 'text-red-500 border-l-4 border-red-500 -ml-1 pl-1' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    SOP
                </a>
            </li>

            <!-- Blogs -->
            <li class="px-6 lg:px-8">
                <a href="{{ route('admin.blogs') }}"
                    class="flex items-center py-3 text-[#F8F3E7] hover:text-red-500 font-medium transition-colors {{ request()->routeIs('admin.blogs*') ? 'text-red-500 border-l-4 border-red-500 -ml-1 pl-1' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                    Blog
                </a>
            </li>
        </ul>
    </nav>

    <!-- Logout -->
    <div class="p-4 lg:p-6 flex-shrink-0 border-t border-gray-600">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full flex items-center text-left py-3 px-4 text-[#F8F3E7] hover:text-red-500 hover:bg-gray-600 rounded-lg font-medium font-[Carena] transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Log Out
            </button>
        </form>
    </div>
</div>

<!-- Main Content Wrapper (untuk kompensasi lebar sidebar di desktop) -->
<style>
    @media (min-width: 1024px) {
        body {
            margin-left: 16rem; /* 256px = w-64 */
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const closeBtn = document.getElementById('close-sidebar');

    if (!sidebar) return;

    function showSidebar() {
        sidebar.classList.remove('-translate-x-full');
        sidebar.classList.add('translate-x-0');
        if (overlay) overlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function hideSidebar() {
        sidebar.classList.add('-translate-x-full');
        sidebar.classList.remove('translate-x-0');
        if (overlay) overlay.classList.add('hidden');
        document.body.style.overflow = '';
    }

    if (mobileBtn) mobileBtn.addEventListener('click', function (e) {
        e.preventDefault();
        showSidebar();
    });

    if (closeBtn) closeBtn.addEventListener('click', function (e) {
        e.preventDefault();
        hideSidebar();
    });

    if (overlay) overlay.addEventListener('click', function () {
        hideSidebar();
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') hideSidebar();
    });

    function applyInitialState() {
        if (window.innerWidth >= 1024) {
            sidebar.classList.remove('-translate-x-full');
            sidebar.classList.add('translate-x-0');
            if (overlay) overlay.classList.add('hidden');
            document.body.style.overflow = '';
        } else {
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('translate-x-0');
            if (overlay) overlay.classList.add('hidden');
        }
    }

    applyInitialState();
    window.addEventListener('resize', applyInitialState);
});
</script>
