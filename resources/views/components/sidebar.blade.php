<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\components\sidebar.blade.php -->
<!-- Mobile Menu Button -->
<button id="mobile-menu-btn" class="lg:hidden fixed top-4 left-4 z-50 bg-gray-500 text-white p-2 rounded-lg">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>

<!-- Overlay -->
<div id="sidebar-overlay" class="lg:hidden fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

<!-- Sidebar -->
<div id="sidebar"
    class="fixed lg:static h-screen w-64 bg-gray-500 flex flex-col shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50">
    <!-- Close Button (Mobile Only) -->
    <button id="close-sidebar" class="lg:hidden absolute top-4 right-4 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Logo Section -->
    <div class="bg-gray-500 p-4 lg:p-6 text-center">
        <img src="/img/ikonrasaumbi.png" alt="Rasa Umbi Logo" class="h-16 lg:h-20 mx-auto mb-2">
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 py-4 lg:py-6">
        <ul class="space-y-2 font-[Carena]">
            <!-- Dashboard -->
            <li class="px-6 lg:px-8">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center py-3 text-[#F8F3E7] hover:text-red-500 font-medium transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z" />
                    </svg>
                    Dashboard
                </a>
            </li>

            <!-- Products -->
            <li class="px-6 lg:px-8">
                <a href="{{ route('admin.products') }}"
                    class="flex items-center py-3 text-[#F8F3E7] hover:text-red-500 font-medium transition-colors">
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
                    class="flex items-center py-3 text-[#F8F3E7] hover:text-red-500 font-medium transition-colors">
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
                    class="flex items-center py-3 text-[#F8F3E7] hover:text-red-500 font-medium transition-colors">
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
    <div class="p-4 lg:p-6">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full flex items-center text-left py-3 px-4 text-[#F8F3E7] hover:text-red-500 font-medium font-[Carena] transition-colors">
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const closeBtn = document.getElementById('close-sidebar');

    if (!sidebar) return;

    // helper: safe show/hide using Tailwind translate classes (works if sidebar has -translate-x-full by default)
    function showSidebar() {
        sidebar.classList.remove('-translate-x-full');
        sidebar.classList.add('translate-x-0');
        if (overlay) overlay.classList.remove('hidden');
        // prevent body scroll when open on mobile
        document.body.style.overflow = 'hidden';
    }

    function hideSidebar() {
        sidebar.classList.add('-translate-x-full');
        sidebar.classList.remove('translate-x-0');
        if (overlay) overlay.classList.add('hidden');
        document.body.style.overflow = '';
    }

    // open (mobile button)
    if (mobileBtn) mobileBtn.addEventListener('click', function (e) {
        e.preventDefault();
        showSidebar();
    });

    // close (close button inside sidebar)
    if (closeBtn) closeBtn.addEventListener('click', function (e) {
        e.preventDefault();
        hideSidebar();
    });

    // close when clicking overlay
    if (overlay) overlay.addEventListener('click', function () {
        hideSidebar();
    });

    // close on ESC
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') hideSidebar();
    });

    // responsive initial state: keep sidebar visible on lg+, hidden on mobile
    function applyInitialState() {
        if (window.innerWidth >= 1024) {
            sidebar.classList.remove('-translate-x-full');
            sidebar.classList.add('translate-x-0');
            if (overlay) overlay.classList.add('hidden');
            document.body.style.overflow = '';
        } else {
            // ensure hidden by default on small screens
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('translate-x-0');
            if (overlay) overlay.classList.add('hidden');
        }
    }

    applyInitialState();
    window.addEventListener('resize', applyInitialState);
});
</script>
