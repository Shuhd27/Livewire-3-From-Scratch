<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeter extends Component
{
    
    #[Validate('required|min:2')]
    public $name = '';


    public $greeting = '';
    public $greetingMessage = '';

    public function changeGreeting()
    {
        // Reset the greeting message,
        // so that it will be updated with the new greeting.
        // when the user clicks the button.
        $this->reset('greetingMessage');

        // Validate the input fields.
        $this->validate();

        $this->greetingMessage = "{$this->greeting}, {$this->name}!";
    }

    // public function rules()
    // {
    //     return [
    //         'name' =>'required|min:2',
    //     ];
    // }

    public function render()
    {
        return view('livewire.greeter');
    }
}
