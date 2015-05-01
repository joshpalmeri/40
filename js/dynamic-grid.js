function setCategoryLabels(categoryLabel) {
	categoryLabel = categoryLabel=='*' ? 'All Categories' : categoryLabel;
	$('.honorees-grid h2 .text').text(categoryLabel);
	$('.show-all-trigger .category').text(categoryLabel);
}

function getBioData(item) {
	showItem($('.loader'));
	var filename = item.attr('data-filename');
	var fileExt = 'php';
	var year = item.attr('data-year');
	var linkHref = item.attr('href');

	var theURL = year + '/people/' + filename + '.' + fileExt;

	var theItemToLoad = theURL + ' .bio-overlay > *';
	var overlayContainer = $('.bio-overlay');
	var result = overlayContainer.load(theItemToLoad, function(response, status, xhr) {
		if ( status == "error" ) {
			console.log('Error: ' + xhr.status + " " + xhr.statusText );
		} else {
			showItem(overlayContainer);
			setBioContainerHeight();
			$('body').scrollTo( '0%', 50 );
			setUpListeners();
			setUpWaypoints();
			appendNextAndPrevNavigation(item);
			history.pushState(null, null, linkHref);
		}
		closeItem($('.loader'));
	});
}

function appendNextAndPrevNavigation(item) {
	var thisIndex = Number(item.attr('data-index'));
	var totalItems = 0;
	$('a.honoree-box').each(function() {
		totalItems = totalItems + 1;
	});
	console.log(thisIndex);
	var prevIndex = thisIndex - 1;
	if(prevIndex>0) {
		var prevItem = $('a.honoree-box[data-index="'+prevIndex+'"]');
		var prevItemDetails = [];
		prevItemDetails.firstName = prevItem.attr('data-first-name');
		prevItemDetails.lastName = prevItem.attr('data-last-name');
		console.log(prevItemDetails);

		var prevLinkHTML = '<a href="." class="prev pagination-trigger" data-role="button" aria-label="View previous biography" tabindex="0">';
		prevLinkHTML += '<span class="label icon-before">Previous</span>';
		prevLinkHTML += '<span class="name">'+prevItemDetails.firstName+' <br>'+prevItemDetails.lastName+'</span>';
		prevLinkHTML += '</a>';

		$('.pagination-wrapper').append(prevLinkHTML);
	}

	var nextIndex = thisIndex + 1;
	if(nextIndex<=totalItems) {
		var nextItem = $('a.honoree-box[data-index="'+nextIndex+'"]');
		var nextItemDetails = [];
		nextItemDetails.firstName = nextItem.attr('data-first-name');
		nextItemDetails.lastName = nextItem.attr('data-last-name');
		console.log(nextItemDetails);

		var nextLinkHTML = '<a href="." class="next pagination-trigger" data-role="button" aria-label="View previous biography" tabindex="0">';
		nextLinkHTML += '<span class="label icon-before">Next</span>';
		nextLinkHTML += '<span class="name">'+nextItemDetails.firstName+' <br>'+nextItemDetails.lastName+'</span>';
		nextLinkHTML += '</a>';

		$('.pagination-wrapper').append(nextLinkHTML);
	}

	//$('.pagination-wrapper').append();

	//now append to .pagination-wrapper
	
}

function setUpListeners() {
	//back button to close overlay
	$('.overlay-control.back').on('click',function(e) {
		e.preventDefault();
		history.back();
	});

	$('.overlay-control.category').on('click',function(e) {
		e.preventDefault();
		if($(window).width()>=960) {
			$('body').scrollTo( '120%', 800 );
			$('.category-nav').addClass('hover');
		} else {
			showItem($('.category-nav'));
			showItem($('.category-nav .close'));
		}
	});

	$('.category-nav').mouseenter(function() {
		if($(this).hasClass('hover')) {
			$(this).removeClass('hover');
		}
	});

	$('.overlay-controls h3').on('click', function() { 
		var thisCategory = $(this).attr('data-category');
		$('.filters button[data-filter="'+thisCategory+'"]').trigger('click');
	});

	$('.category-nav h3').on('click',function() {
		if($(window).width()<960) {
			showItem($('.category-nav'));
			showItem($('.category-nav .close'));
		}
	});

	$('.category-nav .close').on('click',function(e) {
		e.preventDefault();
		closeItem($('.category-nav'));
		closeItem($('.category-nav .close'));
	});

	$('.nivo-lightbox').nivoLightbox();
}

function setBioContainerHeight() {
	var bioOverlay = $('.bio-overlay');
	var totalHeight = 0;
	$('.bio-overlay > div').each(function() {
		totalHeight = totalHeight + $(this).outerHeight();
	});
	totalHeight = totalHeight + 120;
	bioOverlay.css('min-height',totalHeight+'px');
}

