$(document).ready(function() {

    $('#addToCart').click(function(e){
        e.preventDefault();
        console.log('added')
    })
});



function btnAddCart(param) {
    var product_id = param;
    var url = "{{ route('addtocart') }}".product_id;
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
      type: "POST",
      url: url,
      data: { product_id: product_id },
      success: function (data) {
        console.log(data);

      },
      error: function (data) {
        console.log('Error:', data);
      }
    });
  };
