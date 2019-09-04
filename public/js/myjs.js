$(window).bind('scroll', function() {
    var top = $(document).scrollTop();
    if (top >= 110) {
        $("#MainNav").removeClass('bg-transparent');
        $("#MainNav").addClass('bg-dark');
    } else {
        $("#MainNav").addClass('bg-transparent');
        $("#MainNav").removeClass('bg-dark');

    }
})
$(document).ready(function(){
    $('.home-carrousel').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000
    });
});

$('[data-fancybox]').fancybox({
	toolbar  : false,
	smallBtn : true,
	iframe : {
		preload : false,
	}
})
