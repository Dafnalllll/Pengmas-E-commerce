<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\components\sidebar.blade.php -->
<div class="h-screen w-64 bg-gray-500 flex flex-col shadow-lg">
    <!-- Logo Section -->
    <div class="bg-gray-500 p-6 text-center border-b border-[#5A3520]">
        <img src="/img/ikonrasaumbi.png" alt="Rasa Umbi Logo" class="h-20 mx-auto mb-2">
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 py-6">
        
        <ul class="space-y-2">
            <!-- Dashboard - Active -->
             <li class="px-8">
                <a href="/dashboard" class="block py-3 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                    Dashboard
                </a>
            </li>


            <!-- Products -->
            <li class="px-8">
                <a href="/products" class="block py-3 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                    Products
                </a>
            </li>

            <!-- Recipes -->
            <li class="px-8">
                <a href="/recipes" class="block py-3 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                    Recipes
                </a>
            </li>

            <!-- Blogs -->
            <li class="px-8">
                <a href="/blogs" class="block py-3 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                    Blogs
                </a>
            </li>
        </ul>
    </nav>

    <!-- Logout -->
    <div class="p-6 border-t border-[#5A3520]">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left py-3 px-4 text-[#F8F3E7] hover:text-[#B8860B] font-medium transition-colors">
                Log Out
            </button>
        </form>
    </div>
</div>
