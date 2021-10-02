<header class="shadow-sm header">
    <div class="container-2">
       <div class="d-flex justify-content-between">
        <div>
            <a href="{{ url('/') }}" style="color: black;">FreshDeli</a>
        </div>
        <nav>
            <a href="{{ url('/cart') }}" class="cart-btn"><img src="{{ asset('front-assets/images/cart-icon2.svg') }}" class="cart-icon" alt="cart-icon">
                @if(Cart::isEmpty())
                Cart
                @else
                 <b class="cart-item-circle">
                    {{ Cart::getContent()->count() }}
                </b>
                @endif
            </a>
        </nav>
       </div>
    </div>
</header>
