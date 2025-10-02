<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin | Kampung Syurga</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 flex">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 p-4 lg:p-8 pt-16 lg:pt-8">
        <!-- Header -->
        <h1 class="text-2xl lg:text-4xl font-bold text-gray-500 mb-4 lg:mb-8">Products</h1>

        <!-- Product Table -->
        <div class="mb-4 lg:mb-8">
            <x-producttable :products="$products" />
        </div>
    </div>
</body>

</html>
