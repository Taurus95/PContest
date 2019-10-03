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

    $('[data-fancybox]').fancybox({
    	protect: true
    });
    
    $('[data-fancybox="images"]').fancybox({
    afterLoad : function(instance, current) {
        var pixelRatio = window.devicePixelRatio || 1;

        if ( pixelRatio > 1.5 ) {
            current.width  = current.width  / pixelRatio;
            current.height = current.height / pixelRatio;
        }
    }
});
    $('#submitPic').click(function(){
        $("#submitPhoto").submit();
    });

    $('#tagSearch').keyup(function(e){
        if(e.which == 13) {
            $('#enterTag').click();
        }
        if($('#tagSearch').val().length == 1){

            $('#suggestions').empty();

            var request = $.ajax({
                url: "http://127.0.0.1:8000/tags?letter=" +  $("#tagSearch").val().toUpperCase(),
                method: "GET",
                contentType: "application/x-www-form-urlencoded"
            });

            request.done(function(data) {

                data.forEach(function(entry){
                    $('#suggestions').append("<option value='"+ entry.name +"'>");
                });

            });

            request.fail(function(jqxhr, textStatus, exception) {
                alert("buscador no funcionando: " + textStatus + exception );
            });
        }
    }
);


});

function submitChangeLang(){
    $("#lang").submit();
}

function addTag(){

    if($('#tagSearch').val() != ""){
        $("#tags").append("<li style=' display: inline;' onclick='this.parentNode.removeChild(this);'> <input type='hidden' name='tags[]' value='"+ $('#tagSearch').val() +"' /> "+ $('#tagSearch').val() +"<img class='dropImage' src='img/x-button.png' alt=''> </li>");
    }
    $('#tagSearch').val("");
    $('#tagSearch').focus();
}
