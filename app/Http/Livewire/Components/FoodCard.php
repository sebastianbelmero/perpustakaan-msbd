<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class FoodCard extends Component
{
    public $judul, $penerbit, $pengarang;
    
    public function render()
    {
        return view('livewire.components.food-card');
    }
}
