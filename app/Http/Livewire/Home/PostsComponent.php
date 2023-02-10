<?php

namespace App\Http\Livewire\Home;

use App\Models\Post;
use Livewire\Component;

class PostsComponent extends Component
{
    public $posts;
    public function mount() {
        $this->posts = Post::orderBy('created_at','DESC')->limit(6)->get();
    }
    public function render()
    {
        return view('livewire.home.posts-component');
    }
}
