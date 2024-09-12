<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\UpdateForm;
use Illuminate\Support\Facades\Auth;

class Setting extends Component
{


    public UpdateForm $form;

    public function update()
    {
        $this->validate();
        $user = Auth::user();
        if ($user instanceof User) {

            $user->update([
                'name' => $this->form->name,
                'password' => bcrypt($this->form->password),
            ]);

            $user->contact()->create([
                'telephone' => $this->form->phone
            ]);
        }
    }
    public function render()
    {
        return view('livewire.setting');
    }
}
