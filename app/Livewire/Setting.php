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

            $data = array_filter($this->form->all(), fn($value) => !is_null($value));

            if (!$data) {
                return;
            }

            $user->update($data);

            if (isset($data['phone'])) {
                $user->contact->first()->update(['telephone' => $data['phone']]);
            }

            $this->form->reset();
            session()->flash('success', 'Data berhasil diperbarui.');
        }
    }
    public function render()
    {
        $user = Auth::user();
        $name = $user->name;
        $phone = $user->contact->first()->telephone;
        return view('livewire.setting', compact('name', 'phone'));
    }
}
