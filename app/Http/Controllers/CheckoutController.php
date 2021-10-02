<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

class CheckoutController extends Controller
{

    public function getCheckout()
    {
        if (Cart::isEmpty()) {
            return redirect('/');
        }
        $checkoutInfo = request()->session()->get('checkoutInfo');
        return view('web.pages.checkout',compact('checkoutInfo'));
    }

    public function createOrder()
    {
        $validatedData = request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'post_code' => 'nullable|string',
            'phone_number' => 'required|string',
            'notes' => 'nullable|string',
            'email' => 'required|string|email|max:105',
        ]);
        if(empty(request()->session()->get('checkoutInfo'))){
            $checkoutInfo = new Order();
            $checkoutInfo->fill($validatedData);
            request()->session()->put('checkoutInfo', $checkoutInfo);
        }else{
            $checkoutInfo = request()->session()->get('checkoutInfo');
            $checkoutInfo->fill($validatedData);
            request()->session()->put('checkoutInfo', $checkoutInfo);
        }

        return redirect()->route('order.create');
    }

    public function getOrder()
    {
        // redirect the user to home page if cart is empty
        if (Cart::isEmpty()) {
            return redirect('/');
        }
        // get the cart content
        $cart = Cart::getContent();
        // get checkout info from session
        $checkoutInfo = request()->session()->get('checkoutInfo');
        return view('web.pages.confirmorder',\compact('checkoutInfo','cart'));
    }

    public function storeOrder()
    {
        $checkoutInfo = request()->session()->get('checkoutInfo');
        $checkoutInfo['order_number'] = 'ORD-'.strtoupper(uniqid());
        $checkoutInfo['status'] = 'pending';
        $checkoutInfo['grand_total'] = Cart::getTotal();
        $checkoutInfo['item_count'] = Cart::getTotalQuantity();
        $checkoutInfo['payment_status'] = 0;
        $checkoutInfo['payment_method'] =  null;
        $checkoutInfo['refrence_number'] =  '08954478';
        $checkoutInfo->save();

        if ($checkoutInfo) {

            $items = Cart::getContent();

            foreach ($items as $item) {
                // A better way will be to bring the product id with the cart items
                // you can explore the package documentation to send product id with the cart
                $product = Product::where('id', $item->id)->first();

                $orderItem = new OrderItem([
                'order_id'      =>  $checkoutInfo->id,
                'product_id'    =>  $product->id,
                'quantity'      =>  $item->quantity,
                'price'         =>  $item->price
                ]);

                $checkoutInfo->items()->save($orderItem);
            }
        }

        Cart::clear();
        request()->session()->forget('checkoutInfo');

        return view('web.pages.thankyou');
    }



}
