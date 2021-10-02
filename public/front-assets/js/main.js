$(document).ready( function() {

    $('.increment-btn').click(function(e){
        e.preventDefault();

        var incr_value = $('.qty-input').val();
        var value = parseInt(incr_value,10);
        value = isNaN(value) ? 0 : value;
        if(value < 10)
        {
            value++;
            $('.qty-input').val(value);
        }
    });

    $('.decrement-btn').click(function(e){
        e.preventDefault();

        var decr_value = $('.qty-input').val();
        var value = parseInt(decr_value,10);
        value = isNaN(value) ? 0 : value;
        if(value > 1)
        {
            value--;
            $('.qty-input').val(value);
        }
    });
});
