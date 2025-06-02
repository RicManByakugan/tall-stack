<div class="space-y-6">

    <form wire:submit.prevent="store" class="space-y-4 bg-white p-6 rounded shadow">
        <input type="text" wire:model="title" placeholder="Titre"
               class="w-full p-2 border rounded" />
        <textarea wire:model="content" placeholder="Contenu"
                  class="w-full p-2 border rounded"></textarea>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Publier
        </button>
    </form>

    <div class="space-y-4">
        @foreach($posts as $post)
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-bold">{{ $post->title }}</h2>
                <p class="text-gray-700">{{ $post->content }}</p>
                <p class="text-xs text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
            </div>
        @endforeach
    </div>

</div>
