@extends('web.layouts.app')

@section('content')
    <div class="bg-image">
        <div class="overlay"></div>
        <div class="container-2">
            <div class="hero-content">
                <small>Fast Food Restaurant</small>
                <h4>Fresh Deli by  Karithia_foodz</h4>
                <p>You can now place order on our website. it's easy</p>
                <a href="tel:+234 904 614 6129" target="_blank" class="btn-yellow">Contact Us</a>
            </div>
        </div>
    </div>



    {{-- about section --}}
    <div class="mt-5">
        <div class="container-2">
            <div class="about-section">
                <div class="d-flex-2">
                    <div class="about-content">
                        <h3>Fresh salads 🥗| Smoothies <br> | Wraps 🌯 | Burgers 🍔 </h3>
                        <p>We Deliver to home and offices.</p>
                    </div>
                    <div class="img-content">
                        <img src="{{ asset('front-assets/images/deli-about.jpg') }}" class="hero-1-image" width="100"
                            alt="" />
                        <img src="{{ asset('front-assets/images/deli-about2.jpg') }}" class="hero-2-image" width="100"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- product section --}}
    <section class="mt-5">
        <div class="container-2">
            <h3 class="mb-3 ml-3 text-bold" style="font-weight: 900;font-size:32px;">Available for Delivery</h3>
            <div class="d-grid">
                @forelse ($products as $product)
                <div class="shadow-sm products d-flex">
                    <img src="{{ $product->product_image }}" height="100" width="100" alt="">
                    <div class="product-left">
                         <h3>{{ $product->product_name }}</h3>
                         <p>{{ $product->category->category_name }}</p>
                         <span>₦{{ number_format($product->price, 2, '.', ',')}}</span>
                         <div class="mt-3">
                            <a href="#" class="mt-3 add-to-cart-btn" data-toggle="modal" data-target="#addToCartModal-{{ $product->id }}">add to cart</a>
                         </div>
                    </div>
                </div>
                @include('web.partials.addToCartModal')
                @empty
                    <p>no products on ground</p>
                @endforelse

            </div>

        </div>
    </section>

    <div class="">
        <section class="services ptb-80 mb-50" id="services">
        <div class="services-content">
            <h3>Smooo-thie!!!!</h3>
            <p>Our delicious blend of fruits are all made from locally grown fruits</p>
            <p>Now you know why our smoothies are extra rich in flavour and nutrient-dense.</p>
            <div class="btn-center">
                <a href="https://api.whatsapp.com/send?phone=2349046146129&text=Hi,%20I%20would%20like%20to%20order%20a%20meal%20with%20Free%20Delivery%20to%20Lekki%20Phase%201"
                    target="_blank" class="btn-yellow">Order Now</a>
            </div>
        </div>
        </section>
    </div>

    <div class="mt-5">
        <div class="container-2">
            <div class="row">
                <div class="mb-3 col-md-4">
                    <div class="img-container">
                        <img src="{{ asset('front-assets/images/deli-fruitp.jpg') }}" alt="fruits" class="rounded-lg"
                            style="width:100%;">
                        <div class="centered">
                            <p>Come enjoy our delicious Fruit Farfait!.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-md-4">
                    <div class="img-container">
                        <img src="{{ asset('front-assets/images/deli-roll.jpg') }}" alt="chicken-roll" class="rounded-lg"
                            style="width:100%;">
                        <div class="centered">Spicy chicken wraps</div>
                    </div>
                </div>
                <div class="mb-3 col-md-4">
                    <div class="img-container">
                        <img src="{{ asset('front-assets/images/deli-sandwich.jpg') }}" height="360" alt="Sandwiches" class="rounded-lg"
                            style="width:100%;">
                        <div class="centered">Fresh fruit Parfait and Sandwiches.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
@push('custom-scripts')
@endpush

