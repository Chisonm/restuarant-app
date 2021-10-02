<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index');
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'category_name' => 'required|string',
        ]);

        $data['status'] = 0;

        ProductCategory::create($data);

        \session()->flash('category', 'category added successfully');
        return back();

    }
}
