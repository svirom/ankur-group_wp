(function($) {

/** jQuery Document Ready */
$(document).ready(function(){

$( 'a.ajax-post' ).off( 'click' ).on( 'click', function( e ) {

// Вызвать модальное окно
$('#wrapper').fadeIn(200);
$('.popup_post').fadeIn(600);

/** Prevent Default Behaviour */
e.preventDefault();

/** Get Post ID */
var post_id = $(this).attr( 'id' );

/** Ajax Call */
$.ajax({

cache: false,
timeout: 8000,
url: ajaxurl,
type: "POST",
data: ({ action:'theme_post_example', id:post_id }),

beforeSend: function() {
$( '#ajax-response' ).html( 'Loading...' );
},

success: function( data, textStatus, jqXHR ){

var $ajax_response = $( data );
$( '#ajax-response' ).html( $ajax_response );

},

error: function( jqXHR, textStatus, errorThrown ){
console.log( 'The following error occured: ' + textStatus, errorThrown );
},

complete: function( jqXHR, textStatus ){
}

});

});

});

})(jQuery);