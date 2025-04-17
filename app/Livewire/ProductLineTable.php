<?php

namespace App\Livewire;

use App\Models\ProductLine;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductLineTable extends Component
{
    public $productLine;
    public $textDescription;

    #[On('product-line-created')]
    public function render()
    {
        $productLines = ProductLine::query()->get();
        return view('livewire.product-line-table', ['productLines' => $productLines]);
    }

    public function updateProductLine()
    {
        DB::table('productlines')
            ->where('productLine', $this->productLine)
            ->update([
            'textDescription' => $this->textDescription
        ]);
        flash()->success('Cập nhật thành công!');
    }

    public function delete($productLine)
    {
        DB::table('productlines')->where('productLine', $productLine)->delete();
        flash()->success('Xoá thành công!');
    }
}
