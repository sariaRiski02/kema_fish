<?php

namespace App\Livewire;

use Livewire\Component;

class Verifycode extends Component
{
    public function verify()
    {
        dd('verify');
    }

    public function render()
    {
        return view('livewire.verifycode');
    }
}
