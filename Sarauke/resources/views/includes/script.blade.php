<script src="{{ url('frontend/libraries/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>
<script src="{{ url('OwlCarousel/dist//owl.carousel.min.js') }}"></script>

<script>
$('.owl-carousel').owlCarousel({
	nav:true, // Show next and prev buttons
	autoplaySpeed:300,
	navSpeed:800,
	items:1,
    dots: false,
    loop: true,
    lazyLoad: true,
    autoplay: true,
    animateIn: 'fadeIn',
    rewind: true,
    responsiveClass: true,
    autoHeight:true,
})

</script>
