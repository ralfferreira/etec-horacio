document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '.category-list', {
    perPage: 5,
    breakpoints: {
        '600': {
            perPage: 2,
        },
    },
    autoWidth: true,
    pagination: false,
    'arrowPath': 'm15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z',
    classes: {
      prev  : 'splide__arrows--prev prev',
      next  : 'splide__arrows--next next',
      autoWidth: true,
      autoHeight: true,
    },
	} ).mount();
} );