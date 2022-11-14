<?php

namespace App\Http\Livewire\Career;

use Livewire\Component;

class CareerSearchbar extends Component
{
    public $query;
    public function render()
    {
        return view('livewire.career.career-searchbar');
    }
}
