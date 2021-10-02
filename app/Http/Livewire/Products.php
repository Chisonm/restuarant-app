<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Products extends Component
{
    public $name;

    public function render()
    {
        return view('admin.livewire.products')
            ->extends('layouts.base')
            ->section('body');
    }

    public function submit()
    {
        dd('all');
    }
}
