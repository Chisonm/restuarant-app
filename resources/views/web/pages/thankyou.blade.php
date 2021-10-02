@extends('web.layouts.app')

@section('content')
    <div class="h-screen" style="height: 50vh;">
        <div class="container-2">
            <div class="mt-80">
               <div class="row justify-content-center">
                   <div class="col-md-6">
                        <h2 class="text-center">Thank You</h2>
                        <p class="text-center">your order has been placed you will get a call from the admin soon. cheers 🥂</p>
                        <a href="{{ route('index') }}" class="checkout__next__btn__center d-block" >Continue Shopping</a>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection
