// Messages 
var deleteMsg = 'Are you sure you want to delete this item?';
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});

$(function(){
    $('.donate_layer').hover(function() {
        $(this).stop().animate({"top":"0px"}, 400);
    }, function() {
        $(this).stop().animate({"top":"170px"}, 400);
    });
});