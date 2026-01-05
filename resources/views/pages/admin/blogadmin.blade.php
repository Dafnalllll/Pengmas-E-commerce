<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('img/ikonrasaumbi.png') }}">
    <title>Blog Admin | Kampung Syurga</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 flex flex-col lg:flex-row">
    <!-- Sidebar -->
    <x-sidebar />   

    <!-- Main Content -->
    <div class="flex-1 p-4 lg:p-8 pt-16 lg:pt-8">
        <!-- Header -->
        <h1 class="text-2xl lg:text-4xl font-bold text-gray-500 mb-4 lg:mb-8">Blog</h1>

        <!-- Blog Table -->
        <div class="mb-4 lg:mb-8">
            <x-blogtable :blogs="$blogs"/>
        </div>

    </div>
</body>
</html>
