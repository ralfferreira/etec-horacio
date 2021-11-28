document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#image-slider', {
        cover      : true,
        autoplay    : true,    
        rewind      : true,
        resetProgress: false,
    } ).mount();
  } );