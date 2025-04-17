<?php

namespace App\Livewire;

use App\Models\ProductLine;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductLineTable extends Component
{
    #[On('product-line-created')]
    public function render()
    {
        $productLines = ProductLine::query()->get();
        return view('livewire.product-line-table', ['productLines' => $productLines]);
    }
}
