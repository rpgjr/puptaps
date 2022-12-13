<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminCards extends Component
{
    public $totalRegisteredUser;
    public function render()
    {
        return view('livewire.admin.admin-cards');
    }
}
