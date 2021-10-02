@extends('web.layouts.app')

@section('content')
    <div class="h-screen">
        <div class="container-2">
            <div class="mt-80">
                <h3>Confirm Order</h3>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="rounded-lg card-body" style="background: black;color:white;">
                                <form action="{{ route('order.store') }}" method="post" class="form-body">
                                    @csrf
                                    <div class="row justify-content-center">
                                        <div class="rounded col-md-6">
                                            <h5>Personal Information</h5>
                                            <small>name</small>
                                            <p class="text-left text-gray">{{ $checkoutInfo->first_name ?? '' }} - {{ $checkoutInfo->last_name ?? '' }}</p>
                                            <small>email</small>
                                            <p class="text-left text-gray">{{ $checkoutInfo->email ?? '' }}</p>
                                            <small>phone</small>
                                            <p class="text-left text-gray">{{ $checkoutInfo->phone_number ?? '' }}</p>
                                            <br>
                                            <h5>Delivery Information</h5>
                                            <small>street</small>
                                            <p class="text-left text-gray">{{ $checkoutInfo->address ?? '' }}</p>
                                            <small>city</small>
                                            <p class="text-left text-gray">{{ $checkoutInfo->city ?? '' }}</p>
                                            <small>postal code</small>
                                            <p class="text-left text-gray">{{ $checkoutInfo->post_code ?? 'N/A' }}</p>
                                            <small>phone number</small>
                                            <p class="text-left text-gray">{{ $checkoutInfo->phone_number ?? '' }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Cart Info</h5>
                                            <div class="table-responsive-sm">
                                            <table class="table text-white table-sm">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">product</th>
                                                        <th scope="col">quantity</th>
                                                        <th scope="col">price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($cart as $cartItem)
                                                    <tr style="border-bottom: 1px solid gray;margin-bottom:20px;">
                                                        <td class="">{{ $cartItem->name }}</td>
                                                        <td class="text-gray">x{{ $cartItem->quantity }}</td>
                                                        <td class="text-gray">NGN{{ $cartItem->price }}</td>
                                                    </tr>
                                                    @empty
                                                        <p>No Items in Your cart</p>
                                                    @endforelse
                                                </tbody>
                                                <tfoot class="mt-5">
                                                    <tr class="mt-5">
                                                        <td>Sub Total:</td>
                                                        <td></td>
                                                        <td class="text-gray">N{{ number_format(Cart::getSubTotal(), 2, '.', ',') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total:</td>
                                                        <td></td>
                                                        <td class="text-gray">N{{ number_format(Cart::getTotal(), 2, '.', ',') }}</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div><p>NB: We are responsible for processing this order.</p></div>
                                        <button type="submit" class="checkout__next__btn d-block">Make Payment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
