;(function( $, $w, $d ) {

  var $ks = $('.knob-scroll input'),
        h = function( e ) { return e.height() };

  $w.on('load scroll', function(){
    var d = h( $d ),
        w = h( $w ),
        s = Math.round( $w.scrollTop() / ( d - w ) * 100 );
    $ks.val( s ).trigger('change');
  });

  function knobToScroll( val ) {
    var d = h( $d ), 
        w = h( $w );
    $w.scrollTop( val * ( d - w ) / 100 );
  }

  $ks.knob({
    'thickness' : '.1',
    'fgColor'   : 'rgba(0,188,212,1)',
    'bgColor'   : 'rgba(0,0,0,0)',
    'width'     : '45',
    release : function ( val ) {
      knobToScroll( val );
    }// Show input:
  }).find('input').hide();

})( jQuery, jQuery( window ), jQuery( document ) );