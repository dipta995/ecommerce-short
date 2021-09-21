<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartComponenet extends Component
{
    public function render()
    {
        return view('livewire.cart-componenet')->layout('layouts.master');
    }
}
