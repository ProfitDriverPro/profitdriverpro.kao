$(document).ready(function() {

	if ($(window).width() > 960)
	{
		window.sr = ScrollReveal({ reset: false });
		sr.reveal('#about .grid', {origin: 'bottom', duration: 1000, distance: '100px', scale: 1, easing: 'ease'});
		sr.reveal('#grid .section .photo', {origin: 'bottom', duration: 1900, distance: '100px', scale: 1, easing: 'ease'});
		sr.reveal('#grid .section .text', {origin: 'top', duration: 1900, distance: '100px', scale: 1, easing: 'ease'});
		sr.reveal('#demo .text', {origin: 'bottom', duration: 1200, distance: '100px', scale: 1, easing: 'ease'});
	}
});