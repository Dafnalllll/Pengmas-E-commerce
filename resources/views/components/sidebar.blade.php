<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\components\sidebar.blade.php -->
<div class="h-screen w-64 bg-gray-500 flex flex-col shadow-lg">
    <!-- Logo Section -->
    <div class="bg-gray-500 p-6 text-center ">
        <img src="/img/ikonrasaumbi.png" alt="Rasa Umbi Logo" class="h-20 mx-auto mb-2">
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 py-6">
        <ul class="space-y-2 font-[Carena]">
            <!-- Dashboard - Active -->
             <li class="px-8">
                <a href="/dashboardadmin" class="flex items-center py-3 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z" />
                    </svg>
                    Dashboard
                </a>
            </li>

            <!-- Products -->
            <li class="px-8">
                <a href="/products" class="flex items-center py-3 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    Product
                </a>
            </li>

            <!-- SOP -->
            <li class="px-8">
                <a href="/sop" class="flex items-center py-3 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    SOP
                </a>
            </li>

            <!-- Blogs -->
            <li class="px-8">
                <a href="/blogadmin" class="flex items-center py-3 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                    Blog
                </a>
            </li>
        </ul>
    </nav>

    <!-- Logout -->
    <div class="p-6 ">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full flex items-center text-left py-3 px-4 text-[#F8F3E7] hover:text-[#B8860B] font-medium font-[Carena] transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Log Out
            </button>
        </form>
    </div>
</div>
