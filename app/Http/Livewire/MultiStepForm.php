<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;

class MultiStepForm extends Component
{
    public function render()

    {
        $categories=Category::pluck('name','id');
        $brands=Brand::orderBy('name')->pluck('name','id');
        return view('livewire.multi-step-form', compact('categories','brands'));
    }
}
