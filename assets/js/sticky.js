$(document).ready(function() {
var stickyNavTop = $('.quick-navbar').offset().top;
 
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    $('.quick-navbar').addClass('sticky');
} else {
    $('.quick-navbar').removeClass('sticky'); 
}
};
 
stickyNav();
 
$(window).scroll(function() {
  stickyNav();
});
});