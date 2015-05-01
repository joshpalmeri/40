function makeClass(className) {
	return '.'+className;
}
function makeId(className) {
	return '#'+className;
}

function accessibleShow($element) {
	$element.fadeOut(0,function(){
    	$element.removeClass('hide-accessible').addClass('open')
        .slideDown('fast');
    });
}

function accessibleHide($element) {
	$element.fadeIn(0,function(){
		$element.removeClass('open')
		.slideUp('fast',function() {
		    $element.addClass('hide-accessible').fadeIn('fast');
		});
	});
}

function accessibleShowDesktop($element) {
	if($(window).width()>=960) {
		$element.fadeOut(0,function(){
	    	$element.removeClass('hide-accessible-desktop').addClass('open')
	        .slideDown('fast');
	    });
	}
}

function accessibleHideDesktop($element) {
	if($(window).width()>=960) {
		$element.fadeIn(0,function(){
			$element.removeClass('open')
			.slideUp('fast',function() {
			    $element.addClass('hide-accessible-desktop').fadeIn('fast');
			});
		});
	}
}

function toggleElement($element) {
	if($(window).width()>=960) {
		if($element.hasClass('open')) {
			accessibleHide($element);
		} else {
			accessibleShow($element);
		}
	}
}

function toggleElementDesktop($element) {
	if($(window).width()>=960) {
		if($element.hasClass('open')) {
			accessibleHideDesktop($element);
		} else {
			accessibleShowDesktop($element);
		}
	}
}

function showItem(item) {
	item.addClass('show');
}

function closeItem(item) {
	item.removeClass('show');
}

$(document).ready(function() {

	/* mobile nav */

	var $mobileTriggerIcon = $('.mobile-nav-trigger .icon');
	var $mobileTrigger     = $('.mobile-nav-trigger');
	var $mainNav	       = $('.main-nav-list');
	var $mainNavLink	   = $('.main-nav-list a');
	var dataTarget;

	$mobileTrigger.on('click',function(event) {
		event.preventDefault();
		$mainNav.toggleClass('show');
		$mobileTriggerIcon.toggleClass('sbuicon-menu7').toggleClass('sbuicon-cross2');
	});

	$mainNavLink.on('click',function() {
		if($(window).width()<960) {
			$mobileTrigger.trigger('click');
		}
	});

});