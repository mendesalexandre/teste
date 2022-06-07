<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $title = '';
    public $content = '';

    public function create()
    {
        return \App\Models\Post::query()->create(
            [
                'title' => $this->title,
                'content' => $this->content
            ]
        );
    }


    public function render()
    {
        return view('livewire.post')
            ->layout('layouts.admin.base');
    }
}
