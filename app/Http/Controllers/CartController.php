<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function cart()
    {
        $cart = Cart::getContent();
        return view('web.pages.cart',compact('cart'));
    }

    public function addToCart(Request $request , $id)
    {
        $data =$request->validate([
            "product_id" => "required|exists:products,id",
            "product_qty" => "required|gt:0"
        ]);

        $product = Product::findOrFail($id);

        Cart::add(array(
            'id' => $data["product_id"], // inique row ID
            'name' => $product->product_name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(
                'image' => $product->product_image,
            ),

        ));

        Cart::update($data["product_id"] , [
            'quantity' => array(
                'relative' => false,
                'value' => $data["product_qty"]
            ),
        ]);

        return response()->json(['status' => 'product added successfully']);
    }

    public function removeItem($id)
    {
        $product = Product::findOrFail($id);

        Cart::remove($product->id);

        return back();
    }

    public function updateCart(Request $request , $id)
    {
        $data = $request->validate([
            "prod_id" => "required|exists:products,id",
            "prod_qty" => "required|gt:0"
        ]);

        $product = Product::findOrFail($id);

        Cart::update($data["prod_id"] , [
            'quantity' => array(
                'relative' => false,
                'value' => $data["prod_qty"]
            ),
        ]);

        return response()->json(['status' => 'product updated successfully']);
    }
}
