<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use JD\Cloudder\Facades\Cloudder;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',['products' => $products]);
    }

    public function create()
    {
        $productCategory = ProductCategory::get();
        return view('admin.products.create',compact('productCategory'));
    }

    public function storeProduct()
    {
        $products = request()->validate([
            'product_name' => 'required|string',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_details' => 'required|string',
            'product_description' => 'required|string',
            'price' => 'required|string',
        ]);

        $image_name = request()->file('product_image');
        $image_url = cloudinary()->upload($image_name->getRealPath())->getSecurePath();
        $products['product_image'] = $image_url;
        $products['category_id'] = request()->input('category_id');

        Product::create($products);

        return back();

    }
}
