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

    $('#tagSearch').keypress(function(){
        if($('#tagSearch').val().length == 1){
            alert("con 1");

            var datos_enviados = {
                'letter': $("#tagSearch").val()
            }

            var request = $.ajax({
                url: "",
                method: "POST",
                data: datos_enviados,
                contentType: "application/x-www-form-urlencoded"
            });


            request.done(function(data) {

            });

            request.fail(function(jqxhr, textStatus, exception) {
                alert("Hubo un error: " + textStatus + exception + $("select[name=Region]").val());
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
        $("#tags").append("<li style=' display: inline;' onclick='this.parentNode.removeChild(this);'> <input type='hidden' name='ingredients[]' value='"+ $('#tagSearch').val() +"' /> "+ $('#tagSearch').val() +"<img class='dropImage' src='img/x-button.png' alt=''> </li>");
    }
    $('#tagSearch').val("");
    $('#tagSearch').focus();
}
