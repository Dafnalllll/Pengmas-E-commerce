<!-- filepath: d:\Dafa Code\pengmase-ecommerce\resources\views\pages\admin\dashboardadmin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Rasa Umbi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 flex">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <!-- Header -->
        <h1 class="text-4xl font-bold text-gray-500 mb-8">Dashboard</h1>

        <!-- Welcome Card -->
        <div class="bg-red-700 text-white p-6 rounded-lg mb-8">
            <h2 class="text-2xl font-semibold mb-2">Welcome, admin!</h2>
            <p class="text-[#F5F5DC]">You are logged in as: admin1234@gmail.com</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Products Card -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="bg-[#4ECDC4] p-3 rounded-lg mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-[#6B4226]">Products</h3>
                    </div>
                </div>
                <div class="text-3xl font-bold text-[#6B4226] mb-2">3</div>
                <p class="text-gray-600 text-sm mb-4">3 active</p>
                <a href="/admin/products" class="text-red-600 hover:underline font-medium">Manage Products</a>
            </div>

            <!-- Recipes Card -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="bg-[#FFB347] p-3 rounded-lg mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-[#6B4226]">SOP</h3>
                    </div>
                </div>
                <div class="text-3xl font-bold text-[#6B4226] mb-2">3</div>
                <p class="text-gray-600 text-sm mb-4">3 active</p>
                <a href="/admin/recipes" class="text-red-600 hover:underline font-medium">Manage SOP</a>
            </div>

            <!-- Blogs Card -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="bg-[#9B59B6] p-3 rounded-lg mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-[#6B4226]">Blogs</h3>
                    </div>
                </div>
                <div class="text-3xl font-bold text-[#6B4226] mb-2">1</div>
                <p class="text-gray-600 text-sm mb-4">1 published</p>
                <a href="/admin/blogs" class="text-red-600 hover:underline font-medium">Manage Blogs</a>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="mb-8">
            <h3 class="text-2xl font-semibold text-gray-500 mb-6">Quick Links</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Add Product -->
                <button class="bg-[#4ECDC4] hover:bg-[#45B7B8] hover:scale-105 text-white p-4 rounded-lg font-semibold transition-all duration-200 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add Product
                </button>

                <!-- Add Recipe -->
                <button class="bg-[#FFB347] hover:bg-[#FF9800] hover:scale-105 text-white p-4 rounded-lg font-semibold transition-all duration-200 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add SOP
                </button>

                <!-- Add Blog -->
                <button class="bg-[#9B59B6] hover:bg-[#8E44AD] hover:scale-105 text-white p-4 rounded-lg font-semibold transition-all duration-200 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add Blog
                </button>
            </div>
        </div>
    </div>
</body>
</html>
