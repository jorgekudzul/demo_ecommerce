jQuery( '.plus' ).on( 'click', function() {
    plusMinus('+');
} );

jQuery( '.minus' ).on( 'click', function() {
    plusMinus('-');
} );

function plusMinus(operator) {
    var object = jQuery( ".quantity" ).find('input');
    var value = object.val();
    if (operator == '+') {
        value++;
        object.val(value+"");
    } else {
        if (value == 1) {
            return false;
        }
        value--;
        object.val(value+"");
    }

    return true;
}