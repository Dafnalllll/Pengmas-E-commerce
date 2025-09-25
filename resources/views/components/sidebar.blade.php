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
                <a href="/dashboardadmin" class="block py-3 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                    Dashboard
                </a>
            </li>


            <!-- Products -->
            <li class="px-8">
                <a href="/products" class="block py-3 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                    Product
                </a>
            </li>

            <!-- Recipes -->
            <li class="px-8">
                <a href="/sop" class="block py-3 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                    SOP
                </a>
            </li>

            <!-- Blogs -->
            <li class="px-8">
                <a href="/blogadmin" class="block py-3 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                    Blog
                </a>
            </li>
        </ul>
    </nav>

    <!-- Logout -->
    <div class="p-6 ">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left py-3 px-4 text-[#F8F3E7] hover:text-[#B8860B] font-medium font-[Carena] transition-colors">
                Log Out
            </button>
        </form>
    </div>
</div>
