<?php

namespace App\Livewire;

use App\Livewire\Forms\AddressForm;
use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\UpdateForm;
use Illuminate\Support\Facades\Auth;

class Setting extends Component
{


    public UpdateForm $form;
    public AddressForm $formAddress;



    public function update()
    {
        $this->form->validate();

        $user = Auth::user();
        if ($user instanceof User) {

            $data = array_filter($this->form->all(), fn($value) => !is_null($value));

            if (!$data) {
                return;
            }

            $user->update($data);

            if (isset($data['phone'])) {
                $user->contact()->updateOrCreate(
                    ['id_user' => $user->id],
                    ['telephone' => $data['phone']]
                );
            }

            $this->form->reset();
            session()->flash('success', 'Data berhasil diperbarui.');
        }
    }

    public function address()
    {
        $data = $this->formAddress->validate();

        $user = Auth::user();
        if ($user instanceof User) {

            if ($user->address->first()) {

                $update = array_filter($data, fn($value) => !is_null($value));

                $user->address()->update($update);
                $this->formAddress->reset();
                session()->flash('success-address', 'Data berhasil diperbarui.');
                return;
            }

            $user->address()->create($data);
        }

        $this->formAddress->reset();
        session()->flash('success-address', 'Data berhasil diperbarui.');
    }


    public function render()
    {
        $user = Auth::user();
        $name = $user->name;
        $phone = $user->contact->first()->telephone ?? '';
        $address = $user->address->first();
        return view('livewire.setting', compact('name', 'phone', 'address'));
    }
}
