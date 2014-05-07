if (Modernizr.mq("only all")) {

	// Toggle-Link wird hinzugefügt
	$('nav').find('ul')
		.after('<a href="#" title="Display navigation" class="toggle"><span data-icon="&#xe002;" aria-hidden="true"></span> <b>Display navigation</b></a>');

	// Bei Click auf Toggle-Link wird Klasse "on" hinzugefügt und Navigation getoggelt
	$('nav').children('a').on('click', function(e) {
	    $(this).toggleClass('on').prev().fadeToggle();
	    e.preventDefault();
	});
}

$('h1').wrap('<div>');
$('h2').wrap('<div>');