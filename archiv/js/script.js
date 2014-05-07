if (Modernizr.mq("only all")) {

	$('nav').find('ul')
		.after('<a href="#" title="Navigation einblenden">Navigation einblenden</a>');

	$('nav').children('a').on('click', function(e) {
	    $(this).toggleClass('on').prev().fadeToggle();
	    e.preventDefault();
	});
}