<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categorie extends Component
{
    public $name;

    public function store()
    {
        $this->validate([
            'name' => 'required',
        ]);

        Category::create([
            'name' => $this->name,
        ]);

        $this->reset(['name']);
    }

    public function render()
    {
        $data = Category::latest()->get();
        return view('livewire.categorie', [
            'category' => $data
        ]);
    }
}
