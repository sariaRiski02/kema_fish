<?php

namespace App\Livewire;

use Livewire\Component;

class SearchComponent extends Component
{

    public $searchItem;

    public function search()
    {

        $this->dispatch('search-product', name: $this->searchItem);
    }

    public function render()
    {
        return view('livewire.search-component');
    }
}
