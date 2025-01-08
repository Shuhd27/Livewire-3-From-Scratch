<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $name = 'Shuhd';
    public $text = 'This is just an introduction to Livewire 3 from scratch!';

    public function render()
    {
        return view('livewire.greeter');
    }
}
