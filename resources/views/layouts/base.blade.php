<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-800">

    {{-- Navbar --}}
    <nav class="bg-white shadow p-4 mb-4">
        <div class="container mx-auto">
            <a href="/" class="text-xl font-bold text-blue-600">Mon Blog</a>
        </div>
    </nav>

    {{-- Contenu principal --}}
    <main class="container mx-auto">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="mt-10 p-4 text-center text-sm text-gray-600">
        © {{ date('Y') }} Mon Blog - TALL Stack
    </footer>

    @livewireScripts
</body>
</html>
