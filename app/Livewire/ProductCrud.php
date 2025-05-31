<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductCrud extends Component
{
    public $name, $description, $price;

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        $this->reset(['name', 'description', 'price']);
    }

    public function render()
    {
        return view('livewire.product-crud', [
            'products' => Product::latest()->get()
        ]);
    }
}
