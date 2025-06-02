<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class Blog extends Component
{
     public $title, $content;

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset(['title', 'content']);
    }

    public function render()
    {
        $posts = Post::latest()->get();
        return view('livewire.blog', compact('posts'))->layout('layouts.base');
    }
}
