@extends('web.layouts.app')

@section('content')
    <div class="h-screen">
        <div class="container-2">
            <div class="mt-80">
                <h3>checkout</h3>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="rounded-lg card-body" style="background: black;color:white;">
                                <form action="{{ route('order.checkout') }}" method="post" class="form-body">
                                    @csrf
                                 <div class="row justify-content-between">
                                    <div class="rounded col-md-6">
                                     <h5>Personal Information</h5>
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" required value="{{ $checkoutInfo->first_name ?? '' }}" name="first_name" id="first_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" required value="{{ $checkoutInfo->last_name ?? '' }}" name="last_name" id="last_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" required value="{{ $checkoutInfo->email ?? '' }}" name="email" id="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number</label>
                                            <input type="text" required value="{{ $checkoutInfo->phone_number ?? '' }}" name="phone_number" id="phone_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <h5>Delivery Information</h5>
                                        <div class="form-group">
                                            <label for="address">Street Address</label>
                                            <input type="text" required value="{{ $checkoutInfo->address ?? '' }}" name="address" id="address" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" required value="{{ $checkoutInfo->city ?? '' }}" name="city" id="city" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="post_code">Post Code <small>(optional)</small></label>
                                            <input type="text" value="{{ $checkoutInfo->post_code ?? '' }}" name="post_code" id="post_code" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="notes">Notes <small>(optional)</small></label>
                                            <textarea name="notes" id="notes" cols="5" rows="5" class="form-control">
                                                {{ $checkoutInfo->notes ?? '' }}
                                            </textarea>
                                        </div>
                                        <button type="submit" class="float-right checkout__next__btn d-sm-block">Next</button>
                                    </div>

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
