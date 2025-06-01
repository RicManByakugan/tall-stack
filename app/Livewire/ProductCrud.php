<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class ProductCrud extends Component
{
    public $name, $description, $price, $category;

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required|numeric',
        ]);

        // \Log::info('Données envoyées', [
        //     'name' => $this->name,
        //     'description' => $this->description,
        //     'price' => $this->price,
        // ]);
        // dd($this->name, $this->description, $this->price);

        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
        ]);

        $this->reset(['name', 'description', 'price']);
    }

    public function render()
    {
        $data = Product::latest()->get();
        $category = Category::latest()->get();
        return view('livewire.product-crud', [
            'products' => $data,
            'categories' => $category
        ]);
    }
}
