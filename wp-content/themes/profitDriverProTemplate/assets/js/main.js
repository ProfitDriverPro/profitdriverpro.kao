$(document).ready(function() {

	if ($(window).width() > 960)
	{
		window.sr = ScrollReveal({ reset: false });
		sr.reveal('#about .grid', {origin: 'bottom', duration: 1000, distance: '100px', scale: 1, easing: 'ease'});
		sr.reveal('#grid .section .photo', {origin: 'bottom', duration: 1900, distance: '100px', scale: 1, easing: 'ease'});
		sr.reveal('#grid .section .text', {origin: 'top', duration: 1900, distance: '100px', scale: 1, easing: 'ease'});
		sr.reveal('#demo .text', {origin: 'bottom', duration: 1200, distance: '100px', scale: 1, easing: 'ease'});
	}

    $(function() {
        $('#scrollDefaultExample').timepicker({ 'scrollDefault': 'now' });
    });

});

var $document = $(document),
    $element = $('#some-element'),
    className = 'hasScrolled';

$document.scroll(function() {
  if ($document.scrollTop() >= 750) {
    $('#floater').show();
  } else {
    $('#floater').hide();
  }
});


function fade(element) {
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.display = 'block';
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 10 + ")";
        op -= op * 0.1;
    }, 50);
}


function modalPop(){
	var modal = document.getElementById('myModal');
	modal.style.display= 'block';
}

function modalMagic(){

	modal = document.getElementById('myModal').style.display = "none";;

}