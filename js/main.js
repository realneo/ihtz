// Messages 
var deleteMsg = 'Are you sure you want to delete this item?';
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});

$(function(){
    $('.donate_layer').hover(function() {
        $(this).stop().animate({"top":"-25px"}, 400);
    }, function() {
        $(this).stop().animate({"top":"5px"}, 400);
    });
    
    var gotoHashTab = function (customHash) {
 var hash = customHash || location.hash;
 var hashPieces = hash.split('?'),
  activeTab = $('[href=' + hashPieces[0] + ']');
  activeTab && activeTab.tab('show');
}

// onready go to the tab requested in the page hash
gotoHashTab();

// when the nav item is selected update the page hash
$('.nav a').on('shown', function (e) {
    window.location.hash = e.target.hash;
})

// when a link within a tab is clicked, go to the tab requested
$('.tab-pane a').click(function (event) {
    if (event.target.hash) {
        gotoHashTab(event.target.hash);
    }
});
    
});