window.addEventListener("popstate", function(e) {
	overlayContainer = $('.bio-overlay');
	var isOverlayShowing = overlayContainer.hasClass('show');
    if(isOverlayShowing) {
    	closeItem(overlayContainer);
    } else {
    	var theURL = window.location.href;
    	//if URL contains people/ show the overlay with the last loaded information
    	if(theURL.indexOf('people/') > -1) {
    		showItem(overlayContainer);
    		setBioContainerHeight();
    	} else if(theURL.indexOf('?category=') > -1) { //else if 
    		var filterValue = decodeURIComponent($.urlParam('category'));
    		var $container = $('.isotope');
			if(filterValue=='*') {
				$container.isotope({ filter: ':not(.show-all-trigger)' });
			} else {
				$container.isotope({ filter: function() {
					var category = $(this).attr('data-category');
					// return true to show, false to hide
					if(filterValue==category || category=="Show All") {
						return true;
					} else {
						return false;
					}
				}
				});
			}
			$('body').scrollTo( '0%', 400 );
			setCategoryLabels(filterValue);
    	}
    }
});

function setUpWaypoints() {
	var $overlayControls = $('.overlay-controls');
	var inview = new Waypoint.Inview({
		element: $('.bio-overlay')[0],
		enter: function(direction) {
			//top of target hits bottom
			if(direction=='down') {
				$overlayControls.removeClass('stuck');
			} else {
				$overlayControls.addClass('stuck');
			}
			console.log('Enter triggered with direction ' + direction);
		},
		entered: function(direction) {
			//bottom of target hits bottom
			if(direction=='down') {
				$overlayControls.addClass('stuck');
			} else {
				$overlayControls.removeClass('stuck');
				/*$categoryNav.removeClass('stuck');*/
			}
			console.log('Entered triggered with direction ' + direction);
		},
		exit: function(direction) {
			//top of target hits top
			if(direction=='down') {
				$overlayControls.addClass('stuck');
			} else {
			}
			console.log('Exit triggered with direction ' + direction);
		},
		exited: function(direction) {
			//bottom of target hits top
			if(direction=='down') {
				$overlayControls.removeClass('stuck');
			} else {
			}
			console.log('Exited triggered with direction ' + direction);
		}
	});
}

$(document).ready(function() {

	//Application script for viewing bio data
	$honoreeTrigger = $('.honoree-box');
	$overlayContainer = $('.bio-overlay');

	$honoreeTrigger.on('click', function(e) {
		e.preventDefault();
		getBioData($(this));
	});

	setUpListeners();

});

// Custom js for isotope gallery

$( function() {

	var defaultFilter;

    //see if there is a category passed in the URL
	var defaultCategory = decodeURIComponent($.urlParam('category'));

	if(defaultCategory!=='' && defaultCategory!='null' && defaultCategory!==null && defaultCategory!=='0' && defaultCategory!=='*') {

		var theCategoryButton = $('.filters button[data-filter="'+defaultCategory+'"]');

		if(theCategoryButton.length) {

			//Set the filter
			defaultFilter = function() {
				var category = $(this).attr('data-category');
				// return true to show, false to hide
				if(defaultCategory==category || category=="Show All") {
					return true;
				} else {
					return false;
				}
			};

			setCategoryLabels(defaultCategory);

			//Mod showing class
			$('.filters button').each(function() {
				$(this).removeClass('selected');
			});
			theCategoryButton.addClass('selected');

		}

	} else {

		defaultFilter = ':not(.show-all-trigger)';

	}

  	// init Isotope
  	var $container = $('.isotope');
    $container.isotope({
      itemSelector: '.honoree-box',
      getSortData: {
        name: '.name',
        category: '[data-category]'
      },
      filter: defaultFilter
    });

    $('.show-all-trigger').on( 'click', function() {
    	$('.filters .show-all').trigger('click');
    });

	// bind filter button click
	$('.filters').on( 'click', 'button', function() { 
		//Mod showing class
		$('.filters button').each(function() {
			$(this).removeClass('selected');
		});
		$(this).addClass('selected');
		
		//Update the current category text
		var filterText = $( this ).text();
		$('.show-all-trigger .category').text(filterText);

		//Do the filter
		var filterValue = $( this ).attr('data-filter');
		if(filterValue=='*') {
			$container.isotope({ filter: ':not(.show-all-trigger)' });
		} else {
			$container.isotope({ filter: function() {
				var category = $(this).attr('data-category');
				// return true to show, false to hide
				if(filterValue==category || category=="Show All") {
					return true;
				} else {
					return false;
				}
			}
			});
		}
		$('body').scrollTo( '0%', 400 );
		setCategoryLabels(filterValue);


		//if mobile, hide the category menu
		if($(window).width()<960) {
			closeItem($('.category-nav'));
			closeItem($('.category-nav .close'));
		}

		//if overlay showing, trigger the overlay close
		overlayContainer = $('.bio-overlay');
		var isOverlayShowing = overlayContainer.hasClass('show');
	    if(isOverlayShowing) {
	    	closeItem(overlayContainer);
	    }
	    var year = $('.category-nav .close').attr('href');
	    var theURL = year + '?category=' + encodeURIComponent(filterValue);
	    history.pushState(null, null, theURL);
	});

});