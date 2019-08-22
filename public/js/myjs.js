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
