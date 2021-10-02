<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductCategory;

class Categories extends Component
{
    public $category;
    public $status = 0;

    protected $rules = [
        'category_name' => 'required|min:6',
    ];

    public function submit()
    {
        $this->validate();

        ProductCategory::create([
            'category_name' => $this->category,
            'status' => $this->status,
        ]);
    }

    public function render()
    {
        $categories = ProductCategory::orderBy('created_at', 'desc')->get();
        return view('admin.livewire.categories',['categories' => $categories]);
    }
}
