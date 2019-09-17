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

function selectIngredient(select)
{
  var $ul = $(select).prev('ul');

  if ($ul.find('input[value=' + $(select).val() + ']').length == 0)
    $ul.append('<li onclick="$(this).remove();">' +
      '<input type="hidden" name="ingredients[]" value="' +
      $(select).val() + '" /> ' +
      $(select).find('option[selected]').text() + '</li>');
}

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
