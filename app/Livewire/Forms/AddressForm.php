<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AddressForm extends Form
{
    public $province, $city, $district, $village, $detail_address, $postal_code;

    public function rules()
    {

        $user = Auth::user();
        $address = $user->address->first();
        $duty = $address ? 'nullable' : 'required';

        return [
            'province' => [$duty, 'string'],
            'city' => [$duty, 'string'],
            'district' => [$duty, 'string'],
            'village' => [$duty, 'string'],
            'detail_address' => [$duty, 'string'],
            'postal_code' => [$duty, 'string'],
        ];
    }

    public function messages()
    {
        return [
            'province.required' => 'Provinsi tidak boleh kosong',
            'city.required' => 'Kota tidak boleh kosong',
            'district.required' => 'Kecamatan tidak boleh kosong',
            'village.required' => 'Kelurahan tidak boleh kosong',
            'detail_address.required' => 'Alamat tidak boleh kosong',
            'postal_code.required' => 'Kode pos tidak boleh kosong',
        ];
    }
}
