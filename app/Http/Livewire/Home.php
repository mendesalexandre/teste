<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $title = '';
    public $descriptionSite = '';

    public function render()
    {
        return view('livewire.home');
    }
}
