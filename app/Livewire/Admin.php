<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Admin extends Component
{
    #[Layout('layouts.appAdmin')]
    public function render()
    {
        return view('livewire.admin');
    }
}
