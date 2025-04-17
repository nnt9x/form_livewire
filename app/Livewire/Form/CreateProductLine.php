<?php

namespace App\Livewire\Form;

use App\Models\ProductLine;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProductLine extends Component
{
    use WithFileUploads;

    public $name = '';
    public $textDescription = '';
    public $imageFile;

    public bool $showModal = false;

    public function save()
    {
        ProductLine::query()->insert([
                'productLine' => $this->name,
                'textDescription' => $this->textDescription,
            ]
        );
        $this->showModal = false;
        # Ban ra event
        $this->dispatch('product-line-created');
        flash()->success('Thêm thành công!');
    }


    public function render()
    {
        return view('livewire.form.create-product-line');
    }
}
