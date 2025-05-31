<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Produits</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-800 p-6">
    <h1 class="text-2xl font-bold mb-4">Liste des produits</h1>

    <livewire:product-crud />

    @livewireScripts
</body>
</html>
