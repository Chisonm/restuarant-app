 <!-- Modal -->
 <div class="modal fade" id="addToCartModal-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
 aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered product_data" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title">Cheese Burger</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>
         <div class="modal-body product_data">
             <div class="d-flex justify-content-around modal-product">
                 <img src="{{  $product->product_image  }}" width="100" alt="product-image">
                 <div class="product-content">
                     <h4>{{ $product->product_name }}</h4>
                     <h5 class="mt-2 mb-3 price">NGN {{number_format($product->price, 2, '.', ',') }}</h5>
                     <div class="mb-80 d-flex justify-content-between">
                         <input type="hidden" class="prod_id" value="{{ $product->id }}">
                         <button class="decrement-btn">-</button>
                         <input type="text" name="pro_qty" value="1" class="text-center form-control qty-input" style="border: 0px">
                         <button class="increment-btn">+</button>
                     </div>
                     <button type="submit" class="add-to-cart-btn-modal addToCart">Add to cart NGN {{number_format($product->price, 2, '.', ',') }}</button>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>