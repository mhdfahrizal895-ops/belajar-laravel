<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import
        url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;
        500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0
            100%);
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .pagination .page-item {margin: 0 0.25rem;}
        .pagination .page-link {
            display: block;
            padding: 0.5rem 0.75rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
            color: #4a5568;
            transition: all 0.2s;
        }
        .pagination .page-link:hover {background-color: #edf2f7;}
        .pagination .active .page-link {
            background-color: #2d3748;
            color: white;
            border-color: #2d3748;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col gradient-bg">
    <main class="flex-grow flex items-center justify-center py-12">
        @yield('content')
    </main>
    <footer class="bg-gray-200 py-6">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <p class="text-gray-600">&copy; 2025 Belajar Laravel. All rights reserved.</p>
                <p class="text-gray-500 text-sm mt-2">Dibuat dengan menggunakan Laravel dan Tailwind CSS</p>
            </div>
        </div>
    </footer>
</body>
</html>