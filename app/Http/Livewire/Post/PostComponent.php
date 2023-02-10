<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class PostComponent extends Component
{
    public $post;
    public function mount($slug) {
        $this->post = Post::where('slug',$slug)->first();
    }
    public function render()
    {
        return view('livewire.post.post-component')->layout('layouts.master');
    }
}
