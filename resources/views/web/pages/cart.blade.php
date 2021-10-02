@extends('web.layouts.app')

@section('content')
    <div class="h-screen">
        <div class="container-2">
            <div class="mt-80">
                <h4>My Cart Items ( {{ $cart->count() }} )</h4>
                <div class="container-3">
                    @forelse ($cart as $cartItem)
                        <div class="px-4 py-3 mt-4 bg-white shadow-sm border-top">
                            <div class="d-flex justify-content-between product_data">
                                <div class="d-flex justify-content-evenly align-self-center">
                                    <img src="{{ $cartItem->attributes->image }}" class="rounded d-none d-sm-block"
                                        width="100" alt="">
                                    <div class="ml-4 cart-page-btn">
                                        <h5 class="sub-sm">{{ $cartItem->name }}</h5>
                                        <input type="hidden" class="prod_id" value="{{ $cartItem->id }}">
                                        <div class="mb-80 d-flex justify-content-center">
                                            <button class="decrement-btn changeQuantity">-</button>
                                            <input type="text" name="pro_qty" value="{{ $cartItem->quantity }}"
                                                class="text-center form-control qty-input"
                                                style="border: 0px;width:40px;font-weight:bold; font-size:16px;">
                                            <button class="increment-btn changeQuantity">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-page-amount">
                                    <h5 class="sub-sm">NGN{{ $cartItem->price }}</h5>
                                    <a href="{{ route('removeItem', $cartItem->id) }}"
                                        class="px-2 py-1 remove-btn">Remove</a>
                                </div>
                            </div>

                        </div>
                    @empty
                        <p>No Items in Your cart</p>
                        <a href="{{ route('index') }}" class="checkout__next__btn__center d-block" >Continue Shopping</a>
                    @endforelse

                    <div class="mt-5">
                        @if (Cart::isEmpty())
                            <div class="h-screen" style="height: 40vh;">
                            </div>
                        @else
                            <div class="d-flex justify-content-between">
                                <div class="total">
                                    <h3>Sub Total:</h3>
                                </div>
                                <div class="price">
                                    <h4>N{{ number_format(Cart::getSubTotal(), 2, '.', ',') }}</h4>
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-between">
                                <div class="total">
                                    <h3>Total:</h3>
                                </div>
                                <div class="price">
                                    <h4>N{{ number_format(Cart::getTotal(), 2, '.', ',') }}</h4>
                                </div>
                            </div>
                    </div>

                    <div class="mt-5">
                        <a href="{{ route('checkout') }}" class="order-btn">Proceed To Checkout</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
