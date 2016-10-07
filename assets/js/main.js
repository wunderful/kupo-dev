(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
window.app = window.app || {};

$(document).ready(function() {
	require('./scripts/variables.js');
	require('./scripts/init.js');
	require('./scripts/resize.js');
});
},{"./scripts/init.js":2,"./scripts/resize.js":3,"./scripts/variables.js":4}],2:[function(require,module,exports){
window.app = window.app || {};

/*
| --------------------------------------------------------------------
| Match Height
| --------------------------------------------------------------------
|
| Equalises heights of elements with the 'equal' class.
|
*/

$('.equal').matchHeight();

/*
| --------------------------------------------------------------------
| Calculate Window Width
| --------------------------------------------------------------------
*/

app.windowWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

/*
| --------------------------------------------------------------------
| Initialise Tabs
| --------------------------------------------------------------------
*/

$('.tabs').tabs();

/*
| --------------------------------------------------------------------
| Initialise Placeholder
| --------------------------------------------------------------------
*/

$('input, textarea').placeholder();

/*
| --------------------------------------------------------------------
| Initialise Superfish
| --------------------------------------------------------------------
*/

$('.sf-menu').superfish();

/*
| --------------------------------------------------------------------
| Smooth Scrolling
| --------------------------------------------------------------------
*/

$(function() {
	$('a[href*="#"]:not([href="#"],[href="#menu-mobile"],.mm-menu a[href*="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
		
				return false;
			}
		}
	});
});

/*
| --------------------------------------------------------------------
| Initialise Mmenu
| --------------------------------------------------------------------
*/

var $menu = $('.menu--mobile'),
	$html = $('html, body');

$menu.mmenu({
	offCanvas: {
		position: 'bottom',
		zposition: 'front'
	},
	navbar: {
		title: 'Menu'
	}
});

app.mmenu = $menu.data('mmenu');
app.mmenu.setSelected($menu.find('li').first());

var closer = null;

$menu.find('a').on('click', function() {
	closer = $(this).attr('href');
});

app.mmenu.bind('opening', function () {
    $('#open-left').addClass('open');
});

app.mmenu.bind('closing', function () {
    $('#open-left').removeClass('open');
});

app.mmenu.bind('closed', function() {
	if (closer) {
		setTimeout(function() {
			$html.animate({
				scrollTop: $(closer).offset().top
			});

			closer = null;
		}, 25 );
	}
});
},{}],3:[function(require,module,exports){
window.app = window.app || {};

/*
| --------------------------------------------------------------------
| Resize
| --------------------------------------------------------------------
|
| Runs when the window is resized.
|
*/

app.Resize = function() {
	/*
	| --------------------------------------------------------------------
	| Calculate Window Width
	| --------------------------------------------------------------------
	*/

	app.windowWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

	if(app.windowWidth > 768) {
		app.mmenu.close();
	}
};

$(window).resize(function() {
	app.Resize();
});

app.Resize();
},{}],4:[function(require,module,exports){
window.app = window.app || {};

/*
| --------------------------------------------------------------------
| Variables
| --------------------------------------------------------------------
*/

app.mobileMenuBreakpoint = 782;

/*
| --------------------------------------------------------------------
| Global
| --------------------------------------------------------------------
*/

app.windowWidth;
},{}]},{},[1]);
