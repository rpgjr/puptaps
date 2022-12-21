<?php

namespace App\Http\Livewire\Career;

use App\Models\CareerCategories;
use Livewire\Component;

class CareerSubmenu extends Component
{
    public $query;
    public function render()
    {
        $careerCategories = CareerCategories::all();
        return view('livewire.career.career-submenu', compact("careerCategories"));
    }
}
