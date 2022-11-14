<?php

namespace App\Http\Livewire\Career;

use Livewire\Component;

class CareerImageModal extends Component
{
    public $career;
    public $alumni;
    public function render()
    {
        return view('livewire.career.career-image-modal');
    }
}
