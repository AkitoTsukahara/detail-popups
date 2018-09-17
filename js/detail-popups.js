(function( $ ) {

  $('.detail_target').on('click',function(){
    $(this).parent().toggleClass('active');
  });

})( jQuery );