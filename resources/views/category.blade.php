<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Catégory</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-800 p-6">
    <h1 class="text-2xl font-bold mb-4">Liste des catégorie</h1>

    <livewire:categorie />

    @livewireScripts
</body>
</html>
