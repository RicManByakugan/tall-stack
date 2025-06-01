<div>
    <form wire:submit.prevent="store" class="space-y-4 mb-6">
        <input type="text" wire:model="name" placeholder="Nom" class="border p-2 w-full rounded">
        <textarea wire:model="description" placeholder="Description" class="border p-2 w-full rounded"></textarea>
        <input type="number" step="0.01" wire:model="price" placeholder="Prix" class="border p-2 w-full rounded">
        <select wire:model="category" class="border p-2 w-full rounded">
            <option value="">Catégorie</option>
            @isset($categories)
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            @endisset
        </select>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter</button>
    </form>

    <ul class="space-y-2">
        @foreach($products as $product)
            <li class="p-3 bg-white rounded shadow">
                <div class="font-semibold">{{ $product->name }} - {{ $product->price }} Ar</div>
                <div class="text-sm">{{ $product->description }}</div>
                <span class="text-sm text-gray-500">({{ $product->category->name ?? 'Aucune catégorie' }})</span>
            </li>
        @endforeach
    </ul>
</div>
