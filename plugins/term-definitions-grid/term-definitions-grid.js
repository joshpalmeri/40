$(document).ready(function() {

	var $termDefinitions = $('.term-definitions-grid');
	var $termDefinitionsItem = $('.term-definitions-grid li');

	$termDefinitionsItem.on('click',function(event) {
		
		event.preventDefault();
		if($(this).hasClass('active')) {
			$('.term-definitions-grid li.active').removeClass('active');
		} else {
			$('.term-definitions-grid li.active').removeClass('active');
			$(this).toggleClass('active');
		}
		
	});

});