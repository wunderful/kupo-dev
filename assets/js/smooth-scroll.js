// Get the height of the header
var quickNavbar = $(".quick-navbar").height();

$(function(){
$('a[href*=#]').click(function() {
if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
        var $target = $(this.hash);
        $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
        if ($target.length) {
            var targetOffset = $target.offset().top - quickNavbar;
            $('html,body').animate({scrollTop: targetOffset - 30}, 1000);
            return false;
        }
    }
  });
});